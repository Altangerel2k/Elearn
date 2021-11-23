<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Questionnaire;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use App\Auth;

/**
 * Class QuestionnaireController.
 *
 * @author  The scaffold-interface created at 2018-03-31 06:33:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class QuestionnaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - questionnaire';
        $questionnaires = Questionnaire::paginate(20);
        return view('questionnaire.index',compact('questionnaires','title'));
    }
    public function indexfront()
    {
        $title = 'Index - questionnaire';
        $questionnaires = Questionnaire::orderby('created_at','desc')->paginate(20);
        return view('front.views.quiz',compact('questionnaires','title'));
    }
    public function quizdet($id)
    {
        $quiz=Questionnaire::find($id);
        return view('front.views.quizdet',compact('quiz'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - questionnaire';
        
        return view('questionnaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $questionnaire = new Questionnaire();
        $questionnaire->title = $request->title;
        $questionnaire->headline = $request->headline;
        
//        $questionnaire->is_active = $request->is_active;

        $questionnaire->about = $request->about;
        $questionnaire->result_text = $request->result_text;

        if ($request->hasFile('thumb')) {
            $imageName = time().'.'.$request->thumb->getClientOriginalExtension();
            $request->thumb->move(public_path('upload'), $imageName);
            $questionnaire->thumb=$imageName;
        }

        $questionnaire->username = $request->username;
        $questionnaire->save();

        return redirect('qlist');
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
        $title = 'Show - questionnaire';

        if($request->ajax())
        {
            return URL::to('questionnaire/'.$id);
        }

        $questionnaire = Questionnaire::findOrfail($id);
        $questions=$questionnaire->childs();

        return view('questionnaire.show',compact('title','questionnaire','questions'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - questionnaire';
        if($request->ajax())
        {
            return URL::to('questionnaire/'. $id . '/edit');
        }

        
        $questionnaire = Questionnaire::findOrfail($id);
        return view('questionnaire.edit',compact('title','questionnaire'  ));
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
        $questionnaire = Questionnaire::findOrfail($id);
    	
        $questionnaire->title = $request->title;
        
        $questionnaire->headline = $request->headline;
        

        
        $questionnaire->about = $request->about;
        
        $questionnaire->result_text = $request->result_text;

        if ($request->hasFile('thumb')) {
            $imageName = time().'.'.$request->thumb->getClientOriginalExtension();
            $request->thumb->move(public_path('upload'), $imageName);
            $questionnaire->thumb=$imageName;
        }
        
        $questionnaire->username = $request->username;
        
        
        $questionnaire->save();

        return redirect('qlist');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/questionnaire/'. $id . '/delete');

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
     	$questionnaire = Questionnaire::findOrfail($id);
     	$questionnaire->delete();
        return redirect('qlist');
    }
}
