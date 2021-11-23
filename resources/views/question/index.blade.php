@extends('layouts.app')
@section('content') 
<div class="wrapper wrapper-content animated fadeInRight">
    <h1>
        Question Index
    </h1>
    <a href='{!!url("question")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> New</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>question</th>
            <th>description</th>
            <th>type</th>
            <th>answers</th>
            <th>actions</th>
        </thead>
        <tbody>
            @foreach($questions as $question) 
            <tr>
                <td>{!!$question->question!!}</td>
                <td>{!!$question->description!!}</td>
                <td>{!!$question->type!!}</td>
                <td>{!!$question->answers!!}</td>
                <td>
                    <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/question/{!!$question->id!!}/deleteMsg" ><i class = 'fa fa-trash'> delete</i></a>
                    <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/question/{!!$question->id!!}/edit'><i class = 'fa fa-edit'> edit</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/question/{!!$question->id!!}'><i class = 'fa fa-eye'> info</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $questions->render() !!}

</div>
@endsection