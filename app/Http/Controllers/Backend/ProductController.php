<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\Traits\ImageHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Product::with('gallery','product_attributes.size','product_attributes.color')->paginate(100);
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
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'sku' => 'required',
            'name_ar' => 'required:min:3|max:200',
            'name_en' => 'required|min:3|max:200',
//            'home_delivery_availability' => 'required',
//            'shipment_availability' => 'required',
            'on_sale' => 'required|boolean',
            'on_sale_on_homepage' => 'required|boolean',
            'on_homepage' => 'required|boolean',
            'price' => 'required|numeric',
            'weight' => 'required|numeric',
            'sale_price' => 'required|numeric',
            'size_chart_image' => 'image',
            'description_en' => 'min:3',
            'description_ar' => 'min:3',
            'notes_ar' => 'min:3',
            'notes_en' => 'min:3',
            'image' => 'required|image',
            'start_sale' => 'required|date|after_or_equal:today',
            'end_sale' => 'required|date|after_or_equal:today',
            'active' => 'required|boolean',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput(Input::all());
        }
        $element = Product::create($request->request->all());
        if ($element) {
            if ($request->hasFile('image')) {
                $this->saveMimes($element, $request, ['image'], ['1000', '1000'], false);
            }
            return redirect()->route('backend.product.index')->with('success', 'product saved.');
        }
        return redirect()->back()->with('error', 'unknown error');

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
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function restore($id)
    {
        $element = Product::withTrashed()->whereId($id)->first();
        $element->restore();
        return redirect()->back()->with('success', 'product restored');
    }

}
