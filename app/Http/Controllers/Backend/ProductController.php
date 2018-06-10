<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{


    public function __construct()
    {

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Product::paginate(20);
        return view('backend.modules.product.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.modules.product.create');
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->productRepository->getById($id);

//        var_dump($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->getById($id);

        $categoriesList = $product->categories()->pluck('id')->toArray();

        $productTagsNameList = $product->tagged()->pluck('tag_slug')->toArray();

        //dd($productTagsNameList);
        return view('backend.modules.product.create', compact('product', 'categoriesList', 'tagsList', 'productId', 'productTagsNameList'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\Backend\ProductUpdate $request, $id)
    {
        $product = $this->productRepository->getById($id);

        $request->persist($product);

        session()->put('productId', $product->id);

        return redirect()->back()->with('success', trans('general.message.success.product_update'));
    }

    /**
     * Remove the specified resource from storage.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::whereId($id)->delete();
//        DB::table('product_attributes')->where('product_id',$id)->delete();
//        DB::table('order_metas')->where('product_id',$id)->delete();
//        DB::table('product_metas')->where('product_id',$id)->delete();
//        $product->forceDelete();
        if($product) {
            return redirect()->back()->with('success', 'product deleted');
        }
        return redirect()->back()->with('error', 'product not deleted');
    }

    public function restore($id) {
        $element = Product::withTrashed()->whereId($id)->first();
        $element->restore();
        return redirect()->back()->with('success', 'product restored');
    }

}
