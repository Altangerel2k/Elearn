@extends('front.layout')

@section('main')

    {{--<section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url('img/hr.jpg')}}">--}}
        {{--<div class="container pt-60 pb-60">--}}
            {{--<!-- Section Content -->--}}
            {{--<div class="section-content">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12 text-center">--}}
                        {{--<h2 class="title">{{$name}}</h2>--}}
                        {{--<ol class="breadcrumb text-center text-black mt-10">--}}
                            {{--<li><a href="{{url('index')}}">Нүүр</a></li>--}}
                            {{--<li class="active text-theme-colored">{{$name}}</li>--}}
                        {{--</ol>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-posts">

                            @if($pagenews)
                                <div class="blog-posts single-post">
                                    <article class="post clearfix mb-0">
                                        @if($pagenews->thumb)
                                            <div class="entry-header">
                                                <div class="post-thumb thumb"> <img src="{{asset('upload/'.$pagenews->thumb)}}" alt="" class="img-responsive img-fullwidth"> </div>
                                            </div>
                                        @endif
                                        <div class="entry-content">
                                            <div class="entry-meta media no-bg no-border mt-15 pb-20">
                                                <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                    <ul>
                                                        @php
                                                            $date = new Carbon\Carbon($pagenews->created_at);
                                                        @endphp
                                                        <li class="font-12 text-white ">{{$date->year}}</li>
                                                        <li class="font-11 text-white ">{{$date->month}} сар </li>
                                                        <li class="font-11 text-white "> {{$date->day}}</li>
                                                    </ul>
                                                </div>
                                                <div class="media-body pl-15">
                                                    <div class="event-content pull-left flip">
                                                        <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="#">{{$pagenews->title}}</a></h3>
                                                    </div>
                                                </div>
                                            </div>
                                            {!! $pagenews->body !!}
                                        </div>
                                            <div class="mt-30 mb-0">
                                                <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Сошиалд хуваалцах:</h5>
                                                <ul class="styled-icons icon-circled m-0">
                                                    <li>{!! Share::currentPage()->facebook() !!}</li>
                                                    <li>{!! Share::currentPage()->twitter() !!}</li>
                                                    <li>{!! Share::currentPage()->googlePlus() !!}</li>
                                                    <li>{!! Share::currentPage()->linkedin() !!}</li>
                                                </ul>
                                            </div>
                                    </article>
                                </div>
                            @endif
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        {{--<div class="widget">--}}
                            {{--<h5 class="widget-title line-bottom">Холбоотой мэдээлэл</h5>--}}
                       {{--<div class="latest-posts">--}}
                           {{--@foreach($relatedmenu as $child)--}}
                               {{--<article class="post media-post clearfix pb-0 mb-10">--}}
                                   {{--<a href="{{url('detailc')}}/{{$child->id}}/{{$child->title}}" class="post-thumb"><img alt="" style="width: 80px; height: 55px" src="{{asset('upload/'.$child->thumb)}}"></a>--}}
                                   {{--<div class="post-right">--}}
                                       {{--<h5 class="post-title mt-0 mb-5"><a href="{{url('detailc')}}/{{$child->id}}/{{$child->title}}">{{$child->title}}</a></h5>--}}
                                       {{--<p class="post-date mb-0 font-12">{{$child->created_at}}</p>--}}
                                   {{--</div>--}}
                               {{--</article>--}}
                               {{--@endforeach--}}
                       {{--</div>--}}
                        {{--</div>--}}

                        <div class="widget">
                            <h5 class="widget-title line-bottom">Шинэ мэдээ мэдээлэл</h5>
                            <div class="latest-posts">
                                @foreach(\App\Group::find(61)->contentchilds()->where('language',__('front.lang'))->orderby('id','desc')->take(8)->get() as $child)
                                <article class="post media-post clearfix pb-0 mb-10">
                                    <a href="/detailc/{{$child->id}}/{{$child->title}}" class="post-thumb"><img alt="" style="width: 100px; height: 70px;" src="{{asset('upload/'.$child->thumb)}}"></a>
                                    <div class="post-right">
                                        <h5 class="post-title mt-0 mb-5"><a href="/detailc/{{$child->id}}/{{$child->title}}">{{$child->title}}</a></h5>
                                        <p class="post-date mb-0 font-12">{{$child->created_at}}</p>
                                    </div>
                                </article>
                         @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')

@endsection