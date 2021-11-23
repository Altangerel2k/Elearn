@extends('layouts.app')


@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">


        <div class="col-lg-6">
            <div class="ibox">
                <div class="ibox-content text-center">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="m-b-xxs">Дотоод мэдээ</h3>
                            {{--<small>Байгууллагын дотоод сошиал хэсэг</small>--}}
                        </div>
                        <div class="col-lg-4">
                            <a href="/commentlist" type="button" id="loading-example-btn"
                               class="btn btn-white btn-sm"><i class="fa fa-refresh"></i> Жагсаалт шинэчлэх</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="social-feed-box">
                <div class="social-body">
                    <form method="post" action="/comment/save">
                        {{ csrf_field() }}
                        <input type="hidden" name="username" value="{{Auth::user()->name}}"/>
                        <div class="media-body">
                            <textarea class="form-control" name="msg"
                                      placeholder="Шинээр пост бичих талбар..."></textarea>
                        </div>
                        <br/>
                        @if(Auth::user()->hasRole('admin'))
                        <div class="col-lg-12">
                            <select class="form-control" name="type">
                                <option>Энгийн</option>
                                <option>Онцлох</option>
                            </select>
                        </div>
                        {{--<div class="col-lg-6">--}}
                            {{--<select class="form-control" name="status">--}}
                                {{--<option>Хүлээгдэж байгаа</option>--}}
                                {{--<option>Хүлээн авсан</option>--}}
                                {{--<option>Шийдэгдсэн</option>--}}
                            {{--</select>--}}
                        {{--</div>--}}

                        <br/>
                        <br/>
                        <br/>
                            @else
                            <div class="col-lg-12">
                             <input value="Энгийн" name="type" type="hidden"/>
                            </div>
                        @endif
                        <button class="btn btn-white btn-xs pull-right"><i class="fa fa-thumbs-up"></i> Пост оруулах
                        </button>
                        <br/>
                        <br/>
                    </form>
                </div>

            </div>
            @foreach($comments as $comment)

                <div class="social-feed-box">

                    <div class="social-avatar">

                        <div class="media-body">
                            <a href="#">
                                {{$comment->username}}
                            </a>
                            <small class="text-muted">{{$comment->created_at}}</small>
                            @if(Auth::user()->hasRole('admin') || Auth::user()->name==$comment->username)
                                <a class="pull-right" href="/comment/{{$comment->id}}/delete"><i class="fa fa-trash-o"></i></a>
                            @endif
                        </div>

                    </div>
                    <div class="social-body">
                        <p>
                            {{$comment->msg}}
                        </p>

                        {{--<div class="btn-group">--}}
                            {{--<button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>--}}
                            {{--<button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>--}}
                            {{--<button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>--}}
                        {{--</div>--}}
                    </div>
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
                        <form method="post" action="/comment/savereply">
                            {{ csrf_field() }}
                            <input type="hidden" name="username" value="{{Auth::user()->name}}"/>
                            <input type="hidden" name="parent_id" value="{{$comment->id}}"/>

                            <div class="social-comment">

                                <div class="media-body">
                                    <textarea name="msg" class="form-control" placeholder="Хариулт бичих..."></textarea>
                                </div>
                                <br>
                                <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Хариу бичих
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            @endforeach

            {!! $comments->render() !!}

        </div>

        <div class="col-lg-6">

            <ul class="notes">
                @foreach($scomments as $scomment)
                    <li>
                        <div>
                            <small>{{$scomment->created_at}}</small>
                            <h4>{{$scomment->username}}</h4>
                            <p>{{$scomment->msg}}</p>
                            @if(Auth::user()->hasRole('admin'))
                            <a href="/comment/{{$scomment->id}}/delete"><i class="fa fa-trash-o "></i></a>
                                @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>


    </div>
@endsection