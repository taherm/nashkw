<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Gallery::all();
        return view('backend.modules.gallery.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validate = validator($request->all(), [
            'type' => 'required|alpha',
            'element_id' => 'required|integer'
        ]);
        if ($validate->fails()) {
            redirect()->back()->withErrors($validate);
        }
        return view('backend.modules.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = validator($request->all(), [
            'type' => 'required|alpha',
            'element_id' => 'required|integer',
            'cover' => 'image',
            'images' => 'array',
            'images.*' => 'image|max:1000'

        ]);
        if ($validate->fails()) {
            redirect()->back()->withInput(Input::all())->withErrors($validate);
        }
        if (request()->type === 'product') {
            $product = Product::whereId($request->element_id)->first();
            $element = $product->gallery()->create($request->except('images', 'cover', 'type', 'element_id', '_token'));
        }
        if ($element) {
            if ($request->hasFile('cover')) {
                $this->saveMimes($element, $request, ['cover'], ['750', '1334'], false);
            }
            if ($request->hasFile('images')) {
                $this->saveGallery($element, $request, 'images', ['750', '1334'], false);
            }
            return redirect()->back()->with('success', 'gallery saved success');
        }
        return redirect()->back()->with('error', 'gallery update error');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $validate = validator(request()->all(), [
            'type' => 'required|alpha',
            'element_id' => 'required|integer'
        ]);
        if ($validate->fails()) {
            redirect()->back()->withErrors($validate);
        }
        $element = Gallery::whereId($id)->first();
        return view('backend.modules.gallery.edit', compact('element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $element = Gallery::whereId($id)->first();

        $element->update($request->request->all());
        if ($element) {
            if ($request->hasFile('cover')) {
                $this->saveMimes($element, $request, ['cover'], ['750', '1334'], false);
            }
            if ($request->hasFile('images')) {
                $this->saveGallery($element, $request, 'images', ['750', '1334'], false);
            }
            return redirect()->back()->with('success', 'gallery saved success');
        }
        return redirect()->back()->with('error', 'gallery update error');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Gallery::whereId($id)->first();
        if($element->delete()) {
            return redirect()->back()->with('success', 'gallery deleted');
        }
        return redirect()->back()->with('error', 'gallery is not deleted');
    }

    public function deleteImage()
    {
        \DB::table('images')->where('id', '=', request()->image_id)->delete();
        return redirect()->back()->with('success', 'image deleted');
    }
}
