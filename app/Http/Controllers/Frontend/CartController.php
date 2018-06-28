<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Services\ShippingManager;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $cart;
    use ShippingManager;

    public function __construct(\Gloudemans\Shoppingcart\Cart $cart)
    {
        $this->cart = $cart;
    }

    public function index()
    {
        $cart = $this->cart->content();
        $coupon = session()->has('coupon') ? session('coupon') : null;
        return view('frontend.modules.cart.index', compact('cart', 'coupon'));
    }


    public function addItem(Request $request)
    {
        $validator = validator($request->all(),
            [
                'product_id' => 'required|exists:products,id',
                'color_id' => 'required|exists:colors,id',
                'size_id' => 'required|exists:sizes,id',
                'qty' => 'required|integer|min:1',
            ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $product = Product::whereId($request->product_id)->first();

        $productAttribute = ProductAttribute::where([
            'color_id' => $request->color_id,
            'size_id' => $request->size_id,
            'product_id' => $request->product_id
        ])->with('size', 'color')->first();

        $this->cart->add($productAttribute->id, $product->name, $request->qty, $product->finalPrice,
            [
                'size_id' => $productAttribute->size_id,
                'color_id' => $productAttribute->color_id,
                'sizeName' => $productAttribute->sizeName,
                'colorName' => $productAttribute->colorName,
                'product' => $product
            ]
        );
        return redirect()->back()->with('success', trans('message.item_added_to_cart'));
    }


    public function removeItem($id)
    {
        Cart::search(function ($item, $rowId) use ($id) {
            $item->id == $id ? Cart::remove($rowId) : null;
        });
        return redirect()->route('frontend.cart.index')->with('success', trans('message.item_removed'));
    }

    public function clearCart()
    {
        $this->cart->destroy();
        return redirect()->home()->with('success', trans('message.cart_destroyed'));
    }

    public function checkout(Request $request)
    {
        $validate = validator($request->all(), [
            'country_id' => 'exists:countries,id',
            'area' => 'required_with:country_id'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        if ($request->has('country_id')) {
            $country = Country::whereId(request()->country_id)->first();
            $cartWeight = $this->cart->content()->pluck('options.product')->sum('weight');
            $shippingCost = $this->calculateCost($cartWeight, $request->country_id, $request->area);
            $area = request()->area;
        }
        $cart = $this->cart->content();
        return view('frontend.modules.checkout.index', compact('shippingCost', 'cartWeight', 'cart', 'country','area'));
    }

    public function applyCoupon(Request $request)
    {
        $validate = validator($request->all(), [
            'code' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->with('error', trans('general.coupon_not_correct'));
        }
        $coupon = Coupon::active()->where(['code' => $request->code, 'consumed' => false])
            ->where('due_date', '>=', Carbon::now())
            ->where('minimum_charge', '<=', $this->cart->subTotal())
            ->first();
        if ($coupon) {
            session()->put('coupon', $coupon);
            return redirect()->back()->with('success', trans('message.coupon_shall_be_applied'));
        } else {
            session()->forget('coupon');
            return redirect()->back()->with('error', trans('general.coupon_not_correct'));
        }

    }

}

/*
$data = '<?xml version="1.0" encoding="UTF-8"?>
<p:DCTRequest xmlns:p="http://www.dhl.com" xmlns:p1="http://www.dhl.com/datatypes" xmlns:p2="http://www.dhl.com/DCTRequestdatatypes" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.dhl.com DCT-req.xsd ">
  <GetQuote>
    <Request>
      <ServiceHeader>
        <MessageTime>'.date('c').'</MessageTime>
        <MessageReference>1234567890123456789012345678901</MessageReference>
        <SiteID>YOUR_DHL_SITE_ID</SiteID>
        <Password>YOUR_DHL_PASSWORD</Password>
      </ServiceHeader>
    </Request>
    <From>
        <CountryCode>KW</CountryCode>
        <Postalcode>11211</Postalcode>
    </From>
    <BkgDetails>
      <PaymentCountryCode>KW</PaymentCountryCode>
      <Date>2011-06-06</Date>
      <ReadyTime>PT10H21M</ReadyTime>
            <ReadyTimeGMTOffset>+01:00</ReadyTimeGMTOffset>
            <DimensionUnit>CM</DimensionUnit>

            <WeightUnit>KG</WeightUnit>
            <Pieces><Piece>
                <PieceID>1</PieceID>
                <Height>20</Height>
                <Depth>20</Depth>
                <Width>20</Width>
                <Weight>19</Weight>
            </Piece></Pieces>
            <IsDutiable>N</IsDutiable>
            <NetworkTypeCode>AL</NetworkTypeCode>
        </BkgDetails>
        <To>
            <CountryCode>KW</CountryCode>
            <Postalcode>10101</Postalcode>
        </To>
    </GetQuote>
</p:DCTRequest>';
$tuCurl = curl_init();
curl_setopt($tuCurl, CURLOPT_URL, "https://xmlpitest-ea.dhl.com/XMLShippingServlet");
curl_setopt($tuCurl, CURLOPT_PORT , 443);
curl_setopt($tuCurl, CURLOPT_VERBOSE, 0);
curl_setopt($tuCurl, CURLOPT_HEADER, 0);
curl_setopt($tuCurl, CURLOPT_POST, 1);
curl_setopt($tuCurl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($tuCurl, CURLOPT_POSTFIELDS, $data);
curl_setopt($tuCurl, CURLOPT_HTTPHEADER, array("Content-Type: text/xml","SOAPAction: \"/soap/action/query\"", "Content-length: ".strlen($data)));

$tuData = curl_exec($tuCurl);

curl_close($tuCurl);
$xml = simplexml_load_string($tuData);
print "<pre>";
print_r($xml);
*/
