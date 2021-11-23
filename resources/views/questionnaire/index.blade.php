@extends('layouts.app')
@section('content') 
<div class="wrapper wrapper-content animated fadeInRight">
    <h1>
        Сорилын жагсаалт
    </h1>
    <a href='{!!url("qlist")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> Шинээр сорил оруулах</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Нэр</th>
            <th>Тайлбар</th>
            <th>Оруулсан</th>
            <th>Үйлдэл</th>
        </thead>
        <tbody>
            @foreach($questionnaires as $questionnaire) 
            <tr>
                <td>{!!$questionnaire->title!!}</td>
                <td>{!!$questionnaire->headline!!}</td>
                <td>{!!$questionnaire->username!!}</td>
                <td>
                    <a href="/qlist/{!!$questionnaire->id!!}/delete" class = 'delete btn btn-danger btn-xs' ><i class = 'fa fa-trash'> Устгах</i></a>
                    <a href = '{{url('qlist/edit/').'/'.$questionnaire->id}}' class = 'viewEdit btn btn-primary btn-xs' ><i class = 'fa fa-edit'> Засах</i></a>
                    <a href = 'qlist/{{$questionnaire->id}}' class = 'viewShow btn btn-warning btn-xs'><i class = 'fa fa-eye'> Харах</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $questionnaires->render() !!}

</div>
@endsection