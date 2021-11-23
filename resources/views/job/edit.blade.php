@extends('layouts.app')


@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
    <h1>
       Ажлын байрны зар засах
    </h1>
    <a href="{!!url('applicants')!!}" class = 'btn btn-primary'><i class="fa fa-home"></i> Зарын жагсаалт харах</a>
    <br><br>
    <form method = 'POST' action = '{!! url("job")!!}/{!!$job->id!!}/update'>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Зарын гарчиг</label>
            <input id="title" name = "title" type="text" class="form-control" value="{!!$job->
            title!!}"> 
        </div>
        <div class="form-group">
            <label for="headline">Зарын товч</label>
            <textarea id="headline" name = "headline" type="text" class="form-control"> {!!$job->headline!!} </textarea>
        </div>
        <div class="form-group">
            <label for="thumb">Хаана</label>
            <input id="where" name = "where" type="text" {!!$job->
            where!!} class="form-control">
        </div>
        <div class="form-group">
            <label for="thumb">Цалин</label>
            <input id="salary" name = "salary" {!!$job->
            salary!!} type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="thumb">Зураг</label>
            <input id="thumb" name = "thumb" type="text" class="form-control" value="{!!$job->
            thumb!!}"> 
        </div>
        <div class="form-group">
            <label for="icon">Icon зураг</label>
            <input id="icon" name = "icon" type="text" class="form-control" value="{!!$job->
            icon!!}">
        </div>
        <div class="form-group">
            <label for="body">Дэлгэрэнгүй</label>
            <textarea id="ckbody" name = "body" type="text" class="form-control">{!!$job->body!!}</textarea>
        </div>
        <button class = 'btn btn-success' type ='submit'><i class="fa fa-floppy-o"></i> Засах</button>
    </form>
    </div>
@endsection


@section('script')
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.

        window.addEventListener('load', function () {
            var options = {};
            CKEDITOR.replace('ckbody',  {
                //config.extraPlugins = 'image2';
                removePlugins: 'image',
                //extraPlugins: 'autoembed,embedsemantic,image2,sourcedialog',
                extraPlugins: 'autoembed,autolink,image2,youtube',
                allowedContent : true,
                filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
            });
        });

    </script>
@endsection