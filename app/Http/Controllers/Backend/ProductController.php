<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\ProductStore;
use App\Http\Requests\Backend\ProductUpdate;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Product::with('gallery', 'product_attributes.size', 'product_attributes.color')->orderBy('id', 'desc')->paginate(100);
        return view('backend.modules.product.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::active()->onlyParent()->with('children.children')->get();
        $tags = Tag::active()->get();
        return view('backend.modules.product.create', compact('categories', 'tags'));
    }


    /**
     * Store a newly created resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductStore $request)
    {
        $element = Product::create($request->except(['_token', 'image', 'categories', 'tags']));
        if ($element) {
            $element->tags()->sync($request->tags);
            $element->categories()->sync($request->categories);
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
        $element = Product::whereId($id)->with('categories', 'tags')->first();
        $categories = Category::active()->onlyParent()->with('children.children')->get();
        $tags = Tag::active()->get();
        return view('backend.modules.product.edit', compact('element', 'tags', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdate $request, $id)
    {
        $element = Product::whereId($id)->first();
        $updated = $element->update($request->except(['_token', 'image', 'tags', 'categories']));
        if ($request->hasFile('image')) {
            $this->saveMimes($element, $request, ['image'], ['1000', '1000'], false);
        }
        if ($updated) {
            $element->categories()->sync($request->categories);
            $element->tags()->sync($request->tags);
            return redirect()->route('backend.product.index')->with('success', 'product saved.');
        }
        return redirect()->route('backend.product.edit', $id)->with('error', 'product not saved.');
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
