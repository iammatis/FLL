<div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
    <div class="container">
        <nav id="mainMenu" class="main-menu mega-menu">
            <ul class="main-menu nav nav-pills">
                <li><a href="/"><i class="fa fa-home"></i></a></li>

                <li><a href="http://www.fll.sk/home/tim">FLL na Slovensku</a></li>

                <li><a href="http://www.fll.sk/sutaz">O súťaži</a></li>

                <li class="dropdown"> <a href="#">Turnaj 2017 <i class="fa fa-angle-down"></i> </a>
                    <ul class="dropdown-menu">
                        <li> <a href="#">Kalendár</a> </li>
                        <li> <a href="#">Registrácia</a> </li>
                        <li> <a href="#">Zadanie úlohy</a> </li>
                        <li> <a href="#">Robotická liga</a> </li>
                    </ul>
                </li>

                <li class="dropdown"> <a href="#">Archív Turnajov <i class="fa fa-angle-down"></i> </a>
                    <ul class="dropdown-menu">
                        @foreach(\App\TournamentTexts::all() as $tour)
                            <li class="dropdown-submenu"><span class="dropdown-menu-title-only">{{ $tour->year }}</span>
                                <ul class="dropdown-menu">
                                    <li><a href="#">O turnaji</a> </li>
                                    <li><a href="#">Zadanie úlohy</a> </li>
                                    @foreach(\App\RegionTexts::where('year', $tour->year)->cursor() as $region)
                                        <li><a href="{{ route('archive', [$tour->id, $region->id]) }}">{{$region->region->name}}</a> </li>
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