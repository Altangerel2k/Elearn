<nav class="navbar-default navbar-static-side" role="navigation" id="navapp">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    {{--    <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>--}}
                @else
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-rounded" height="38" style="background-color: #ffffff"
                                 src="{{asset('theme/images/logo-wide.png')}}"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold"> {{ Auth::user()->name }}</strong>
                             </span> <span class="text-muted text-xs block">Админ <b class="caret"></b></span> </span>
                        </a>

                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            {{--<li><a href="profile.html">ПроФайл</a></li>--}}
                            <li><a href="{{url('/changepass')}}">Нууц үг</a></li>
                            <li class="divider"></li>
                            <li><a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Гарах
                                </a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                    <div class="logo-element">
                        B1T+
                    </div>
                @endif


            </li>

            @if(Auth::user()->hasRole('admin'))
                <li>
                    <a href="/home"><i class="fa fa-list-alt"></i> <span class="nav-label">Аналитик</span>

                    </a>
                </li>

                <li>
                    <a href="{{url('users')}}"><i class="fa fa-list-alt"></i> <span class="nav-label">Хэрэглэгчид</span>

                    </a>
                </li>
                <li>
                    <a href="{{url('roles')}}"><i class="fa fa-list-alt"></i> <span
                                class="nav-label">Хэрэглэгчдийн эрх</span>

                    </a>
                </li>
            @endif
        
            <li>
                <a href="{{url('commentlist')}}"><i class="fa fa-comments"></i> <span class="nav-label">Хичээл</span>
                </a>
            </li>
            <li>
                <a href="{{url('commentlistit')}}"><i class="fa fa-laptop"></i> <span class="nav-label">Хичээлийн сэдвүүд</span>
                </a>
            </li>
            <li>
                <a href="{{url('commentlistit')}}"><i class="fa fa-laptop"></i> <span class="nav-label">Хичээлийн категори</span>
                </a>
            </li>

        </ul>

    </div>
</nav>