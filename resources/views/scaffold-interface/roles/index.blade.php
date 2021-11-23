@extends('layouts.app')
@section('content')
	<div class="wrapper wrapper-content animated fadeInRight">
	<div class="box box-primary">
		<div class="box-header">
			<h3>Хичээлийн категори</h3>
		</div>
		<div class="box-body">
			<a href="{{url('roles/create')}}" class="btn btn-default"><i class="fa fa-plus fa-md" aria-hidden="true"></i> Шинэ категори нэмэх</a>
			<br/>
			<table class="table table-striped">
				<head>
					<th>Категори</th>
					<th>Үйлдэл</th>
				</head>
				<tbody>
					@foreach($roles as $role)
					<tr>
						<td>{{$role->name}}</td>
						<td>
							<a href="{{url('/roles/edit')}}/{{$role->id}}" class = "btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
							<a href="{{url('/roles/delete')}}/{{$role->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	</div>
@endsection
