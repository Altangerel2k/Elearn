@extends('layouts.app')

@section('content')
    <div class="row wrapper white-bg page-heading" style="margin:0px;">
        <div class="col-lg-10">
            <h2>Медиа нэмэх </h2>
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
                        <h5>Медиа оруулна уу</h5>
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
                        <form method="POST" action="/mediatbs" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Гарчиг</label>

                                <div class="col-sm-10"><input type="text" name="title" required class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Товч мэдээ</label>

                                <div class="col-sm-10">
                                    <textarea type="text" name="headline" required class="form-control"></textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Төрөл</label>

                                <div class="col-sm-4">

                                    <mbselect :selected='mediaturul' :options='active_options3' name="type" class="form-control m-b"></mbselect>


                                </div>
                                <label class="col-sm-2 control-label">Хэл 1</label>
                                <div class="col-sm-4">
                                    <mbselect :selected='mgl' :options='active_options1' name="language" class="form-control m-b"></mbselect>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Холбоос</label>

                                <div class="col-sm-4"><input type="text" name="hyperlink" class="form-control"></div>
                                <label class="col-sm-2 control-label">Медиа</label>

                                <div class="col-sm-4"><input type="file" name="mediasrc" class="form-control"></div>
                            </div>



                            <div class="hr-line-dashed"></div>

                            <input type="hidden" name="parent_id"  value="{{$group->id}}" required class="form-control">

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
        window.addEventListener('load', function () {

            console.log("CREATE PAGE");


        });

    </script>
@endsection