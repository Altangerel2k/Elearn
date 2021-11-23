@extends('front.layout')

@section('main')

        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url('img/hr.jpg')}}">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">Сэтгэлзүйн сорилууд</h2>
                            <ol class="breadcrumb text-center text-black mt-10">
                                <li><a href="{{url('index')}}">Нүүр</a></li>
                                <li class="active text-theme-colored">Сэтгэлзүйн сорилууд</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container pb-0">
                <div class="row text-center">
                    @foreach($questionnaires as $q)
                    <div class="col-sm-4">
                        <div class="icon-box iconbox-border iconbox-theme-colored p-40">
                            {{--<a href="#" class="icon icon-gray icon-bordered icon-border-effect effect-flat">--}}
                                {{--<i class="pe-7s-users"></i>--}}
                            {{--</a>--}}
                            <h5 class="icon-box-title">{{$q->title}}</h5>
                            <p class="text-gray">{{$q->headline}}</p>
                            <a class="btn btn-dark btn-sm mt-15"
                               href="{{url('quizdet/'.$q->id)}}"
                            >Дэлгэрэнгүй үзэх</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>


@endsection

@section('script')

@endsection