<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Group;

class GroupController extends Controller
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
    public function create($parentid)
    {
        return view('group.create');//,compact('parentid'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
//        $group=new \App\group;
//        $group->name=request('name');
//        $group->type=request('type');
//        $group->language=request('language');
//        $group->link=request('link');
//        $group->orderby=request('orderby');
//        $group->group_id=request('group_id');
//
//        $group->save();
        Group::create(request(['name','type','language','link','orderby','group_id']));
        return redirect('/showgroup/'.request('group_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $group=Group::find($id)->update([
            'name'=>request('name'),
            'type'=>request('type'),
            'language'=>request('language'),
            'link'=>request('link'),
            'orderby'=>request('orderby'),
            'group_id'=>request('group_id'),
        ]);
        session()->flash('message','Амжилттай засагдлаа');
        return redirect('/showgroup/'.request('group_id'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $group=Group::find($id);

        $group->delete();
        session()->flash('message','Амжилттай устгалаа');
        return redirect('/showgroup/1');
    }
}
