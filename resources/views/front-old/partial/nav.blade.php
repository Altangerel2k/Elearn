<!-- Header -->
<header id="header" class="header">
    <div class="header-top sm-text-center" style="background-color: #F1F1F1!important; ">
        <div class="container">
            
        </div>
    </div>
    <div class="header-middle p-0 bg-lighter xs-text-center">
        <div class="container pt-20 pb-20">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-5 mt-0 mb-0 m-0">
                    <a class="menuzord-brand pull-left flip sm-pull-center" href="/"><img
                                src="{{asset('theme/images/header-logo2.png')}}" alt=""></a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-7">
                    <div class="col-sm-4 widget no-border sm-text-center mt-0 mb-0 m-0">
                        <a href="#" class="font-12 text-gray text-uppercase">НҮҮР</a>
                     
                    </div>
                    <div class="col-sm-4 widget no-border sm-text-center mt-0 mb-0 m-0">
                        <a href="#" class="font-12 text-gray text-uppercase">Хичээлүүд</a>
                  
                    </div>
                    <div class="col-sm-4 widget no-border sm-text-center mt-0 mb-0 m-0">
                        <a href="#" class="font-12 text-gray text-uppercase">Холбоо барих</a>

                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed" style="background-color: #009E93!important;">
            <div class="container">
                <nav id="menuzord" class="menuzord blue no-bg">
                    <ul class="list-inline nav-side-icon-list pull-right">
                        <li>
                            <a href="#" id="inline-fullwidth-search-btn" ><i style="color:white!important;" class="search-icon fa fa-search"></i></a>
                            <div id="inline-fullwidth-search-form" class="clearfix">
                                <form action="/search" method="get" class="form-search" accept-charset="utf-8">
                                    <input type="text" name="s" value="" placeholder="Хайх утгаа оруулна уу..." autocomplete="off">

                                    <a href="#" id="close-search-btn" ><i class="icon_close"></i> Хаах</a>|
                                    <a href="#" id="close-search-btn" ><i class="icon_search"></i> Хайх</a>
                                </form>
                            </div>
                        </li>
                   </ul>
                    <ul class="menuzord-menu">
                        @foreach(\App\Group::where('group_id',1)->where('type','Үндсэн')->where('language',__('front.lang'))->Orderby('orderby')->get() as $child)
                            <li class="">
                                @if($child->childs()->whereIn('type', ['Дэд цэс', 'Цэсний нэр'])->count()>0)
                                    <a href="javascript:void(0)" class="text-white">{{$child->name }}</a>

                                <ul class="dropdown">
                                    @foreach($child->childs()->where('type','Дэд цэс')->Orderby('orderby')->get() as $dedtses)
                                    <li>
                                    <a  href="{{$dedtses->link?$dedtses->link:'/detail/'.$dedtses->id.'/'.$dedtses->name}}">{{$dedtses->name }}</a>
                                        @if($dedtses->childs()->whereIn('type', ['Дэд цэс', 'Цэсний нэр'])->count()>0)
                                            <ul class="dropdown">
                                                @foreach($dedtses->childs()->where('type','Дэд цэс')->Orderby('orderby')->get() as $dedtses1)
                                                    <li>
                                                        <a  href="{{$dedtses1->link?$dedtses1->link:'/detail/'.$dedtses1->id.'/'.$dedtses1->name}}">{{$dedtses1->name }}</a>
                                                    </li>
                                                    @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                    @endforeach

                                </ul>
                                    @else

                                    <a class="text-white" href="{{$child->link?$child->link:'/detail/'.$child->id.'/'.$child->name}}">{{$child->name }}</a>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <!--     <div class="pull-right sm-pull-none mb-sm-15">
                          <a class="btn btn-colored btn-flat btn-theme-colored mt-15 mt-sm-10 pt-10 pb-10 ajaxload-popup" href="ajax-load/form-appointment.html">Register Now</a>
                        </div> -->
                </nav>
            </div>
        </div>
    </div>
</header>




