@extends('front.layout')

@section('main')
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="{{url('img/hr.jpg')}}">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">Хайлтын үр дүн </h2>
                        <ol class="breadcrumb text-center text-black mt-10">
                            <li><a href="{{url('index')}}">Нүүр</a></li>
                            <li class="active text-theme-colored">Хайлтын үр дүн</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="shop">
        <div class="container">
            <div class="col-lg-12">
                <br/>
                <br/>
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <h4>
                            Таны <span class="text-navy">"{{Request::get('s')}}"</span> хайлтанд
                            нийт {{$search->total()}} үр дүн олдлоо
                        </h4>


                        <div class="search-form">
                            <form action="/search" method="get" class="form-search" accept-charset="utf-8">
                                <div class="input-group">
                                    <input type="text" placeholder="Хайх утгаа оруулна уу" name="s"
                                           class="form-control input-lg">
                                    <div class="input-group-btn">
                                        <button class="btn btn-lg btn-theme-colored" type="submit">
                                            Хайлт хийх
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>
                        @foreach($search as $s)
                            <div style="border-top: 1px dashed #e7eaec; color: #ffffff; background-color: #ffffff; height: 1px; margin: 20px 0;"></div>
                            <div class="search-result">
                                <h4 ><a href="detailc/{{$s->id}}/{{$s->title}}" class="active text-theme-colored">{{$s->title}}</a></h4>

                                <p>
                                  {{$s->headline}}
                                </p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-12">
                {{ $search->links() }}

            </div>
        </div><!-- /.container -->
    </main><!-- /#shop -->




@endsection

@section('script')

@endsection