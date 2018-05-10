<?php

namespace Usama\Tap;

use App\Http\Controllers\Controller;
use App\Mail\OrderComplete;
use App\Models\Ad;
use App\Models\Branch;
use App\Models\Image;
use App\Models\Setting;
use App\Models\Deal;
use App\Models\Order;
use App\Models\OrderAttribute;
use App\Models\Plan;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

/**
 * Created by PhpStorm.
 * User: usamaahmed
 * Date: 7/15/17
 * Time: 6:04 PM
 */
class TapPaymentController extends Controller
{
    public function getGateWay()
    {
        return ["Name" => config('tap.gatewayDefault')];
    }

    public function getMerchant($totalPrice)
    {
        return [
            "AutoReturn" => config('tap.autoReturn'),
            "ErrorURL" => config('tap.errorUrl'),
            "HashString" => $this->getHashString($totalPrice),
            "LangCode" => config('tap.langCode'),
            "MerchantID" => config('tap.merchantId'),
            "Password" => config('tap.password'),
            "PostURL" => config('tap.postUrl'),
            "ReferenceID" => '',
            "ReturnURL" => config('tap.returnUrl'),
            "UserName" => config('tap.userName')
        ];
    }

    public function setHashString($totalPrice)
    {
        return $toBeHashedString = 'X_MerchantID' . config('tap.merchantId') .
            'X_UserName' . config('tap.userName') .
            'X_ReferenceID' . '45870225000' .
            'X_Mobile' . '1234567' .
            'X_CurrencyCode' . config('tap.currencyCode') .
            'X_Total' . $totalPrice;
    }

    public function getHashString($totalPrice)
    {
        return hash_hmac('sha256', $this->setHashString($totalPrice), config('tap.apiKey'));
    }

    public function createDealOrOrder(Request $request)
    {
        $user = User::whereId($request->user_id)->first();
        if ($request->type == 'user') {
            $plan = Plan::whereId($request->plan_id)->first();
            $oldDeal = $user->deal;
            $oldDeal->update(['valid' => false]);
            $deal = Deal::create([
                'price' => $plan->on_sale ? $plan->sale_price : $plan->price,
                'duration' => $plan->duration,
                'total' => $request->total,
                'valid' => false,
                'has_images' => $plan->has_images,
                'has_branches' => $plan->has_branches,
                'has_label' => $plan->has_label,
                'show_first' => $request->show_first,
                'plan_id' => $plan->id,
                'type' => $request->has('type') ? $request->type : 'user',
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now(),
                'images' => $user->images->count(),
                'branches' => $user->branches()->count()
            ]);
            $user->update(['deal_id' => $deal->id]);
            $oldDeal->delete();
            return $deal;
        } else if($request->type == 'branch') {
            $plan = $user->deal->plan;
            $deal = Deal::create([
                'price' => $plan->on_sale ? $plan->sale_price : $plan->price,
                'duration' => $plan->duration,
                'total' => $request->total,
                'valid' => false,
                'plan_id' => $plan->id,
                'type' => $request->type,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now(),
                'element_id' => $user->id,
                'branches' => $user->branches()->where('active', false)->count(),
                'images' => $user->images()->where("active", false)->count()
            ]);
            return $deal;
        }
    }

    public function makePayment(Request $request)
    {
        $validator = validator(request()->all(), [
            'email' => 'required|email',
            'mobile' => 'required|numeric',
            'type' => 'required|alpha',
            'total' => 'required|numeric',
            'user_id' => 'required|integer|exists:users,id',
            'show_first' => 'required|boolean'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->first(), 400);
        }

//        $cart = collect($request->cart);
        $deal = $this->createDealOrOrder($request);
        $user = User::whereId($request->user_id)->first();
        if ($deal) {
            $finalArray = [
                'CustomerDC' => [
                    "Email" => $request->email,
                    "Floor" => $request->floor ? $request->floor : "0",
                    "Gender" => $request->gender ? $request->gender : "0",
                    "ID" => $user ? $user->id : "0",
                    "Mobile" => $request->mobile,
                    "Name" => $request->has('name') ? $request->name : $user->name,
                    "Nationality" => $request->nationality ? $request->nationality : "KWT",
                    "Street" => $request->address ? $request->address : $user->address,
                    "Area" => $request->area ? $request->area : $user->area_id,
                    "CivilID" => $request->civil_id ? $request->civil_id : "0",
                    "Building" => $user->address,
                    "Apartment" => $user->address,
                    "DOB" => $deal->created_at
                ],
                'lstProductDC' => $request->cart,
                'lstGateWayDC' => [$this->getGateWay()],
                'MerMastDC' => $this->getMerchant($deal->total),
            ];
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => config('tap.paymentUrl'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => json_encode($finalArray, JSON_UNESCAPED_SLASHES),
                CURLOPT_HTTPHEADER => array(
                    "content-type: application/json"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $response = (\GuzzleHttp\json_decode($response));
                if (!$response->ResponseCode) {
                    /* response how it looks
                    * {#966 ▼
                        +"PaymentURL": "http://live.gotapnow.com/webpay.aspx?ref=210092017100407130&sess=kEh3R7REOFWP0b3BFM6Kkm2O7AQck8Jg"
                        +"ReferenceID": "210092017100407130"
                        +"ResponseCode": "0"
                        +"ResponseMessage": "Success"
                        +"TapPayURL": "http://live.gotapnow.com/webpay.aspx"
                    }
                 * store the payment and update it with the refrence
                    * */
                    // create the order here
                    $deal->update(['reference_id' => $response->ReferenceID]);
                    return $response->PaymentURL;
                }

                return response()->json($response->ResponseMessage);

            }
        } // endif
    }

    public function result(Request $request)
    {
        // once the result is success .. get the deal from refrence then delete all other free deals related to such ad.
        $deal = Deal::where(['reference_id' => $request->ref])->with('user', 'plan')->first();
        if ($deal->type == 'user') {
            $deal = Deal::where(['reference_id' => $request->ref])->with('user', 'plan')->first();
            $user = $deal->user;
            $deal->update([
                'valid' => 1,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addYear($deal->plan->duration),
                'images' => $user->images()->count(),
                'branches' => $user->branches()->count()
            ]);
            $deal->user->branches()->update(['active' => true]);
            $deal->user->images()->update(['active' => true]);
        } else if ($deal->type == 'branch') {
            $deal = Deal::where(['reference_id' => $request->ref])->first();
            $user = User::whereId($deal->element_id)->first();
            $user->deal()->update([
                'images' => $user->images()->count(),
                'branches' => $user->branches()->count()
            ]);
            $deal->update(['valid' => 1, 'start_date' => Carbon::now(), 'end_date' => Carbon::now()->addYear($deal->plan->duration)]);
            $user->branches()->update(['active' => true]);
            $user->images()->update(['active' => true]);
        }
        $contactus = Setting::first();
        Mail::to($user->email)->cc($contactus->email)->send(new OrderComplete($deal, $user));
        abort('201', 'Your payment process is successful .. your order has been created.');
    }

    public function error(Request $request)
    {
        $deal = Deal::withoutGlobalScopes()->where(['reference_id' => $request->ref])->first();
        abort('404', 'Your payment process is unsuccessful .. your deal is not created please try again or contact us.');
    }
}

