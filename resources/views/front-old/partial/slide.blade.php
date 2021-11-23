<section id="home" class="divider">
    <div class="container-fluid p-0">

        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper fullwidthbanner-container"
             data-alias="news-gallery34"
             style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
            <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
            <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
                <ul>
                    @php
                    $index=0;
                    @endphp
                    @foreach(\App\Group::find(getslider(Session::get('apptype')))->mediachilds()->where('language',__('front.lang'))->where('type','Зураг')->get() as $child)
                        <li data-index="rs-{{$index++}}" data-transition="slidingoverlayhorizontal" data-slotamount="default"
                            data-easein="default" data-easeout="default" data-masterspeed="default"
                            data-thumb="{{asset('upload/'.$child->mediasrc)}}" data-rotate="0" data-fstransition="fade"
                            data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"
                            data-title="Make an Impact">
                            <!-- MAIN IMAGE -->
                            <img src="{{asset('upload/'.$child->mediasrc)}}" alt="" data-bgposition="center center"
                                 data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg"
                                 data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0"
                                 id="slide-3-layer-1"
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                 data-width="full"
                                 data-height="full"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"
                                 data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                                 data-start="1000"
                                 data-basealign="slide"
                                 data-responsive_offset="on"
                                 style="z-index: 5;background-color:rgba(0, 0, 0, 0.25);border-color:rgba(0, 0, 0, 1.00);">
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-{{$index++}}"
                                 id="slide-3-layer-3"
                                 data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']"
                                 data-y="['top','top','top','top']" data-voffset="['280','220','180','180']"
                                 data-fontsize="['18','18','16','13']"
                                 data-lineheight="['30','30','28','25']"
                                 data-fontweight="['600','600','600','600']"
                                 data-width="['500','450','400','320']"
                                 data-height="90"
                                 data-whitespace="normal"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap;">@if($child->headline!='.') {!! $child->headline !!} @endif
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-{{$index++}}"
                                 id="slide-3-layer-4"
                                 data-x="['center','center','center','center']" data-hoffset="['310','200','100','0']"
                                 data-y="['top','top','top','top']" data-voffset="['390','310','280','280']"
                                 data-fontsize="['18','18','16','16']"
                                 data-lineheight="['30','30','30','30']"
                                 data-fontweight="['600','600','600','600']"
                                 data-width="['700','650','500','420']"
                                 data-height="none"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                                 data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                                 data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                                 data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                                 data-start="1000"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-responsive_offset="on"
                                 style="z-index: 7; white-space: nowrap;">
                                @if($child->hyperlink)

                                <div class="intro-layer" data-animation="fadeInUp" style="margin-right: 100px">
                                <a href="{{$child->hyperlink}}" class="btn btn-dark btn-theme-colored btn-xl pull-right">
                                Дэлгэрэнгүй
                                </a>
                                </div>
                                @endif

                            </div>

                        </li>
                    @endforeach
                </ul>

            </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
            var tpj = jQuery;
            var revapi34;
            tpj(document).ready(function () {
                if (tpj("#rev_slider_home").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_home");
                } else {
                    revapi34 = tpj("#rev_slider_home").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "js/revolution-slider/js/",
                        sliderLayout: "fullwidth",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            onHoverStop: "on",
                            touch: {
                                touchenabled: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            }
                            ,
                            arrows: {
                                style: "zeus",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 600,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: '<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 30,
                                    v_offset: 0
                                }
                            }
                        },
                        viewPort: {
                            enable: true,
                            outof: "pause",
                            visible_area: "80%"
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [600, 550, 500, 450],
                        lazyType: "none",
                        // parallax: {
                        //     type: "scroll",
                        //     origo: "enterpoint",
                        //     speed: 400,
                        //     levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50],
                        // },
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }
            });
            /*ready*/
        </script>
        <!-- END REVOLUTION SLIDER -->
    </div>
</section>

<!-- Section: home-boxes -->
<section>
    <div class="container pt-0 pb-0">
        <div class="section-content">
            <div class="row equal-height-inner mt-sm-0" data-margin-top="-110px">
                <div class="col-sm-12 col-md-3 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
                    <div class="sm-height-auto bg-theme-colored">
                        <div class="p-30">
                            <h3 class="text-uppercase text-white mt-0">Цагийн хуваарь</h3>
                            <div class="opening-hours">
                                <ul class="list-unstyled text-white">
                                    <li class="clearfix"><span>Даваа-Баасан</span>
                                        <div class="value"> 09:00 - 15:00</div>
                                    </li>
                                    <li class="clearfix"><span>Бямба, Ням</span>
                                        <div class="value">Амарна</div>
                                    </li>
                                    <li class="clearfix"><span>Яаралтай тусламж</span>
                                        <div class="value">24 цагаар</div>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn btn-border  btn-transparent btn-sm mt-20"
                               href="#">Цаг захиалах: 98963630</a>
                        </div>


                    </div>
                </div>
                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
                    <div class="sm-height-auto bg-theme-colored2">
                        <div class="p-30">
                            <h3 class="text-uppercase text-white mt-0">Зөвлөмж <br>
                                {{--<small class="text-gray-lighter">Defined By You</small>--}}
                            </h3>
                            <p class="text-white">Танд хэрэг болох зөвлөмж, зөвлөгөөнүүдийг эндээс авна уу</p>
                            <a href="{{url('suggest')}}" class="btn btn-border  btn-transparent btn-sm">Дэлгэрэнгүй</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 pl-0 pr-0 pl-sm-15 0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
                    <div class="sm-height-auto bg-theme-colored">

                        <div class="p-30">
                            <h3 class="text-uppercase text-white mt-0">Хүлээгдэл <br>
                                {{--<small class="text-gray-lighter">Care Solutions</small>--}}
                            </h3>
                            <br/>
                            {{--<p class="text-white">Quality Affordable In-Home Care In Your Community Is Just A Phone Call--}}
                            {{--Away.&nbsp; Learn More About Us Below.</p>--}}
                            <a href="#about" class="btn btn-border  btn-transparent btn-sm" style="white-space: normal!important;">СТРЕССИЙН ШАЛТГААНТ СЭТГЭЦИЙН ЭМГЭГ СУДЛАЛЫН КАБИНЕТ</a>
                            <br/>
                            <br/>
                            <a href="#about" class="btn btn-border btn-transparent btn-sm" style="white-space: normal!important;">СЭТГЭЛ ЗҮЙН ОНОШЛОГООНЫ КАБИНЕТ</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
                    <div class="sm-height-auto bg-theme-colored2">
                        <div class="p-30">
                            <h3 class="text-uppercase text-white mt-0">Сэтгэлзүйн сорил <br>
                                {{--<small class="text-gray-lighter">Close To Home</small>--}}
                            </h3>

                            <p class="text-white">Та өөрийнхаа сэтгэлзүйн байдлыг үнэлж үзнэ үү</p>
                            <a href={{url('quiz')}}" class="btn btn-border  btn-transparent btn-sm">Дэлгэрэнгүй</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
