@extends('layouts.app')

@section('content')
    <div class="row wrapper white-bg page-heading" style="margin:0px;">
        <div class="col-lg-10">
            <h2>Контент нэмэх </h2>
            <ol class="breadcrumb">
                @include('partial.breadcrumb',['group'=>$group])
            </ol>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row" id="grouplist">

            <div class="col-md-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Контентын өгөгдлийг оруулна уу</h5>
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
                        <form method="POST" action="/contents" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Гарчиг</label>

                                <div class="col-sm-10"><input type="text" name="title" required class="form-control">
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Товч мэдээ</label>

                                <div class="col-sm-10">
                                    <textarea type="text" name="headline" required class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Төрөл</label>

                                <div class="col-sm-4">

                                    <mbselect :selected='turul' :options='active_options2' name="type"
                                              class="form-control m-b"></mbselect>


                                    {{--<select class="form-control m-b" name="type">--}}
                                    {{--<option>Үндсэн</option>--}}
                                    {{--<option>Туслах</option>--}}
                                    {{--<option>Дэд цэс</option>--}}
                                    {{--</select>--}}
                                </div>
                                <label class="col-sm-2 control-label">Хэл</label>
                                <div class="col-sm-4">
                                    <mbselect :selected='mgl' :options='active_options1' name="language"
                                              class="form-control m-b"></mbselect>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Холбоос</label>

                                <div class="col-sm-10"><input type="text" name="hyperlink" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Жижиг зураг</label>

                                <div class="col-sm-4"><input type="file" name="thumb" class="form-control"></div>
                                <label class="col-sm-2 control-label">Том зураг</label>
                                <div class="col-sm-4"><input type="file" name="image" class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Мэдээ</label>

                                <div class="col-sm-10">
                                    <textarea id="ckbody" name="body" class="form-control"></textarea>
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>

                            <input type="hidden" name="parent_id" value="{{$group->id}}" required class="form-control">
                            <input type="hidden" name="posted" value="{{ Auth::user()->name }}" required
                                   class="form-control">
                            <input type="hidden" name="viewed" value="0" required class="form-control">
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Хадгалах</button>
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

@endsection