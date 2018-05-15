<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Search\Filters;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public $product;


    public function __construct(Product $product)
    {
        $this->product = $product;
    }


    public function index(Filters $filters)
    {
        $products = $this->product->filters($filters)->paginate(12);
        return view('frontend.modules.product.index', compact('products'));
    }

    public function search(Filters $filters)
    {
        $validator = validator(request()->all(), ['search' => 'nullable']);
        if ($validator->fails()) {
            return redirect()->home()->withErrors($validator->messages());
        }

        $elements = $this->product->filters($filters)->with('categories')->get();

        dd($elements);

        if (!$elements->isEmpty()) {
            return view('frontend.modules.ad.index', compact('elements'));
        } else {
            return redirect()->home()->with('error', title_case('no items found .. plz try again'));
        }
    }

    public function show($productId)
    {
        $product = $this->product->whereId($productId)->with('gallery', 'tagged')->first();
        // return array of ['size_id', 'color', 'att_id','qty' ] for one product
        $data = $product->data;
        $products = $this->product->getRelatedProducts($productId);
        /*
         * Rating Percentage for each product loaded.
         *
         * */
        return view('frontend.modules.product.show', compact('products', 'product', 'data'));
    }

    /**
     * @param $productId
     * @param $sizeId
     * @return mixed
     * Usage : Product Details Page
     * Description : get all data (attribute_id + color + qty ) json response according to the sizeId
     */
    public function getDataFromSize($productId, $sizeId)
    {
        return $this->product->whereId($productId)->with('product_attributes')->first()->getDataFromSize($sizeId);
    }

    /**
     * @param $productId
     * @param $colorId
     * @return mixed
     * Usage : Product Details Page
     * Description : get all data (attribute_id + size + qty ) json response according to the colorId
     */
    public function getDataFromColor($productId, $colorId)
    {
        return $this->product->whereId($productId)->with('product_attributes')->first()->getDataFromColor($colorId);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * Usage : Search Input in the Homepage
     * Description : Search
     */
    public function searchItem(Request $request)
    {

        $products = $this->product->searchItem(trim($request->term));

        return view('frontend.modules.product.index', compact('products'));
    }

    public function getTaggedProducts($tagName)
    {

        $products = $this->product->whereHas('tagged', function ($q) use ($tagName) {
            $q->where('tag_name', '=', $tagName);
        })->paginate(9);

        return view('frontend.modules.tag.index', compact('products'));
    }


    public function getRecommendedProducts()
    {
        $product = Auth::user()->orders()->first()->order_metas()->first();

        $products = $this->product->getWhereId($product->product_id)->first()->categories()->first()->products()->take(6)->get();

        return view('frontend.modules.recommendations.index', compact('products'));

    }

    public function getColorsFromSize($id, $sizeId)
    {
        // attribute_id, colorId, Qty
        $colorList = $this->product->colorsFromSize($id, $sizeId);
        dd($colorList);
    }

}
