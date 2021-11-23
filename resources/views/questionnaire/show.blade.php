@extends('layouts.app')
@section('content') 
<div class="wrapper wrapper-content animated fadeInRight">



    <div class="col-lg-12">
        <br>
        <a href='{!!url("qlist")!!}' class = 'btn btn-primary'><i class="fa fa-home"></i>Жагсаалтруу буцах</a>
        <br>
        <br/>
        <div class="tabs-container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"> Сорилын тухай мэдээлэл</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">Нэгж сорилууд</a></li>
                <li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false">Хариултууд</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="panel-body">
                        <strong>{{$questionnaire->title}}</strong>

                        <p>{{$questionnaire->headline}}</p>
                        <img src="{{asset('upload/'.$questionnaire->thumb)}}"/>
                        <hr>

                        {!! $questionnaire->about !!}
                        <hr>
                        <span>Хариултын текстүүд</span>
                        {!! $questionnaire->result_text !!}
                    </div>
                </div>
                <div id="tab-2" class="tab-pane">

                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Сорил харагдах байдал</h5>

                        </div>
                        <div class="ibox-content ibox-heading">
                            <small> <a href='{!!url("questionlist")!!}/{{$questionnaire->id}}/create' class = 'btn btn-success'><i class="fa fa-plus"></i> Шинэ асуулт нэмэх</a></small>
                        </div>
                        <div class="ibox-content">
                            <div class="feed-activity-list">
                                @foreach($questionnaire->childs()->get() as $question)
                                    <div class="feed-element">
                                        <div>


                                            <a href="/questionlist/{!!$question->id!!}/edit" class="btn btn-warning pull-right"><i class="fa fa-edit"></i> &nbsp; Засах</a>
                                            <a href="/questionlist/{!!$question->id!!}/delete" class="btn btn-danger pull-right"><i class="fa fa-edit"></i> &nbsp; Устгах</a>

                                            <h3>{{$question->questionname}}</h3>
                                            @if($question->desc)
                                            <div>{{$question->desc}}</div>
                                            @endif
                                            <ul class="todo-list m-t">
                                                @php
                                                $ans=json_decode(unserialize($question->answers),true);

                                                @endphp
                                                @foreach($ans as $an)
                                                <li>
                                                    <input
                                                            @if($question->type==0)
                                                            type="radio"
                                                            @else
                                                            type="checkbox"
                                                            @endif
                                                           value="" name="q_{{$question->id}}" class="i-checks"/>
                                                    <span class="m-l-xs">{{$an['name']}} </span><span class="pull-right">/Оноо:{{$an['score']}}/</span>

                                                </li>
                                                @endforeach
                                            </ul>

                                        </div>
                                    </div>

                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane">
                    <div class="panel-body">
                        <strong>Энэ сорилд ирсэн үр дүнгийн жагсаалт</strong>
                        <br/>
                        <br/>
                        <a href='{!!url("qlistexcel")!!}/{{$questionnaire->id}}' class = 'btn btn-warning'><i class="fa fa-download"></i> &nbsp;Excel-р татаж авах</a>
                        <br/>
                        <br/>
                        <table class = "table table-striped table-bordered table-hover" style = 'background:#fff'>
                            <thead>
                            <th>И-мэйл хаяг</th>
                            <th>Нас</th>
                            <th>Хүйс</th>
                            <th>Оноо</th>
                            {{--<th></th>--}}

                            </thead>
                            <tbody>
                       @foreach($questionnaire->resultchilds()->get() as $res)
                          <tr>
                              <td>{{$res->email}}</td>
                              <td>{{$res->age}}</td>
                              <td>{{$res->gender}}</td>
                              <td>{{$res->point}}</td>
                              {{--<td>{{$res->result}}</td>--}}
                          </tr>
                        @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection