<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class JobController.
 *
 * @author  The scaffold-interface created at 2018-03-26 10:24:27am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - job';
        $jobs = Job::paginate(20);
        return view('job.index',compact('jobs','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - job';
        
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job();

        
        $job->title = $request->title;

        
        $job->headline = $request->headline;

        
        $job->thumb = $request->thumb;

        
        $job->body = $request->body;

        
        $job->icon = $request->icon;

        
        
        $job->save();

        $pusher = App::make('pusher');

        //default pusher notification.
        //by default channel=test-channel,event=test-event
        //Here is a pusher notification example when you create a new resource in storage.
        //you can modify anything you want or use it wherever.
        $pusher->trigger('test-channel',
                         'test-event',
                        ['message' => 'A new job has been created !!']);

        return redirect('applicants');
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
        $title = 'Show - job';

        if($request->ajax())
        {
            return URL::to('job/'.$id);
        }

        $job = Job::findOrfail($id);
        return view('job.show',compact('title','job'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - job';
        if($request->ajax())
        {
            return URL::to('job/'. $id . '/edit');
        }

        
        $job = Job::findOrfail($id);
        return view('job.edit',compact('title','job'  ));
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
        $job = Job::findOrfail($id);
    	
        $job->title = $request->title;
        
        $job->headline = $request->headline;
        
        $job->thumb = $request->thumb;
        
        $job->body = $request->body;
        
        $job->icon = $request->icon;
        
        
        $job->save();

        return redirect('applicants');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/job/'. $id . '/delete');

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
     	$job = Job::findOrfail($id);
     	$job->delete();
        return redirect('applicants');
    }
}
