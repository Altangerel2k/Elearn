<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediatbController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $media=new \App\Mediatb();
        $media->title=request('title');
        $media->type=request('type');
        $media->language=request('language');
        $media->hyperlink=request('hyperlink');
        $media->headline=request('headline');
        $media->parent_id=request('parent_id');


        if ($request->hasFile('mediasrc')) {
            $imageName = time().'.'.$request->mediasrc->getClientOriginalExtension();
            $request->mediasrc->move(public_path('upload'), $imageName);
            $media->mediasrc=$imageName;
        }

        $media->save();

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
        $mediatb=\App\Mediatb::find($id);
        return view('mediatb.delete',compact('mediatb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mediatb=\App\Mediatb::find($id);
        return view('mediatb.edit',compact('mediatb'));
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
        $media=\App\Mediatb::find($id);
        $media->title=request('title');
        $media->type=request('type');
        $media->language=request('language');
        $media->hyperlink=request('hyperlink');
        $media->headline=request('headline');
        $media->parent_id=request('parent_id');


        if ($request->hasFile('mediasrc')) {
            $imageName = time().'.'.$request->mediasrc->getClientOriginalExtension();
            $request->mediasrc->move(public_path('upload'), $imageName);
            $media->mediasrc=$imageName;
        }

        $media->save();

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
        $mediatb=\App\Mediatb::find($id);
        $mediatb->delete();
        session()->flash('message','Амжилттай устгалаа');
        return redirect('/showgroup/'.request('parent_id'));
    }
}
