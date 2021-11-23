<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Question;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class QuestionController.
 *
 * @author  The scaffold-interface created at 2018-04-01 12:48:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class QuestionController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create($id)
    {
        $title = 'Create - question';
        
        return view('question.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question();

        
        $question->questionname = $request->question;
        $question->desc = $request->description;
        $question->type = $request->type;
        $question->parent_id = $request->parent_id;
        $question->answers = serialize($request->answers);//serialize(json_decode($request->answers,true));

       // dd($question->answers.'-'.unserialize($question->answers));
        //die();

        $question->save();



        return redirect('qlist/'.$question->parent_id);
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        $title = 'Show - question';

        if($request->ajax())
        {
            return URL::to('question/'.$id);
        }

        $question = Question::findOrfail($id);
        return view('question.show',compact('title','question'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - question';
        if($request->ajax())
        {
            return URL::to('question/'. $id . '/edit');
        }

        
        $question = Question::findOrfail($id);
        return view('question.edit',compact('title','question'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $question = Question::findOrfail($id);
    	
        $question->questionname = $request->question;
        $question->desc = $request->description;
        $question->type = $request->type;
        $question->answers = serialize($request->answers);
        
        
        $question->save();

        return redirect('qlist/'.$question->id);
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/question/'. $id . '/delete');

        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     	$question = Question::findOrfail($id);
     	$parent_id=$question->parent_id;
     	$question->delete();
        return redirect('qlist/'.$parent_id);
    }
}
