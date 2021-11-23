@extends('scaffold-interface.layouts.app')
@section('title','Show')
@section('content')

<section class="content">
    <h1>
        Show job
    </h1>
    <br>
    <a href='{!!url("job")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Job Index</a>
    <br>
    <table class = 'table table-bordered'>
        <thead>
            <th>Key</th>
            <th>Value</th>
        </thead>
        <tbody>
            <tr>
                <td> <b>title</b> </td>
                <td>{!!$job->title!!}</td>
            </tr>
            <tr>
                <td> <b>headline</b> </td>
                <td>{!!$job->headline!!}</td>
            </tr>
            <tr>
                <td> <b>thumb</b> </td>
                <td>{!!$job->thumb!!}</td>
            </tr>
            <tr>
                <td> <b>body</b> </td>
                <td>{!!$job->body!!}</td>
            </tr>
            <tr>
                <td> <b>icon</b> </td>
                <td>{!!$job->icon!!}</td>
            </tr>
        </tbody>
    </table>
</section>
@endsection