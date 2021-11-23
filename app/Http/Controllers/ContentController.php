<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Content::where('parent_id',1)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('content.create');//,compact('parentid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $content=new \App\Content;
          $content->title=request('title');
          $content->type=request('type');
          $content->language=request('language');
          $content->hyperlink=request('hyperlink');
          $content->body=request('body');
          $content->headline=request('headline');
          $content->parent_id=request('parent_id');
          $content->posted=request('posted');
          $content->viewed=request('viewed');

        if ($request->hasFile('thumb')) {
            $imageName = time().'.'.$request->thumb->getClientOriginalExtension();
            $request->thumb->move(public_path('upload'), $imageName);
            $content->thumb=$imageName;
        }
        if ($request->hasFile('image')) {
            $imageName1 = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload'), $imageName1);
            $content->image=$imageName1;
        }
         $content->save();

        session()->flash('message','Амжилттай нэмэгдлээ');
       // Content::create(request(['title','headline','language','type','hyperlink','parent_id','body','image','thumb','posted','viewed']));
        return redirect('/showgroup/'.request('parent_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content=\App\Content::find($id);
        return view('content.delete',compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content=\App\Content::find($id);
        return view('content.edit',compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $content=\App\Content::find($id);
        $content->title=request('title');
        $content->type=request('type');
        $content->language=request('language');
        $content->hyperlink=request('hyperlink');
        $content->body=request('body');
        $content->headline=request('headline');
        $content->parent_id=request('parent_id');
        $content->posted=request('posted');
        $content->viewed=request('viewed');

        if ($request->hasFile('thumb')) {
            $imageName = time().'.'.$request->thumb->getClientOriginalExtension();
            $request->thumb->move(public_path('upload'), $imageName);
            $content->thumb=$imageName;
        }
        if ($request->hasFile('image')) {
            $imageName1 = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('upload'), $imageName1);
            $content->image=$imageName1;
        }
        $content->save();

        session()->flash('message','Амжилттай засагдлаа');
        // Content::create(request(['title','headline','language','type','hyperlink','parent_id','body','image','thumb','posted','viewed']));
        return redirect('/showgroup/'.request('parent_id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content=\App\Content::find($id);
        $content->delete();
        session()->flash('message','Амжилттай устгалаа');
        return redirect('/showgroup/'.request('parent_id'));
    }
}
