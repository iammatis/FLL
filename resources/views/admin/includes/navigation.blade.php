<!-- Navigation-->
<aside class="navigation">
    <nav>
        <ul class="nav luna-nav">
            <li class="nav-category">Dashboard</li>
            <li class="{{ active('dashboard') }}"><a href="{{route('dashboard')}}">Index</a></li>

            <li class="nav-category">Administrácia turnajov</li>

            @if (Entrust::hasRole('admin'))
            <li class="{{ active('tournaments/settings') }}"><a href="{{route('tournaments/settings')}}">Správa turnaja</a></li>
            <li class="{{ active('tournaments/index') }}"><a href="{{route('tournaments/index')}}">Turnaj {{\App\Aditional::all()->first()->year}}</a></li>
            <li class="{{ active('tournaments/archive') }}"><a href="{{route('tournaments/archive')}}">Archívne turnaje</a></li>
            <li class="{{ active('teams/*') }}">
                <a href="#teams" data-toggle="collapse" aria-expanded="false">
                    Tímy<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="teams" class="nav nav-second collapse {{ active('teams/*', 'in') }}">
                    <li class="{{ active('teams/index') }}"><a href="{{route('teams/index')}}"> Prehľad tímov</a></li>
                    <li class="{{ active('teams/all') }}"><a href="{{route('teams/all')}}"> Administrácia tímov</a></li>
                </ul>
            </li>
            @endif

            <li class="{{ active('kits/index') }}"> <a href="{{route('kits/index')}}">Stavebnice</a> </li>
            <li class="{{ active('invoices/index') }}"> <a href="{{route('invoices/index')}}">Faktúry</a> </li>

            <li class="nav-category">Web</li>
            <li class="{{ active('news/*') }}">
                <a href="#news" data-toggle="collapse" aria-expanded="false">
                    Novinky<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="news" class="nav nav-second collapse {{ active('news/*', 'in') }}">
                    <li class="{{ active('news/index') }}"><a href="{{route('news/index')}}">Prehľad noviniek</a></li>
                    <li class="{{ active('news/create') }}"><a href="{{route('news/create')}}"> Pridať novinku</a></li>
                </ul>
            </li>

            @if (Entrust::hasRole('admin'))
            <li class="{{ active('users/*') }}">
                <a href="#users" data-toggle="collapse" aria-expanded="false">
                    Užívatelia<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="users" class="nav nav-second collapse {{ active('users/*', 'in') }}">
                    <li class="{{ active('users/index') }}"><a href="{{route('users/index')}}">Prehľad užívateľov</a></li>
                    <li class="{{ active('users/create') }}"><a href="{{route('users/create')}}"> Pridať užívateľa</a></li>
                </ul>
            </li>
            <li class="{{ active('sites/*') }}">
                <a href="#sites" data-toggle="collapse" aria-expanded="false">
                    Texty<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="sites" class="nav nav-second collapse {{ active('sites/*', 'in') }}">
                    <li class="{{ active('sites/index') }}"><a href="{{route('sites/index')}}">Prehľad textov</a></li>
                    <li class="{{ active('sites/create') }}"><a href="{{route('sites/create')}}"> Pridať text</a></li>
                </ul>
            </li>

            <li> <a href="{{ route('export') }}">Export</a> </li>
            @endif

            <li class="nav-info">
                <div class="m-t-xs text-center">
                    V prípade akýchkoľvek problémov kontaktujte prosím p. <span class="c-white">Pavla Petroviča.</span>
                    <br/>
                </div>
            </li>
        </ul>
    </nav>
</aside>
<!-- End navigation-->