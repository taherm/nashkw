<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Questionnaire;
use App\Models\Survey;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'name' => 'required|max:200',
            'email' => 'email|nullable',
            'mobile' => 'required|numeric',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate->errors())->withInput(Input::all());
        }
        $questionnaire = Questionnaire::create($request->only(['name', 'email', 'mobile']));
        if ($questionnaire) {
            foreach ($request->question_id as $questionId => $value) {
                $question = Question::whereId($questionId)->first();
                if ($question) {
                    $answer = $question->is_multi ? Answer::where(['value' => $request->question_id[$question->id]])->first() : null;
                    $questionnaire->results()->create([
                        'question_id' => $question->id,
                        'answer_id' => $answer ? $answer->id : null,
                        'questioned' => $question->name,
                        'answered' => $question->is_multi ? $answer->value : $value
                    ]);
                }
            }
            return redirect()->route('frontend.home')->with('success', trans('message.questionnaire_success'));
        }
        return redirect()->route('frontend.home')->with('error', 'Unknown Error while saving questionnaire');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $element = Survey::whereId($id)->active()->with('questions.answers')->first();
        if ($element) {
            return view('frontend.modules.survey.show', compact('element'));
        } elseif (auth()->user()->isAdmin && $element) {
            $element = Survey::whereId($id)->with('questions.answers')->first();
            return view('frontend.modules.survey.show', compact('element'));
        }
        return redirect()->route('frontend.home')->with('info', trans('message.questionnaire_not_available'));
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
        //
    }
}
