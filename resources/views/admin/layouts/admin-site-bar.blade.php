    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{asset('administrator/img/admin_default.jpg')}}" width="50px" height="50px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">@if(Auth::check()){{Auth::user()->name}}@endif</strong>
                             </span> <span class="text-muted text-xs block">Developer <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="#">Профиль</a></li>
                            <li><a href="#">Контакты</a></li>
                            <li><a href="#">Почта</a></li>
                            <li class="divider"></li>
                            <li> <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Вихід
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        MT
                    </div>
                </li>
                <li>
                    <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Почта </span><span class="label label-warning pull-right">16/24</span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Email view</a></li>
                        <li><a href="#">Compose email</a></li>
                        <li><a href="#">Email templates</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Пользователи </span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="#">Список</a></li>
                    </ul>
                </li>
                <li class="landing_link">
                    <a target="_blank" href="#"><i class="fa fa-star"></i> <span class="nav-label">Landing Page</span> <span class="label label-warning pull-right">NEW</span></a>
                </li>
            </ul>
        </div>
    </nav>