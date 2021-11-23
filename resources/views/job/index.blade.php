@extends('layouts.app')


@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
    <h1>
        Ажлын байр, зарын жагсаалт
    </h1>
    <a href='{!!url("job")!!}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> Шинээр ажлын байрны зар нэмэх</a>
    <br>
    <br>
    <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
        <thead>
            <th>Нэр</th>
            <th>Товч зар</th>

            <th>Үйлдэл</th>
        </thead>
        <tbody>
            @foreach($jobs as $job) 
            <tr>
                <td>{!!$job->title!!}</td>
                <td>{!!$job->headline!!}</td>

                <td>
                    <a href='/job/{!!$job->id!!}/delete' class = 'delete btn btn-danger btn-xs'  ><i class = 'fa fa-trash'> Устгах</i></a>
                    <a href = '/job/{!!$job->id!!}/edit' class = 'viewEdit btn btn-primary btn-xs'><i class = 'fa fa-edit'> Засах</i></a>
                    <a href = '#' class = 'viewShow btn btn-warning btn-xs'><i class = 'fa fa-eye'> Ирсэн анкетууд</i></a>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {!! $jobs->render() !!}

    </div>
@endsection