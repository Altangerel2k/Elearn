@extends('layouts.app')
@section('content')
	<div class="wrapper wrapper-content animated fadeInRight">
<div class="box box-primary">
<div class="box-header">
	<h3>Системийн хэрэглэгчид</h3>
</div>
	<div class="box-body">
		<a class="btn btn-default" href="{{url('/users/create')}}" ><i class="fa fa-plus fa-md" aria-hidden="true"></i> Шинэ хэрэглэгч нэмэх</a>
		<table class = "table table-hover">
		<thead>
			<th>Нэр</th>
			<th>И-мэйл</th>
			<th>Үүрэг</th>
			<th>Үйлдэл</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>
				@if(!empty($user->roles))
					@foreach($user->roles as $role)
					<small class = 'label bg-blue'>{{$role->name}}</small>
					@endforeach
				@else
					<small class = 'label bg-red'>No Roles</small>
				@endif
				</td>
				<td>
					<a href="{{url('/users/edit')}}/{{$user->id}}" class = 'btn btn-primary btn-sm'><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
					<a href="{{url('/users/delete')}}/{{$user->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
</div>
	</div>
@endsection
