@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show feedback
    </h1>
    <br>
    <a href='{!!url("feedback")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Feedback Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>name</b> </td>
                <td>{!!$feedback->name!!}</td>
            </tr>
            <tr>
                <td> <b>email</b> </td>
                <td>{!!$feedback->email!!}</td>
            </tr>
            <tr>
                <td> <b>phone</b> </td>
                <td>{!!$feedback->phone!!}</td>
            </tr>
            <tr>
                <td> <b>subject</b> </td>
                <td>{!!$feedback->subject!!}</td>
            </tr>
            <tr>
                <td> <b>body</b> </td>
                <td>{!!$feedback->body!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection