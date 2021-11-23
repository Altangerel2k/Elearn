@extends('layouts.app')

@section('content')
    <div class="row wrapper white-bg page-heading" style="margin:0px;">
        <div class="col-lg-10">
            <h2>Контент засах </h2>
            <ol class="breadcrumb">
                @include('partial.breadcrumb',['group'=>$content->parent])
            </ol>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row" id="grouplist">

            <div class="col-md-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title panel-warning">
                        <h5>Контентын өгөгдөл засах</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>

                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        @include('partial.successmsg')
                        @include('partial.error')
                        <form method="POST" action="/contents/{{$content->id}}" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Гарчиг</label>

                                <div class="col-sm-10"><input type="text" name="title" required class="form-control" value="{{$content->title}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Товч мэдээ</label>

                                <div class="col-sm-10">
                                    <textarea type="text" name="headline" required class="form-control" >{{$content->headline}}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Төрөл</label>

                                <div class="col-sm-4">

                                    <mbselect :selected='{!! json_encode($content->type) !!}' :options='active_options2' name="type" class="form-control m-b"></mbselect>


                                    {{--<select class="form-control m-b" name="type">--}}
                                    {{--<option>Үндсэн</option>--}}
                                    {{--<option>Туслах</option>--}}
                                    {{--<option>Дэд цэс</option>--}}
                                    {{--</select>--}}
                                </div>
                                <label class="col-sm-2 control-label">Хэл</label>
                                <div class="col-sm-4">
                                    <mbselect :selected='{!! json_encode($content->language) !!}' :options='active_options1' name="language" class="form-control m-b"></mbselect>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Холбоос</label>

                                <div class="col-sm-10"><input type="text" name="hyperlink" class="form-control" value="{{$content->hyperlink}}"></div>

                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Жижиг зураг</label>

                                <div class="col-sm-4">
                                    @if($content->thumb!=null)

                                    <img src="/upload/{{$content->thumb}}" width="100%">

                                    @endif
                                    <input type="file" name="thumb" class="form-control"></div>
                                <label class="col-sm-2 control-label">Том зураг</label>
                                <div class="col-sm-4">
                                    @if($content->image!=null)

                                        <img src="/upload/{{$content->image}}" width="100%">

                                    @endif
                                    <input type="file" name="image" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Мэдээ</label>

                                <div class="col-sm-10"><textarea id="ckbody"  name="body" class="form-control">{{$content->body}}</textarea></div>

                            </div>
                            <div class="hr-line-dashed"></div>

                            <input type="hidden" name="parent_id"  value="{{$content->parent_id}}" required class="form-control">
                            <input type="hidden" name="posted"  value="{{ Auth::user()->name }}" required class="form-control">
                            <input type="hidden" name="viewed"  value="{{$content->viewed}}" required class="form-control">
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-warning" type="submit">Засах</button>
                                    <a class="btn btn-warning" href="/showgroup/{{$content->parent_id}}">Цуцлах</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
