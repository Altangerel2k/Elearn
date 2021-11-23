@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit comment
    </h1>
    <a href="{!!url('comment')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Comment Index</a>
    <br>
    <form method = 'POST' action = '{!! url("comment")!!}/{!!$comment->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="username">username</label>
            <input id="username" name = "username" type="text" class="form-control" value="{!!$comment->
            username!!}"> 
        </div>
        <div class="form-group">
            <label for="msg">msg</label>
            <input id="msg" name = "msg" type="text" class="form-control" value="{!!$comment->
            msg!!}"> 
        </div>
        <div class="form-group">
            <label for="status">status</label>
            <input id="status" name = "status" type="text" class="form-control" value="{!!$comment->
            status!!}"> 
        </div>
        <div class="form-group">
            <label for="parent_id">parent_id</label>
            <input id="parent_id" name = "parent_id" type="text" class="form-control" value="{!!$comment->
            parent_id!!}"> 
        </div>
        <div class="form-group">
            <label for="files">files</label>
            <input id="files" name = "files" type="text" class="form-control" value="{!!$comment->
            files!!}"> 
        </div>
        <div class="form-group">
            <label for="url">url</label>
            <input id="url" name = "url" type="text" class="form-control" value="{!!$comment->
            url!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection