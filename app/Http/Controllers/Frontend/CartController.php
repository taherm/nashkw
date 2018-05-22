<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\Product;
use App\Models\ProductAttribute;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct()
    {
    }


    public function index()
    {
        $cart = Cart::content();
        return view('frontend.modules.cart.index', compact('cart'));
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

        Cart::add($productAttribute->id, $product->name, $request->qty, $product->finalPrice,
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
        Cart::destroy();
        return redirect()->home()->with('success', trans('message.cart_destroyed'));
    }

    public function checkout(Request $request)
    {
        dd($request->all());
        return view('frontend.modules.checkout.index');
    }

    public function applyCoupon(Request $request)
    {
        $validate = validator($request->all(), [
            'code' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->with('error', trans('general.coupon_not_correct'));
        }
        $coupon = Coupon::active()->where(['code' => $request->code, 'consumed' => false])->first();
        if ($coupon) {
            session()->put('coupon', $coupon);
            return redirect()->back()->with('success', trans('message.coupon_shall_be_applied'));
        }
        return redirect()->back()->with('error', trans('general.coupon_not_correct'));
    }

}
