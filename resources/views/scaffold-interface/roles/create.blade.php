@extends('layouts.app')
@section('content')
	<div class="wrapper wrapper-content animated fadeInRight">
	<div class="box box-primary">
		<div class="box-header">
			<h3>Шинээр категори нэмэх</h3>
		</div>
		<div class="box-body">
			<form action="{{url('roles/store')}}" method = "post">
				{!! csrf_field() !!}
				<div class="form-group">
				<label for="">Категори</label>
					<input type="text" name = "name" class = "form-control" placeholder = "Категорийн нэр оруулах">
				</div>
				<div class="box-footer">
					<button class = 'btn btn-primary' type = "submit">Хадгалах</button>
				</div>
			</form>
		</div>
	</div>
	</div>
@endsection
