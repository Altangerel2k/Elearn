@extends('layouts.app')
@section('content')
	<div class="wrapper wrapper-content animated fadeInRight">
	<div class="box box-primary">
		<div class="box-header">
			<h3>  {{$user->name}}-н мэдээлэл засах</h3>
		</div>
		<div class="box-body">
			<form action="{{url('users/update')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "user_id" value = "{{$user->id}}">
				<div class="form-group">
					<label for="">И-мэйл</label>
					<input type="email" name = "email" value = "{{$user->email}}" class = "form-control" required>
				</div>
				<div class="form-group">
					<label for="">Нэр</label>
					<input type="text" name = "name" value = "{{$user->name}}" class = "form-control" required>
				</div>
				<div class="form-group">
					<label for="">Нууц үг</label>
					<input type="password" name = "password" class = "form-control" placeholder = "password" required>
				</div>
				<button class = "btn btn-primary" type="submit">Засах</button>
			</form>
		</div>
	</div>
		<hr/>
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header">
					<h3>{{$user->name}} хэрэглэгчийн эрх</h3>
				</div>
				<div class="box-body">
					<form action="{{url('users/addRole')}}" method = "post">
						{!! csrf_field() !!}
						<input type="hidden" name = "user_id" value = "{{$user->id}}">
						<div class="form-group">
							<select name="role_name" id="" class = "form-control">
								@foreach($roles as $role)
								<option value="{{$role}}">{{$role}}</option>
								@endforeach
							</select>
						</div>
						<div class="form-group">
							<button class = 'btn btn-primary'>Эрх нэмэх</button>
						</div>
					</form>
					<table class = 'table'>
						<thead>
							<th>Role</th>
							<th>Action</th>
						</thead>
						<tbody>
							@foreach($userRoles as $role)
							<tr>
								<td>{{$role->name}}</td>
								<td><a href="{{url('users/removeRole')}}/{{str_slug($role->name,'-')}}/{{$user->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		{{--<div class="col-md-6">--}}
			{{--<div class="box box-primary">--}}
				{{--<div class="box-header">--}}
					{{--<h3>{{$user->name}} Permissions</h3>--}}
				{{--</div>--}}
				{{--<div class="box-body">--}}
					{{--<form action="{{url('users/addPermission')}}" method = "post">--}}
						{{--{!! csrf_field() !!}--}}
						{{--<input type="hidden" name = "user_id" value = "{{$user->id}}">--}}
						{{--<div class="form-group">--}}
							{{--<select name="permission_name" id="" class = "form-control">--}}
								{{--@foreach($permissions as $permission)--}}
								{{--<option value="{{$permission}}">{{$permission}}</option>--}}
								{{--@endforeach--}}
							{{--</select>--}}
						{{--</div>--}}
						{{--<div class="form-group">--}}
							{{--<button class = 'btn btn-primary'>Add permission</button>--}}
						{{--</div>--}}
					{{--</form>--}}
					{{--<table class = 'table'>--}}
						{{--<thead>--}}
							{{--<th>Permission</th>--}}
							{{--<th>Action</th>--}}
						{{--</thead>--}}
						{{--<tbody>--}}
							{{--@foreach($userPermissions as $permission)--}}
							{{--<tr>--}}
								{{--<td>{{$permission->name}}</td>--}}
								{{--<td><a href="{{url('users/removePermission')}}/{{str_slug($permission->name,'-')}}/{{$user->id}}" class = "btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>--}}
							{{--</tr>--}}
							{{--@endforeach--}}
						{{--</tbody>--}}
					{{--</table>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	</div>
	</div>
@endsection
