@extends('layouts.app')
@section('content')
	<div class="wrapper wrapper-content animated fadeInRight">
	<div class="box box-primary">
		<div class="box-header">
			<h3>Шинэ хэрэглэгч нэмэх</h3>
		</div>
		<div class="box-body">
			<form action="{{url('users/store')}}" method = "post">
				{!! csrf_field() !!}
				<input type="hidden" name = "user_id">
				<div class="form-group">
					<label for="">И-мэйл</label>
					<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
				</div>
				<div class="form-group">
					<label for="">Нэр</label>
					<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

				</div>
				<div class="form-group">
					<label for="">Нууц үг</label>
					<input id="password" type="password" class="form-control" name="password" required>

				</div>
				<button class = "btn btn-primary" type="submit">Хадгалах</button>
			</form>
		</div>
	</div>
	</div>
@endsection
