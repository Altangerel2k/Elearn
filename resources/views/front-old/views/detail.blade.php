@extends('front.layout')

@section('main')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url('img/hr.jpg')}}">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">{{$name}}</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li><a href="{{url('index')}}">Нүүр</a></li>
                            <li class="active text-theme-colored">{{$name}}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container mt-30 mb-30 pt-30 pb-30">
            <div class="row">
                <div class="col-md-9">
                    <div class="blog-posts">
                        @if($pagenews->count()>1)
                        @foreach($pagenews as $news)
                         <div class="col-md-6">
                            <article class="post clearfix mb-30 bg-lighter">
                                <div class="entry-header">
                                    <div class="post-thumb thumb">
                                        <img src="{{asset('upload/'.$news->thumb)}}" alt="" class="img-responsive img-fullwidth">
                                    </div>
                                </div>
                                <div class="entry-content border-1px p-20 pr-10">
                                    <div class="entry-meta media mt-0 no-bg no-border">
                                        <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                            <ul>
                                                @php
                                                    $date = new Carbon\Carbon($news->created_at);
                                                @endphp
                                                <li class="font-12 text-white ">{{$date->year}}</li>
                                                <li class="font-11 text-white ">{{$date->month}} сар </li>
                                                <li class="font-11 text-white "> {{$date->day}}</li>
                                            </ul>
                                        </div>
                                        <div class="media-body pl-15">
                                            <div class="event-content pull-left flip">
                                                <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="{{url('detailc')}}/{{$news->id}}/{{$news->title}}">{{$news->title}}</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mt-10">{{$news->headline}}</p>
                                    <a href="{{url('detailc')}}/{{$news->id}}/{{$news->title}}" class="btn-read-more">Дэлгэрэнгүй</a>
                                    <div class="clearfix"></div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                            <div class="col-md-12">
                                {{ $pagenews->links() }}

                            </div>

                        @else
                            @php
                            $news=$pagenews->first();
                        @endphp
                        @if($news)
                            <div class="blog-posts single-post">
                                <article class="post clearfix mb-0">
                                    @if($news->thumb)
                                        <div class="entry-header">
                                            <div class="post-thumb thumb"> <img src="{{asset('upload/'.$news->thumb)}}" alt="" class="img-responsive img-fullwidth"> </div>
                                        </div>
                                    @endif
                                    <div class="entry-content">
                                        <div class="entry-meta media no-bg no-border">
                                            <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                                <ul>
                                                    @php
                                                        $date = new Carbon\Carbon($news->created_at);
                                                    @endphp
                                                    <li class="font-12 text-white ">{{$date->year}}</li>
                                                    <li class="font-11 text-white ">{{$date->month}} сар </li>
                                                    <li class="font-11 text-white "> {{$date->day}}</li>
                                                </ul>
                                            </div>
                                            <div class="media-body pl-15">
                                                <div class="event-content pull-left flip">
                                                    <h3 class="entry-title text-white text-uppercase pt-0 mt-0"><a href="blog-single-right-sidebar.html">{{$news->title}}</a></h3>
                                                </div>
                                            </div>
                                        </div>
                                        {!! $news->body !!}
                                    </div>
                                        <div class="mt-30 mb-0">
                                            <h5 class="pull-left flip mt-10 mr-20 text-theme-colored">Сошиалд хуваалцах:</h5>
                                            <ul class="styled-icons icon-circled m-0">
                                                <li><a href="{{url('social')}}/{{$news->id}}/{{$news->title}}/{{$news->thumb}}" data-bg-color="#3A5795" style="background: rgb(58, 87, 149) !important;"><i class="fa fa-facebook text-white"></i></a></li>
                                                <li><a href="#" data-bg-color="#55ACEE" style="background: rgb(85, 172, 238) !important;"><i class="fa fa-twitter text-white"></i></a></li>
                                            </ul>
                                        </div>
                                </article>
                            </div>
                        @endif
                        @endif


                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Холбоотой цэсүүд</h5>
                            <ul class="list-divider list-border list check">
                                @foreach($relatedmenu as $child)
                                    <li class="">
                                        <a href="/detail/{{$child->id}}/{{$child->name}}" title="" class="content-justify">
                                            <span>{{$child->name}}</span>
                                        </a>
                                        {{--<span class="fa fa-angle-right pull-right"></span>--}}
                                    </li>
                                @endforeach

                            </ul>
                        </div>

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