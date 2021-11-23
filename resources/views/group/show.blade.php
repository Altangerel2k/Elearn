@extends('layouts.app')


@section('content')
      <div class="row wrapper white-bg page-heading" style="margin:0px;">
            <div class="col-lg-10">
                  <h2>{{$group->name}} цэс удирдлага </h2>
                  <ol class="breadcrumb">
                        @include('partial.breadcrumb',['group'=>$group])
                  </ol>
            </div>

      </div>
      <div class="wrapper wrapper-content animated fadeInRight">


            <div class="row" id="contentlist">
                  <div class="col-md-5">
                        <div class="ibox float-e-margins">
                              <div class="ibox-title">
                                    <h5>Дэд цэсний жагсаалт</h5>
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
                                    <ul class="todo-list">
                                          <li>
                                                <a href="/creategroup/{{$group->id}}" ><i class="fa fa-plus"></i>
                                                      <span class="m-l-xs" style="color:red">Цэс нэмэх</span>
                                                </a>
                                          </li>
                                          @foreach($group->childs()->orderBy('orderby', 'ASC')->get() as $child)

                                                <li style="height: 55px">
                                                <a href="/showgroup/{{$child->id}}"><span class="badge-info" style="padding-left: 5px; padding-right: 5px;">{{$child->orderby}}</span>
                                                      <span class="m-l-xs">{{$child->name}}</span>
                                                </a>
                                                      <br/>
                                                      <a href="/deletegroup/{{$child->id}}" class="pull-right"><span class="label label-danger" style="margin-left:3px;">Устгах</span></a>
                                                      <a href="/editgroup/{{$child->id}}" class="pull-right"><span class="label label-warning">Засах</span></a>
                                                      <span class="pull-right" class="label label-warning"> &nbsp;{{$child->language}}</span>
                                                      <span class="pull-right" class="label label-warning">{{$child->type}}&nbsp;|</span>

                                                </li>
                                                @include('partial.grouplist',['group'=>$child])
                                          @endforeach
                                    </ul>
                                    {{--@if($group->childs->count()>0)--}}
                                    {{--<ul class="todo-list m-t small-list">--}}
                                          {{--@foreach($group->childs as $child)--}}

                                          {{--<li>--}}
                                                {{--<a href="#" class="check-link"><i class="fa fa-square-o"></i> </a>--}}
                                                {{--<span class="m-l-xs">{{$child->name}}</span>--}}

                                          {{--</li>--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}
                                    {{--@else--}}
                                          {{--<div class="alert alert-info">Дэд цэс олдсонгүй</div>--}}
                                    {{--@endif--}}
                              </div>
                        </div>
                  </div>
                  <div class="col-md-7">
                        <div class="ibox float-e-margins">
                              <div class="ibox-title">
                                    <h5>Цэсний контент жагсаалт</h5>
                                    <div class="ibox-tools">
                                          <a class="collapse-link">
                                                <i class="fa fa-chevron-up"></i>
                                          </a>
                                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="fa fa-wrench"></i>
                                          </a>
                                          <ul class="dropdown-menu dropdown-user">
                                                <li><a href="#">Config option 1</a>
                                                </li>
                                                <li><a href="#">Config option 2</a>
                                                </li>
                                          </ul>
                                          <a class="close-link">
                                                <i class="fa fa-times"></i>
                                          </a>
                                    </div>
                              </div>
                              <div class="ibox-content">
                              <a class="btn btn-default" href="/create/content/{{$group->id}}">Шинэ контент</a>
                                  <hr/>
                                    <div class="table-responsive">
                                          <table class="table table-striped table-bordered table-hover dataTables-example" >
                                                <thead>
                                                <tr>
                                                      <th>Гарчиг</th>
                                                      <th>Товч мэдээ</th>
                                                      <th>Төрөл</th>
                                                      <th>Хэл</th>
                                                      <th  class="no-sort">Үйлдэл</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($group->contentchilds as $child)
                                                <tr class="gradeX">
                                                      <td>{{$child->title}}</td>
                                                      <td>{{$child->headline}}
                                                      </td>
                                                      <td>{{$child->type}}</td>
                                                      <td class="center">{{$child->language}}</td>
                                                      <td style="text-align: center">
                                                            <a href="/contents/{{$child->id}}/edit"><i class="fa fa-edit"></i> </a>&nbsp;
                                                            <a href="/contents/{{$child->id}}" style="color: red"><i class="fa fa-trash"></i> </a>
                                                      </td>
                                                </tr>
                                               @endforeach
                                                </tbody>

                                          </table>
                                    </div>

                              </div>
                        </div>
                  </div>
                  <div class="col-md-5"></div>
                  <div class="col-md-7" >
                        <div class="ibox float-e-margins">
                              <div class="ibox-title">
                                    <h5>Цэсний медиа жагсаалт</h5>
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
                                    <a class="btn btn-default" href="/create/media/{{$group->id}}">Шинэ медиа</a>
                                    <hr/>
                                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                                          <thead>
                                          <tr>
                                                <th>Гарчиг</th>
                                                <th>Товч мэдээ</th>
                                                <th>Төрөл</th>
                                                <th>Хэл</th>
                                                <th  class="no-sort">Үйлдэл</th>
                                          </tr>
                                          </thead>
                                          <tbody>
                                          @foreach($group->mediachilds as $child)
                                                <tr class="gradeX">
                                                      <td>{{$child->title}}</td>
                                                      <td>{{$child->headline}}
                                                      </td>
                                                      <td>{{$child->type}}</td>
                                                      <td class="center">{{$child->language}}</td>
                                                      <td style="text-align: center">
                                                            <a href="/mediatbs/{{$child->id}}/edit"><i class="fa fa-edit"></i> </a>&nbsp;
                                                            <a href="/mediatbs/{{$child->id}}" style="color: red"><i class="fa fa-trash"></i> </a>
                                                      </td>
                                                </tr>
                                          @endforeach
                                          </tbody>

                                    </table>
                              </div>
                        </div>
                  </div>

            </div>
      </div>

@endsection
@section('script')
      <script>
          $(document).ready(function() {
              $('.dataTables-example').DataTable(
                 {
                      "language": {
                          "url": "https://cdn.datatables.net/plug-ins/1.10.15/i18n/Mongolian.json"},

                  "columnDefs": [ {
                  "targets": 'no-sort',
                  "orderable": false,
              }]

//                  dom: '<"html5buttons"B>lTfgitp',
//                  buttons: [
//                      {extend: 'copy'},
//                      {extend: 'csv'},
//                      {extend: 'excel', title: 'ExampleFile'},
//                      {extend: 'pdf', title: 'ExampleFile'},
//
//                      {
//                          extend: 'print',
//                          customize: function (win) {
//                              $(win.document.body).addClass('white-bg');
//                              $(win.document.body).css('font-size', '10px');
//
//                              $(win.document.body).find('table')
//                                  .addClass('compact')
//                                  .css('font-size', 'inherit');
//                          }
//                      }
//                  ]
//
             }
              )
          });
      </script>
@endsection