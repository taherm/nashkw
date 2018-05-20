<?php

use App\Models\Color;
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



