<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;
use Amranidev\Ajaxis\Ajaxis;
use URL;

/**
 * Class CommentController.
 *
 * @author  The scaffold-interface created at 2018-03-28 07:48:10pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Index - comment';
        $comments = Comment::where('type','Энгийн')->orderby('created_at','desc')->paginate(20);
        $scomments = Comment::where('type','Онцлох')->orderby('created_at','desc')->get();
        return view('comment.index',compact('comments','title','scomments'));
    }
    public function indexit()
    {
        $title = 'Index - comment';
        $comments = Comment::where('type','IT')->orderby('created_at','desc')->paginate(20);
        return view('comment.indexit',compact('comments','title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create - comment';
        
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->username = $request->username;
        $comment->msg = $request->msg;
        $comment->type = $request->type;
        $comment->status = $request->status;
//        $comment->parent_id = $request->parent_id;
//        $comment->files = $request->files;
//        $comment->url = $request->url;
        $comment->save();

        return redirect('commentlist');
    }
    public function storereply(Request $request)
    {
        $comment = new Comment();
        $comment->username = $request->username;
        $comment->msg = $request->msg;
        $comment->parent_id = $request->parent_id;
        $comment->type = "Reply";

        $comment->save();

        return redirect('commentlist');
    }
    public function storereplyit(Request $request)
    {
        $comment = new Comment();
        $comment->username = $request->username;
        $comment->msg = $request->msg;
        $comment->parent_id = $request->parent_id;
        $comment->type = "Reply";

        $comment->save();

        return redirect('commentlistit');
    }
    public function storeit(Request $request)
    {
        $comment = new Comment();
        $comment->username = $request->username;
        $comment->msg = $request->msg;
        $comment->type = $request->type;
        $comment->status = 'Хүлээгдэж буй';
//        $comment->parent_id = $request->parent_id;
//        $comment->files = $request->files;
//        $comment->url = $request->url;
        $comment->save();

        return redirect('commentlistit');
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
        $title = 'Show - comment';

        if($request->ajax())
        {
            return URL::to('comment/'.$id);
        }

        $comment = Comment::findOrfail($id);
        return view('comment.show',compact('title','comment'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        $title = 'Edit - comment';
        if($request->ajax())
        {
            return URL::to('comment/'. $id . '/edit');
        }

        
        $comment = Comment::findOrfail($id);
        return view('comment.edit',compact('title','comment'  ));
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
        $comment = Comment::findOrfail($id);
    	

        
        $comment->status = $request->status;
        
        $comment->parent_id = $request->parent_id;

        
        
        $comment->save();

        return redirect('commentlistit');
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
        $msg = Ajaxis::BtDeleting('Warning!!','Would you like to remove This?','/comment/'. $id . '/delete');

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
     	$comment = Comment::findOrfail($id);
     	$comment->delete();
        return redirect('commentlist');
    }
    public function destroyit($id)
    {
        $comment = Comment::findOrfail($id);
        $comment->delete();
        return redirect('commentlistit');
    }
}
