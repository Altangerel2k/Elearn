@extends('layouts.app')
@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <h1>
            Хичээлүүдийн категори
        </h1>

    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Нэр</th>
            <th>Хичээлийн тоо</th>
            
        </thead>
        <tbody>
            @foreach($feedbacklist as $feedback)
            <tr>
                <td>{!!$feedback->name!!}</td>
                <td>{!!$feedback->email!!}</td>
                <td>{!!$feedback->phone!!}</td>
                <td>{!!$feedback->subject!!}</td>
                <td>{!!$feedback->body!!}</td>
                <td>
                    <a href="/feedback/{!!$feedback->id!!}/delete" class = 'delete btn btn-danger btn-xs' data-link = "/feedback/{!!$feedback->id!!}/deleteMsg" ><i class = 'fa fa-trash'> Устгах</i></a>
                    {{--<a href = '/feedback/{!!$feedback->id!!}' class = 'viewShow btn btn-warning btn-xs' data-link = '/feedback/{!!$feedback->id!!}'><i class = 'fa fa-eye'> Үзэх</i></a>--}}
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
        {!! $feedbacklist->render() !!}

</div>
@endsection