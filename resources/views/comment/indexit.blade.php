@extends('layouts.app')


@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInUp">

                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Мэдээлэл технологийн албанд хүсэлт гаргах</h5>

                    </div>
                      @if(Auth::user()->hasRole('admin'))
                       <br/>
                                            <br/>
                                            <a href='{!!url("commentitexcel")!!}' class = 'btn btn-warning'><i class="fa fa-download"></i> &nbsp;Excel-р татаж авах</a>
                                            <br/>
                                            <br/>
                                            @endif
                    <div class="ibox-content">
                        <div class="row m-b-sm m-t-sm">
                            <div class="col-md-2">
                                <a href="/commentlistit" type="button" id="loading-example-btn"
                                   class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> Жагсаалт шинэчлэх</a>
                            </div>
                            <div class="col-md-10">
                                <form method="post" action="/comment/saveit">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="username" value="{{Auth::user()->name}}"/>
                                    <input type="hidden" name="type" value="IT"/>

                                    <div class="input-group"><input type="text" required name="msg"
                                                                    placeholder="Хүсэлтээ бичнэ үү"
                                                                    class="input-sm form-control"> <span
                                                class="input-group-btn">
                                        <button class="btn btn-sm btn-primary"> Хүсэлт илгээх</button> </span></div>
                                </form>
                            </div>

                        </div>
                        <hr/>

                        <div class="project-list">

                            <table class="table table-hover">
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                        <td class="project-status text-center">
                                            @if(Auth::user()->hasRole('admin'))
                                                <a class="" href="/commentit/{{$comment->id}}/delete"><i class="fa fa-trash-o"></i></a>
                                           <hr/>
                                            @endif

                                            <span class="label label-primary"
                                                  @if($comment->status=='Хүлээгдэж буй') style=" background-color: wheat; color:red"
                                            @endif
                                            >{{$comment->status}}</span>
                                        </td>
                                        <td class="project-title">
                                            <a href="#">{{$comment->msg}}</a>


                                        </td>
                                        <td class="project-completion">
                                            Нэр:<br/> <small>{{$comment->username}}</small>
                                        </td>
                                        <td class="project-completion">
                                            Огноо:<br/> <small>{{$comment->created_at}}</small>
                                        </td>

                                        @if(Auth::user()->name==$comment->username || Auth::user()->hasRole('IT') || Auth::user()->hasRole('admin'))
                                            <td class="project-actions">
                                                <form method="post" action="/comment/{{$comment->id}}/savestatus">
                                                    {{ csrf_field() }}

                                                <select class="form-control" name="status">
                                                    <option>Хүлээгдэж буй</option>
                                                    <option>Хүлээн авсан</option>
                                                    <option>Шийдсэн</option>
                                                    <option>Цуцлагдсан</option>
                                                    <option>Шийдэгдэж буй</option>
                                                </select>
                                                <button class="btn btn-white btn-xs"><i
                                                            class="fa fa-check"></i> Төлөв өөрчлөх
                                                </button>
                                                </form>

                                            </td>
                                        @endif
                                    </tr>
                                    <tr>
                                        <td style="background-color: white" @if(Auth::user()->hasRole('IT') || Auth::user()->hasRole('admin') || Auth::user()->username==$comment->username)
                                            colspan="5" @else colspan="4"
                                                @endif>
                                            <div class="social-footer">
                                                @foreach($comment->childs()->get() as $child)
                                                    <div class="social-comment">
                                                        {{--<a href="" class="pull-left">--}}
                                                        {{--<img alt="image" src="img/a1.jpg">--}}
                                                        {{--</a>--}}
                                                        <div class="media-body">
                                                            <a href="#">
                                                                {{$child->username}}
                                                            </a>
                                                            {{$child->msg}}
                                                            <br>

                                                            <small class="text-muted">{{$child->created_at}}</small>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                <form method="post" action="/comment/savereplyit">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="username"
                                                           value="{{Auth::user()->name}}"/>
                                                    <input type="hidden" name="parent_id" value="{{$comment->id}}"/>

                                                    <div class="social-comment">

                                                        <div class="media-body">
                                                            <textarea name="msg" class="form-control"
                                                                      placeholder="Хариулт бичих..."></textarea>
                                                        </div>
                                                        <br>
                                                        <button class="btn btn-white btn-xs"><i
                                                                    class="fa fa-thumbs-up"></i> Хариу бичих
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </td>


                                    </tr>

                                @endforeach
                                </tbody>
                            </table>

                            {!!$comments->render()!!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection