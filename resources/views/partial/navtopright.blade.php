<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
        <ul class="nav navbar-top-links navbar-right">

            {{--<li class="dropdown">--}}
                {{--<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">English--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="dropdown">--}}
                {{--<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">--}}
                   {{--Монгол--}}
                {{--</a>--}}
           {{--</li>--}}


            <li>

                <a href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i>  Гарах
                </a>
            </li>

        </ul>

    </nav>
</div>