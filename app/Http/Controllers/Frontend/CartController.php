<?php

namespace App\Http\Controllers\Frontend;


use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductAttribute;

use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }


    public function index() {
        return $this->cart->content();
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
        ])->first();

        $this->cart->add($productAttribute->id, $product, $request->qty, $product->finalPrice, ['size_id' => $productAttribute->size_id, 'color_id' => $productAttribute->color_id]);

        return redirect()->back()->with('success', trans('message.item_added_to_cart'));

    }


    public function removeItem($id) {
        $this->cart->remove($id);
        return redirect()->back()->with('success', trans('message.item_removed'));
    }

    public function clearCart() {
        $this->cart->destroy();
        return redirect()->back()->with('success', trans('message.cart_destroyed'));
    }

}
