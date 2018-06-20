<?php

namespace App\Http\Controllers\Backend;

use App\Core\PrimaryController;
use App\Core\Services\Image\PrimaryImageService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\CategoryStore;
use App\Models\Category;
use App\Src\Category\CategoryRepository;
use App\Http\Requests\Backend\CategoryUpdate;
use App\Http\Requests\Backend\CategoryCreate;
use Illuminate\Support\Facades\Cache;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Category::onlyParent()->with('children.children')->get();
        return view('backend.modules.category.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validate = validator(request()->all(), ['parent_id' => 'required|integer']);
        if ($validate->failed()) {
            return redirect()->back()->with('error', 'missing Parent ID !!');
        }
        return view('backend.modules.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CategoryCreate $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStore $request)
    {
        $element = Category::create($request->request->all());
        if ($request->hasFile('image')) {
            $this->saveMimes($element, $request, ['image'], ['1000', '1000'], false);
        }
        if ($element) {
            return redirect()->route('backend.category.index')->with('success', 'category created.');
        }
        return redirect()->route('backend.category.index')->with('error', 'category error.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $element = Category::whereId($id)->with('children')->first();
        return view('backend.modules.category.edit', compact('element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  CategoryUpdate $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdate $request, $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //check if category not assigned to any of products
        if ($this->category->getById($id)->products->count() > 0) {
            return redirect()->back()->with('error', 'Category Assigned to Product!!');
        }
        //check if category has subcategories
        if ($this->category->getById($id)->children->count() > 0) {
            return redirect()->back()->with('error', 'Category Already has been Assigned To SubCategory!!');
        }

        if ($this->category->getById($id)->delete()) {

            return redirect()->route('backend.category.index')->with('success', 'Category Removed successfully!');

        }
        return redirect()->back()->with('error', 'not successful !!');
    }
}
