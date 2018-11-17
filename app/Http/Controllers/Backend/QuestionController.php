<?php

namespace App\Http\Controllers\Backend;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Question::paginate(parent::PAGINATE);
        return view('backend.modules.question.index', compact('elements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name_ar' => 'required|max:200|unique:questions',
            'name_en' => 'required|max:200|unique:questions',
            'notes_ar' => 'nullable',
            'notes_en' => 'nullable',
            'is_multi' => 'boolean|nullable',
            'is_text' => 'boolean|nullable',
            'active' => 'boolean|nullable',
            'order' => 'numeric|nullable',
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors());
        }
        if(!$request->is_multi) {
            $request->request->add(['is_text' => true]);
        }
        $element = Question::create($request->all());
        if ($element) {
            return redirect()->back()->with('success', 'question created successfully');
        }
        return redirect()->back()->with('error', 'question is not created');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $element = Question::whereId($id)->first();
        if ($element) {
            if ($element->surveys()->isNotEmpty()) {
                $element->survyes()->detach();
            }
            if ($element->answers()->isNotEmpty()) {
                $element->answers()->detach();
            }
            $element->delete();
            return redirect()->route('backend.question.index')->with('success', 'question deleted');
        }
        return redirect()->route('backend.question.index')->with('error', 'question is not deleted');
    }
}
