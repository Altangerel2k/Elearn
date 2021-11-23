@extends('layouts.app')
@section('content')
	<div class="wrapper wrapper-content animated fadeInRight">
	<div class="box box-primary">
		<div class="box-header">
			<h3>Хичээлийн жагсаалт</h3>
		</div>
		<div class="box-body">
			<a href="{{url('lessons/create')}}" class="btn btn-default"><i class="fa fa-plus fa-md" aria-hidden="true"></i> Шинэ категори нэмэх</a>
			<br/>
			<table class="table table-striped">
				<head>
					<th>Хичээлийн нэр</th>
					<th>Хичээлийн ангилал</th>
					<th>Үйлдэл</th>
				</head>
				<tbody>
					@foreach($lessons as $lesson)
					<tr>
						<td>{{$lesson->name}}</td>
						<td>{{$lesson->category}}</td>
						<td>
							<a href="{{url('/lessons/edit')}}/{{$lesson->id}}" class = "btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a href="{{url('/lessons/delete')}}/{{$lesson->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	</div>
@endsection
