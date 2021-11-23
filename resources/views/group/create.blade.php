@extends('layouts.app')

@section('content')
    <div class="row wrapper white-bg page-heading" style="margin:0px;">
        <div class="col-lg-10">
            <h2>Цэс удирдах хэсэг </h2>
            <ol class="breadcrumb">
                @include('partial.breadcrumb',['group'=>$group])



            </ol>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="row" id="grouplist">



            <div class="col-md-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Цэс үүсгэх талбар</h5>
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
                        <form method="POST" action="/menucreate" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Цэсний нэр</label>

                                <div class="col-sm-10"><input type="text" name="name" required class="form-control"></div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Цэсний төрөл</label>

                                <div class="col-sm-4">

                                    <mbselect :selected='Үндсэн' :options='active_options' name="type" class="form-control m-b"></mbselect>


                                    {{--<select class="form-control m-b" name="type">--}}
                                        {{--<option>Үндсэн</option>--}}
                                        {{--<option>Туслах</option>--}}
                                        {{--<option>Дэд цэс</option>--}}
                                    {{--</select>--}}
                                </div>
                                <label class="col-sm-2 control-label">Хэл</label>
                                <div class="col-sm-4">
                                    <mbselect :selected='монгол' :options='active_options1' name="language" class="form-control m-b"></mbselect>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Холбоос</label>

                                <div class="col-sm-4"><input type="text" name="link" class="form-control"></div>
                                <label class="col-sm-2 control-label">Дэс дараа</label>

                                <div class="col-sm-4">
                                    <input type="text" name="orderby" class="form-control">
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>
                            <input type="hidden" name="group_id"  value="{{$group->id}}" required class="form-control">
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Хадгалах</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Цэсний жагсаалт</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>

                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content" >
                        <v-client-table :data="tableData"  :columns="columns" :options="options">

                        </v-client-table>
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