@extends('layouts.app')
@section('content') 
<div class="wrapper wrapper-content animated fadeInRight">
    <h1>
        Show question
    </h1>
    <br>
    <a href='{!!url("question")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Question Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>question</b> </td>
                <td>{!!$question->question!!}</td>
            </tr>
            <tr>
                <td> <b>description</b> </td>
                <td>{!!$question->description!!}</td>
            </tr>
            <tr>
                <td> <b>type</b> </td>
                <td>{!!$question->type!!}</td>
            </tr>
            <tr>
                <td> <b>answers</b> </td>
                <td>{!!$question->answers!!}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection