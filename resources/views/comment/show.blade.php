@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show comment
    </h1>
    <br>
    <a href='{!!url("comment")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Comment Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>username</b> </td>
                <td>{!!$comment->username!!}</td>
            </tr>
            <tr>
                <td> <b>msg</b> </td>
                <td>{!!$comment->msg!!}</td>
            </tr>
            <tr>
                <td> <b>status</b> </td>
                <td>{!!$comment->status!!}</td>
            </tr>
            <tr>
                <td> <b>parent_id</b> </td>
                <td>{!!$comment->parent_id!!}</td>
            </tr>
            <tr>
                <td> <b>files</b> </td>
                <td>{!!$comment->files!!}</td>
            </tr>
            <tr>
                <td> <b>url</b> </td>
                <td>{!!$comment->url!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection