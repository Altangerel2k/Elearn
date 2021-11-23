@extends('front.layout')

@section('main')
    @include('front.partial.slide')

    @php
        $homeintro=\App\Group::find(124)->contentchilds()->where('language',__('front.lang'))->first();
    @endphp
    <!-- Section: about -->
    <section id="about">
        <div class="container">
            <div class="section-content">
               
            </div>
        </div>
    </section>

    <!-- Section: Services -->
    <section class="bg-silver-light">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0 line-height-1">Хичээлүүдийн ангилал</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="images/title-icon.png" alt="">
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="section-content">

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInLeft animation-delay1"
                         style="visibility: visible;">
                        <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                            <div class="p-40 bg-white">
                                <div class="pricing-icon">
                                    <i class="flaticon-medical-drugs4 text-theme-colored"></i>
                                </div>
                                <h5 class="package-type font-24 text-uppercase">Сэтгэц нөлөөт эмийн эмчилгээ</h5>
                                <p>Солиорлын эсрэг эмэн эмчилгээ, Солиорлын эсрэг хэвшинжит бус эмэн эмчилгээ, Сэтгэл
                                    гутралын эсрэг эмэн эмчилгээ</li>
                                    , Сэтгэл засах, тайвшруулах эмэн эмчилгээ
                                    , Сэтгэл тогтворжуулах эмэн эмчилгээ
                                    , Тархины үйл ажиллагаа сайжруулах эмэн эмчилгээ
                                    , Уналт таталтын эсрэг эмэн эмчилгээ</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInUp animation-delay1"
                         style="visibility: visible;">
                        <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                            <div class="p-40 bg-white">
                                <div class="pricing-icon">
                                    <i class="flaticon-medical-brain9 text-theme-colored"></i>
                                </div>
                                <h5 class="package-type font-24 text-uppercase">Сэтгэл засал эмчилгээ</h5>
                                <p>Ганцаарчилсан сэтгэл засал,
                                    Бүлгийн сэтгэл засал,
                                    Танин мэдэхүйн сэтгэл засал,
                                    Өөрийгөө сургах дасгал,
                                    Зан үйлийн сэтгэл засал,
                                    Сэтгэц задлан шинжилгээ,
                                    Иог,
                                    Бясалгал
                                </p></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30 wow fadeInRight animation-delay1"
                         style="visibility: visible;">
                        <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                            <div class="p-40 bg-white">
                                <div class="pricing-icon">
                                    <i class="flaticon-medical-family21 text-theme-colored"></i>
                                </div>
                                <h3 class="package-type font-24 text-uppercase">Сэтгэц нийгмийн сэргээн засах
                                    эмчилгээ</h3>
                                <p>
                                    Үcчин гоо зүй эмчилгээ, Эсгий урлал эмчилгээ, Биеийн тамир эмчилгээ,
                                    Урлан эмчилгээ, Хөдөлмөр эмчилгээ,
                                    Зураг эмчилгээ, Үзвэр эмчилгээ,
                                    Тоглоом эмчилгээ,
                                    Оёдол эмчилгээ,
                                    Ном эмчилгээ,
                                    Хөгжим эмчилгээ, Мужаан эмчилгээ,
                                    Танин мэдэхүйн сургалт,
                                    Хоол эмчилгээ
                                </p></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 hvr-float-shadow mb-sm-30 wow fadeInRight animation-delay1"
                         style="visibility: visible;">
                        <div class="pricing-table border-3px border-theme-colored bg-white text-center">
                            <div class="p-40 bg-white">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <br/>
                                        <br/>
                                        <div class="pricing-icon">
                                            <i class="flaticon-medical-operation4 text-theme-colored"></i>
                                        </div>

                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 ">
                                        <h3 class="package-type font-24 text-uppercase">Сэргээн засах, физик
                                            эмчилгээ</h3>
                                        <p>
                                            Тосон эмчилгээ,
                                            Цахилгаан эмчилгээ,
                                            Электрофорез эмчилгээ,
                                            Гэрэл ба татлага эмчилгээ,
                                            Дасгал, фитнесс эмчилгээ,
                                            Хөдөлгөөн эмчилгээ,
                                            Иллэг, бумба эмчилгээ,
                                            Зүү эмчилгээ,
                                            Лазер эмчилгээ,
                                            Нойрсуулах эмчилгээ,
                                            Усан ба утлага эмчилгээ,
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-theme-colored-8" data-parallax-ratio="0.7">
        <div class="container">
            <div class="row mtli-row-clearfix">
                <div class="col-md-12">
                    <div class="owl-carousel-4col">
                        @foreach(\App\Group::find(128)->mediachilds()->where('language',__('front.lang'))->where('type','Зураг')->get() as $child)
                            <div class="item">
                                <div class="team-members border-bottom-theme-color-2px text-center maxwidth400">
                                    <div class="team-thumb">
                                        <img class="img-fullwidth" alt="" style="height: 300px"
                                             src="{{asset('upload/'.$child->mediasrc)}}">
                                        <div class="team-overlay"></div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="depertment" class="bg-silver-light">
        <div class="container">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="text-uppercase mt-0 line-height-1">Зөвлөмж</h2>
                        <div class="title-icon">
                            <img class="mb-10" src="images/title-icon.png" alt="">
                        </div>
                        <p>Танд зөвлөж байна
                        </p>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    @foreach(\App\Group::find(62)->contentchilds()->where('language',__('front.lang'))->orderby('id','desc')->take(6)->get() as $child)
                        <div class="col-xs-12 col-sm-6 col-md-4 mb-30">
                            <div class="p-20 bg-white">
                                <img style="height: 300px;" src="{{asset('upload/'.$child->thumb)}}" alt="">
                                <h3 class=""><a href="detailc/{{$child->id}}/{{$child->title}}">{{$child->title}}</a></h3>
                                <p class="">{{$child->headline}}</p>
                                <a href="detailc/{{$child->id}}/{{$child->title}}"
                                   class="btn btn-flat btn-theme-colored mt-15 text-theme-color-2">Дэлгэрэнгүй</a>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Section: Blog -->
    <section id="blog">
        <div class="container pb-50">
            <div class="section-title text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="mt-0 line-height-1">Мэдээ <span class="text-theme-colored"> мэдээлэл</span></h2>
                        <p>Шинэ мэдээ мэдээллийг эндээс авна уу
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

                @foreach(\App\Group::find(61)->contentchilds()->where('language',__('front.lang'))->orderby('id','desc')->take(8)->get() as $child)
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="schedule-box maxwidth500  bg-light mb-30">
                            <div class="thumb">
                                <img class="img-fullwidth" style="height: 200px" alt=""
                                     src="{{asset('upload/'.$child->thumb)}}">

                            </div>
                            <div class="schedule-details clearfix p-15 pt-10">
                                <h5 class="font-16 title" style="height: 70px; overflow-y: hidden"><a
                                            href="detailc/{{$child->id}}/{{$child->title}}">{{$child->title}}</a></h5>
                                <ul class="list-inline font-11 mb-20">
                                    <li><i class="fa fa-calendar mr-5"></i> {{$child->created_at}}</li>
                                </ul>
                                <p style="height: 180px; overflow-y: hidden">{{$child->headline}}</p>
                                <div class="mt-10">
                                    {{--<a class="btn btn-dark btn-theme-colored btn-sm mt-10" href="#">Register</a>--}}
                                    <a href="detailc/{{$child->id}}/{{$child->title}}" class="btn btn-dark btn-sm mt-10">Дэлгэрэнгүй үзэх</a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach


            </div>
        </div>
    </section>

    <!-- Divider: Clients -->
    <section class="clients bg-theme-colored">
        <div class="container pt-10 pb-0">
            <div class="row">
                <div class="col-md-12">
                    <!-- Section: Clients -->
                    <div class="owl-carousel-6col text-center owl-nav-top" style="padding-top: 20px; padding-bottom: 20px;">
                        @foreach(\App\Group::find(136)->mediachilds()->where('language',__('front.lang'))->orderby('id','desc')->get() as $child)
                            <div class="item"><a href="{{$child->hyperlink}}" target="_blank"><img src="{{asset('upload/'.$child->mediasrc)}}" alt=""></a></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')

@endsection
