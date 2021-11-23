@extends('layouts.app')

@section('content')
    <div class="row wrapper white-bg page-heading" style="margin:0px;">
        <div class="col-lg-10">
            <h2>Медиа засах </h2>
            <ol class="breadcrumb">
                @include('partial.breadcrumb',['group'=>$mediatb->parent])
            </ol>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row" id="grouplist">

            <div class="col-md-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title panel-warning">
                        <h5>Медиа засах</h5>
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
                        <form method="POST" action="/mediatbs/{{$mediatb->id}}" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Гарчиг</label>

                                <div class="col-sm-10"><input type="text" name="title" required class="form-control" value="{{$mediatb->title}}"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Товч мэдээ</label>

                                <div class="col-sm-10">
                                    <textarea type="text" name="headline" required class="form-control" >{{$mediatb->headline}}</textarea></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Төрөл</label>

                                <div class="col-sm-4">

                                    <mbselect :selected='{!! json_encode($mediatb->type) !!}' :options='active_options3' name="type" class="form-control m-b"></mbselect>


                                    {{--<select class="form-control m-b" name="type">--}}
                                    {{--<option>Үндсэн</option>--}}
                                    {{--<option>Туслах</option>--}}
                                    {{--<option>Дэд цэс</option>--}}
                                    {{--</select>--}}
                                </div>
                                <label class="col-sm-2 control-label">Хэл</label>
                                <div class="col-sm-4">
                                    <mbselect :selected='{!! json_encode($mediatb->language) !!}' :options='active_options1' name="language" class="form-control m-b"></mbselect>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Холбоос</label>

                                <div class="col-sm-4"><input type="text" name="hyperlink" class="form-control" value="{{$mediatb->hyperlink}}"></div>
                                <label class="col-sm-2 control-label">Медиа</label>
                                <div class="col-sm-4">
                                    @if($mediatb->mediasrc!=null)

                                        <img src="/upload/{{$mediatb->mediasrc}}" width="100%">

                                    @endif
                                    <input type="file" name="mediasrc" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>



                            <input type="hidden" name="parent_id"  value="{{$mediatb->parent_id}}" required class="form-control">

                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-warning" type="submit">Засах</button>
                                    <a class="btn btn-warning" href="/showgroup/{{$mediatb->parent_id}}">Цуцлах</a>
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