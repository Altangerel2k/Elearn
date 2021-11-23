@extends('layouts.app')
@section('content') 
<div class="wrapper wrapper-content animated fadeInRight">
    <h1>
        Шинээр сорил нэмэх
    </h1>
    <a href="{!!url('qlist')!!}" class = 'btn btn-danger'><i class="fa fa-home"></i> Сорилын жагсаалт руу буцах</a>
    <br/>
    <br/>
    <form method = 'POST' action = '{!!url("qlist/store")!!}' enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="username" value="{{Auth::user()->name}}"/>
        <div class="form-group">
            <label for="title">Нэр</label>
            <input id="title" name = "title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="headline">Товч тайлбар</label>
            <input id="headline" name = "headline" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="thumb">Зураг</label>
            <input id="thumb" name = "thumb" type="file"  class="form-control">
        </div>

        <div class="form-group">
            <label for="about">Дэлгэрэнгүй</label>
            <textarea id="ckbody" name = "about" type="text" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="result_text">Үр дүнгийн талаар</label>
            <textarea id="ckbody2" name = "result_text" type="text" class="form-control"></textarea>
        </div>


        <button class = 'btn btn-success' type ='submit'> <i class="fa fa-floppy-o"></i> Хадгалах</button>
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
            var options = {};
            CKEDITOR.replace('ckbody2',  {
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