<?php

use App\Models\Color;
use App\Models\Country;
use App\Models\ProductAttribute;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('size', function () {
    $productAttribute = ProductAttribute::where(['product_id' => request()->product_id, 'color_id' => request()->color_id])->with('size')->get();
    return response()->json($productAttribute, 200);
});

Route::get('qty', function () {
    $productAttribute = ProductAttribute::where([
        'product_id' => request()->product_id,
        'color_id' => request()->color_id,
        'size_id' => request()->size_id,
    ])->with('size')->first();
    return response()->json($productAttribute->qty, 200);
});


Route::get('country/{id}', function ($id) {
    $destinationCountry = Country::whereId($id)->first();
    $country = [
        'ClientInfo' => [
            "UserName" => env('ARAMEX_USERNAME'),
            "Password" => env('ARAMEX_PASSWORD'),
            "Version" => "v2.0",
            "AccountNumber" => env('ARAMEX_ACCOUNT_NUMBER'),
            "AccountPin" => env('ARAMEX_ACCOUNT_PIN'),
            "AccountEntity" => env('ARAMEX_ACCOUNT_ENTITY'),
            "AccountCountryCode" => env('ARAMEX_ACCOUNT_COUNTRY_CODE'),
            'Source' => NULL
        ],
        'Transaction' => [
            'Reference1' => '001',
        ],
        'Code' => $destinationCountry->country_iso_alpha3,
    ];
    $area = [
        'ClientInfo' => [
            "UserName" => env('ARAMEX_USERNAME'),
            "Password" => env('ARAMEX_PASSWORD'),
            "Version" => "v2.0",
            "AccountNumber" => env('ARAMEX_ACCOUNT_NUMBER'),
            "AccountPin" => env('ARAMEX_ACCOUNT_PIN'),
            "AccountEntity" => env('ARAMEX_ACCOUNT_ENTITY'),
            "AccountCountryCode" => env('ARAMEX_ACCOUNT_COUNTRY_CODE'),
            'Source' => NULL
        ],

        'Transaction' => ['Reference1' => '001'],
        'CountryCode' => $destinationCountry->country_iso_alpha3,
    ];
    try {
        $countriesSoapClient = new \SoapClient(env('ARAMEX_COUNTRY_URL'), array('trace' => 1));
        $country = $countriesSoapClient->FetchCountry($country);
        if (!is_null($country->Country) && !is_null($country->Country->Name)) {
            $aresSoapClient = new \SoapClient(env('ARAMEX_COUNTRY_URL'), array('trace' => 1));
            $areas = $aresSoapClient->FetchCities($area);
            return response()->json($areas->Cities, 200);
        } else {
            throw new \Exception("Error with Aramex .. please try again later.");
        }
    } catch (SoapFault $fault) {
        dd($fault);
        throw new \Exception("Shipping to {$destinationCountry->name} is not available");
    }
});



