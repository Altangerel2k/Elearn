@extends('front.layout')

@section('main')
    <!-- Section: inner-header -->
    {{--<section class="inner-header divider  layer-overlay overlay-white-8" data-bg-img="{{url('img/contact-us.jpg')}}">--}}
        {{--<div class="container pt-60 pb-60">--}}
            {{--<!-- Section Content -->--}}
            {{--<div class="section-content">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12 text-center">--}}
                        {{--<h2 class="title">Бидэнтэй холбоо барих</h2>--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}

    <!-- Divider: Google Map -->
    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">

                <!-- Google Map HTML Codes -->
                <div
                        data-address="Улаанбаатар хот, Баянзүрх дүүрэг IX хороо Шархад"
                        data-popupstring-id="#popupstring1"
                        class="map-canvas autoload-map"
                        data-mapstyle="style2"
                        data-height="400"
                        data-latlng="47.933, 107.0109"
                        data-title="sample title"
                        data-zoom="17"
                        data-marker="images/map-marker.png">
                </div>
                <div class="map-popupstring hidden" id="popupstring1">
                    <div class="text-center">
                        <h3>Сэтгэцийн эрүүл мэндийн үндэсний төв</h3>
                        <p>Улаанбаатар хот, Баянзүрх дүүрэг IX хороо Шархад</p>
                    </div>
                </div>
                <!-- Google Map Javascript Codes -->
                <script src="http://maps.google.com/maps/api/js?key=AIzaSyAYWE4mHmR9GyPsHSOVZrSCOOljk8DU9B4"></script>
                <script src="/theme/js/google-map-init.js"></script>

            </div>
        </div>
    </section>

    <!-- Divider: Contact -->
    <section class="divider">
        <div class="container">
            <div class="row pt-30">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Манай байршил</h5>
                                    <p>Улаанбаатар хот, Баянзүрх дүүрэг IX хороо Шархад</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">Холбоо барих утас/факс</h5>
                                    <p>+976-11-458298</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body">
                                    <h5 class="mt-0">И-мэйл хаяг</h5>
                                    <p>mgl_men.health@yahoo.com</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="line-bottom mt-0 mb-30">Санал хүсэлт</h3>
                    <!-- Contact Form -->
                    <form id="contact_form" name="contact_form" class=""  action = '{!!url("feedback")!!}' method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Нэр <small>*</small></label>
                                    <input name="form_name" class="form-control" type="text" placeholder="Нэрээ оруулна уу" required="">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>И-мэйл <small>*</small></label>
                                    <input name="form_email" class="form-control required email" required="" type="email" placeholder="И-мэйл хаягаа оруулна уу">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Товч <small>*</small></label>
                                    <input name="form_subject" class="form-control required" required="" type="text" placeholder="Санал хүсэлтийн тухай товч">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Холбоо барих утас</label>
                                    <input name="form_phone" class="form-control" type="text" placeholder="Холбоо барих утсаа оруулна уу">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Санал хүсэлт</label>
                            <textarea name="form_message" required="" class="form-control required" rows="5" placeholder="Санал хүсэлтээ бичнэ үү"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Санал хүсэлт илгээх</button>

                        </div>
                    </form>

               </div>
            </div>
        </div>
    </section>
    </div>
    <!-- end main-content -->
@endsection