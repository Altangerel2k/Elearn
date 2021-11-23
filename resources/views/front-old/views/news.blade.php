@extends('front.layout')

@section('main')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url('img/hr.jpg')}}">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Мэдээ мэдээлэл</h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li><a href="{{url('index')}}">Нүүр</a></li>
                            <li class="active text-theme-colored">Мэдээ мэдээлэл</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row multi-row-clearfix">
                <div class="blog-posts">
                    @foreach($news as $child)
                    <div class="col-md-4">
                        <article class="post clearfix mb-30 bg-lighter">
                            <div class="entry-header">
                                <div class="post-thumb thumb">
                                    <img style="height: 250px;" src={{asset('/upload/'.$child->thumb)}} alt="" class="img-responsive img-fullwidth">
                                </div>
                            </div>
                            <div class="entry-content border-1px p-20 pr-10">
                                <div class="entry-meta media mt-0 no-bg no-border">
                                    <div class="entry-date media-left text-center flip bg-theme-colored pt-5 pr-15 pb-5 pl-15">
                                        <ul>
                                            @php
                                                $date = new Carbon\Carbon($child->created_at);
                                            @endphp
                                            <li class="font-12 text-white ">{{$date->year}}</li>
                                            <li class="font-11 text-white ">{{$date->month}} сар </li>
                                            <li class="font-11 text-white "> {{$date->day}}</li>
                                        </ul>
                                    </div>
                                    <div class="media-body pl-15">
                                        <div class="event-content pull-left flip">
                                            <h4 class="entry-title text-white text-uppercase m-0 mt-5"><a href="/detailc/{{$child->id}}/{{$child->title}}">{{$child->title}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-10">{{$child->headline}}</p>
                                <a href="/detailc/{{$child->id}}/{{$child->title}}" class="btn-read-more">Мэдээ үзэх</a>
                                <div class="clearfix"></div>
                            </div>
                        </article>
                    </div>
                    @endforeach

                    <div class="col-md-12">
                        {{ $news->links() }}

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection