<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Feedback;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class FeedbackController.
 *
 * @author  The scaffold-interface created at 2018-03-28 10:56:59am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacklist = \App\Feedback::paginate(50);
        return view('feedback.index',compact('feedbacklist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - feedback';
        
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feedback = new Feedback();

        
        $feedback->name = $request->name;

        
        $feedback->email = $request->email;

        
        $feedback->phone = $request->phone;

        
        $feedback->subject = $request->subject;

        
        $feedback->body = $request->body;

        
        
        $feedback->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new feedback has been created !!']);

        return redirect('feedback');
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
        $title = 'Show - feedback';

        if($request->ajax())
        {
            return URL::to('feedback/'.$id);
        }

        $feedback = Feedback::findOrfail($id);
        return view('feedback.show',compact('title','feedback'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - feedback';
        if($request->ajax())
        {
            return URL::to('feedback/'. $id . '/edit');
        }

        
        $feedback = Feedback::findOrfail($id);
        return view('feedback.edit',compact('title','feedback'  ));
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
        $feedback = Feedback::findOrfail($id);
    	
        $feedback->name = $request->name;
        
        $feedback->email = $request->email;
        
        $feedback->phone = $request->phone;
        
        $feedback->subject = $request->subject;
        
        $feedback->body = $request->body;
        
        
        $feedback->save();

        return redirect('feedback');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/feedback/'. $id . '/delete');

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
     	$feedback = Feedback::findOrfail($id);
     	$feedback->delete();
        return URL::to('feedback');
    }
}
