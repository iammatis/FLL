<div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
    <div class="container">
        <nav id="mainMenu" class="main-menu mega-menu">
            <ul class="main-menu nav nav-pills">
                <li><a href="{{ route('home') }}"><i class="fa fa-home"></i></a></li>

                <li class="dropdown"><a href="#">FLL na Slovensku <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu">
                        <li> <a href="{{ route('general/team') }}">Tím</a> </li>
                        <li> <a href="{{ route('general/regions') }}">Regióny</a> </li>
                        <li> <a href="{{ route('general/conditions') }}">Podmienky súťaže</a> </li>
                    </ul>
                </li>

                <li><a href="http://www.fll.sk/sutaz">O súťaži</a></li>

                <li class="dropdown"> <a href="#">Turnaj {{$year = \App\Aditional::all()->first()->year}} <i class="fa fa-angle-down"></i> </a>
                    <ul class="dropdown-menu">
                        {{-- Timy budu generovane z DB maju svoju vlastnu metodu pristupu --}}
                        <li><a href="{{ route('sites/team', $year) }}">Tímy</a></li>
                        @foreach(\App\Sites::where('parent', $year)->cursor() as $site)
                            {{-- <li> <a href="{{ route('sites', [$year, str_slug($site->name)]) }}">{{$site->name}}</a> </li> --}}
                            <li> <a href="{{ route('sites', [$year, $site->id]) }}">{{$site->name}}</a> </li>
                        @endforeach
                    </ul>
                </li>

                <li class="dropdown"> <a href="#">Archív Turnajov <i class="fa fa-angle-down"></i> </a>
                    <ul class="dropdown-menu">

                        @foreach(\App\Sites::select('parent')->where('parent', '!=', $year)->groupBy('parent')->get() as $yr)
                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">{{ $yr->parent }}</span>
                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('sites/team', $yr->parent) }}">Tímy</a></li>
                                    @foreach (\App\Sites::where('parent', $yr->parent)->get() as $site)
                                        <li><a href="{{ route('sites', [$year, $site->id]) }}">{{$site->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li><a href="http://www.fll.sk/galeria">Galéria</a></li>

                <li>
                    @if ($user = Auth::user())
                        <li class="dropdown"> <a href="#">{{$user->full_name}}<i class="fa fa-angle-down"></i> </a>
                            <ul class="dropdown-menu">
                                <li> <a href="{{ route('settings', $user) }}"><i class="fa fa-wrench"></i> Nastavenia</a> </li>
                                <li> <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i> Odhlásiť</a> </li>
                            </ul>
                        </li>
                    @else
                        <a data-target="#modal-2" data-toggle="modal" href="#"><i class="fa fa-user"></i>Prihlásiť sa</a>
                    @endif
                    
                </li>

            </ul>
        </nav>
    </div>
</div>