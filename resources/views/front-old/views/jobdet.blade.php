@extends('front.layout')

@section('main')

        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url('img/hr.jpg')}}">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="title">{{$job->title}}</h2>
                            <ol class="breadcrumb text-center text-black mt-10">
                                <li><a href="{{url('index')}}">Нүүр</a></li>
                                <li class="active text-theme-colored">Ажлын байр</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="job-overview">
                            <dl class="dl-horizontal">
                                <dt><i class="fa fa-calendar text-theme-colored mt-5 font-15"></i></dt>
                                <dd>
                                    <h5 class="mt-0">Зар оруулсан:</h5>
                                    <p>{{$job->created_at}}</p>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt><i class="fa fa-map-marker text-theme-colored mt-5 font-15"></i></dt>
                                <dd>
                                    <h5 class="mt-0">Хаана:</h5>
                                    <p>Anywhere</p>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt><i class="fa fa-user text-theme-colored mt-5 font-15"></i></dt>
                                <dd>
                                    <h5 class="mt-0">Ажлын байрны нэр:</h5>
                                    <p>{{$job->title}}</p>
                                </dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt><i class="fa fa-money text-theme-colored mt-5 font-15"></i></dt>
                                <dd>
                                    <h5 class="mt-0"> Цалин:</h5>
                                    <p>$10000 - 13000</p>
                                </dd>
                            </dl>
                            <div class="text-center">
                            <a class="btn btn-dark mt-20" href="#">Анкет цахимаар бөглөх</a>
                            <a class="btn btn-dark mt-20" href="{{url('upload/tax-anket.docx')}}">Хүний нөөцийн ажил <br/>горилогч анкет татах</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="icon-box mb-0 p-0">
                            <a href="#" class="icon icon-gray pull-left mb-0 mr-10">
                                <i class="pe-7s-users"></i>
                            </a>
                            <h3 class="icon-box-title pt-15 mt-0 mb-40">{{$job->title}}</h3>
                            <hr>
                           {!! $job->body !!}
                        </div>

                    </div>
                </div>
            </div>
        </section>


@endsection

@section('script')

@endsection