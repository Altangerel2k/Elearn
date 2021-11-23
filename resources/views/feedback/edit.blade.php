@extends('scaffold-interface.layouts.app')
@section('title','Edit')
@section('content')

<section class="content">
    <h1>
        Edit feedback
    </h1>
    <a href="{!!url('feedback')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Feedback Index</a>
    <br>
    <form method = 'POST' action = '{!! url("feedback")!!}/{!!$feedback->
        id!!}/update'> 
        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <div class="form-group">
            <label for="name">name</label>
            <input id="name" name = "name" type="text" class="form-control" value="{!!$feedback->
            name!!}"> 
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" name = "email" type="text" class="form-control" value="{!!$feedback->
            email!!}"> 
        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input id="phone" name = "phone" type="text" class="form-control" value="{!!$feedback->
            phone!!}"> 
        </div>
        <div class="form-group">
            <label for="subject">subject</label>
            <input id="subject" name = "subject" type="text" class="form-control" value="{!!$feedback->
            subject!!}"> 
        </div>
        <div class="form-group">
            <label for="body">body</label>
            <input id="body" name = "body" type="text" class="form-control" value="{!!$feedback->
            body!!}"> 
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Update</button>
    </form>
</section>
@endsection