@section('script')
    <script>
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

    </script>

    {{--<script>--}}
        {{--// Replace the <textarea id="editor1"> with a CKEditor--}}
        {{--// instance, using default configuration.--}}

        {{--window.addEventListener('load', function () {--}}
            {{--CKEDITOR.replace( 'ckbody', {--}}
                {{--allowedContent : true,--}}
                {{--removeFormatAttributes : '',--}}
                {{--// Define the toolbar: http://docs.ckeditor.com/#!/guide/dev_toolbar--}}
                {{--// The standard preset from CDN which we used as a base provides more features than we need.--}}
                {{--// Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.--}}
                {{--toolbar: [--}}
                    {{--{ name: 'clipboard', items: [ 'Undo', 'Redo' ] },--}}
                    {{--{ name: 'styles', items: [ 'Styles', 'Format' ] },--}}
                    {{--{ name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },--}}
                    {{--{ name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },--}}
                    {{--{ name: 'links', items: [ 'Link', 'Unlink' ] },--}}
                    {{--{ name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },--}}
                    {{--{ name: 'tools', items: [ 'Maximize' ] },--}}
                    {{--{ name: 'editing', items: [ 'Source' ] }--}}
                {{--],--}}
                {{--// Since we define all configuration options here, let's instruct CKEditor to not load config.js which it does by default.--}}
                {{--// One HTTP request less will result in a faster startup time.--}}
                {{--// For more information check http://docs.ckeditor.com/#!/api/CKEDITOR.config-cfg-customConfig--}}
                {{--customConfig: '',--}}
                {{--// Enabling extra plugins, available in the standard-all preset: http://ckeditor.com/presets-all--}}
                {{--extraPlugins: 'autoembed,embedsemantic,image2',--}}
                {{--/*********************** File management support ***********************/--}}
                {{--// In order to turn on support for file uploads, CKEditor has to be configured to use some server side--}}
                {{--// solution with file upload/management capabilities, like for example CKFinder.--}}
                {{--// For more information see http://docs.ckeditor.com/#!/guide/dev_ckfinder_integration--}}
                {{--// Uncomment and correct these lines after you setup your local CKFinder instance.--}}
                {{--// filebrowserBrowseUrl: 'http://example.com/ckfinder/ckfinder.html',--}}
                {{--// filebrowserUploadUrl: 'http://example.com/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',--}}
                {{--/*********************** File management support ***********************/--}}
                {{--// Remove the default image plugin because image2, which offers captions for images, was enabled above.--}}
                {{--removePlugins: 'image',--}}
                {{--filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',--}}
                {{--filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',--}}
                {{--filebrowserBrowseUrl: '/laravel-filemanager?type=Files',--}}
                {{--filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',--}}
                {{--// Make the editing area bigger than default.--}}
                {{--height: 461,--}}
                {{--// An array of stylesheets to style the WYSIWYG area.--}}
                {{--// Note: it is recommended to keep your own styles in a separate file in order to make future updates painless.--}}
                {{--contentsCss: [ 'http://cdn.ckeditor.com/4.7.2/standard-all/contents.css', 'mystyles.css' ],--}}
                {{--// This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.--}}
                {{--bodyClass: 'article-editor',--}}
                {{--// Reduce the list of block elements listed in the Format dropdown to the most commonly used.--}}
                {{--format_tags: 'p;h1;h2;h3;pre',--}}
                {{--// Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.--}}
                {{--removeDialogTabs: 'image:advanced;link:advanced',--}}
                {{--// Define the list of styles which should be available in the Styles dropdown list.--}}
                {{--// If the "class" attribute is used to style an element, make sure to define the style for the class in "mystyles.css"--}}
                {{--// (and on your website so that it rendered in the same way).--}}
                {{--// Note: by default CKEditor looks for styles.js file. Defining stylesSet inline (as below) stops CKEditor from loading--}}
                {{--// that file, which means one HTTP request less (and a faster startup).--}}
                {{--// For more information see http://docs.ckeditor.com/#!/guide/dev_styles--}}
                {{--stylesSet: [--}}
                    {{--/* Inline Styles */--}}
                    {{--{ name: 'Marker',			element: 'span', attributes: { 'class': 'marker' } },--}}
                    {{--{ name: 'Cited Work',		element: 'cite' },--}}
                    {{--{ name: 'Inline Quotation',	element: 'q' },--}}
                    {{--/* Object Styles */--}}
                    {{--{--}}
                        {{--name: 'Special Container',--}}
                        {{--element: 'div',--}}
                        {{--styles: {--}}
                            {{--padding: '5px 10px',--}}
                            {{--background: '#eee',--}}
                            {{--border: '1px solid #ccc'--}}
                        {{--}--}}
                    {{--},--}}
                    {{--{--}}
                        {{--name: 'Compact table',--}}
                        {{--element: 'table',--}}
                        {{--attributes: {--}}
                            {{--cellpadding: '5',--}}
                            {{--cellspacing: '0',--}}
                            {{--border: '1',--}}
                            {{--bordercolor: '#ccc'--}}
                        {{--},--}}
                        {{--styles: {--}}
                            {{--'border-collapse': 'collapse'--}}
                        {{--}--}}
                    {{--},--}}
                    {{--{ name: 'Borderless Table',		element: 'table',	styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },--}}
                    {{--{ name: 'Square Bulleted List',	element: 'ul',		styles: { 'list-style-type': 'square' } },--}}
                    {{--/* Widget Styles */--}}
                    {{--// We use this one to style the brownie picture.--}}
                    {{--{ name: 'Illustration', type: 'widget', widget: 'image', attributes: { 'class': 'image-illustration' } },--}}
                    {{--// Media embed--}}
                    {{--{ name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' } },--}}
                    {{--{ name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' } },--}}
                    {{--{ name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' } },--}}
                    {{--{ name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' } },--}}
                    {{--{ name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' } }--}}
                {{--]--}}
            {{--} );--}}
           {{--// CKEDITOR.config.extraAllowedContent = '*(*);*{*}';--}}
        {{--});--}}

    {{--</script>--}}
@endsection