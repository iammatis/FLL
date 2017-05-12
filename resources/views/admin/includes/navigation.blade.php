<!-- Navigation-->
<aside class="navigation">
    <nav>
        <ul class="nav luna-nav">
            <li class="nav-category">Dashboard</li>
            <li class="{{ active('dashboard') }}"><a href="{{route('dashboard')}}">Index</a></li>

            <li class="nav-category">Administrácia turnajov</li>
            <li class="{{ active('tournaments/settings') }}"><a href="{{route('tournaments/settings')}}">Správa turnaja</a></li>
            <li class="{{ active('tournaments/index') }}"><a href="{{route('tournaments/index')}}">Turnaje</a></li>
            <li class="{{ active('tournaments/archive') }}"><a href="{{route('tournaments/archive')}}">Archívne turnaje</a></li>
            <li class="{{ active('teams/*') }}">
                <a href="#teams" data-toggle="collapse" aria-expanded="false">
                    Tímy<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="teams" class="nav nav-second collapse {{ active('teams/*', 'in') }}">
                    <li class="{{ active('teams/index') }}"><a href="{{route('teams/index')}}"> Prehľad tímov</a></li>
                    <li class="{{ active('teams/all') }}"><a href="{{route('teams/all')}}"> Administrácia tímov</a></li>
                    <li><a href="teams_team.html"> Administrácia tímu</a></li>
                </ul>
            </li>
            <li class="{{ active('kits/index') }}"> <a href="{{route('kits/index')}}">Stavebnice</a> </li>
            <li class="{{ active('invoices/index') }}"> <a href="{{route('invoices/index')}}">Faktúry</a> </li>

            <li class="nav-category">Web</li>
            <li class="{{ active('news/*') }}">
                <a href="#news" data-toggle="collapse" aria-expanded="false">
                    Články<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="news" class="nav nav-second collapse {{ active('news/*', 'in') }}">
                    <li class="{{ active('news/index') }}"><a href="{{route('news/index')}}">Prehľad článkov</a></li>
                    <li class="{{ active('news/create') }}"><a href="{{route('news/create')}}"> Pridať článok</a></li>
                </ul>
            </li>
            <li class="{{ active('users/*') }}">
                <a href="#users" data-toggle="collapse" aria-expanded="false">
                    Užívatelia<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="users" class="nav nav-second collapse {{ active('users/*', 'in') }}">
                    <li class="{{ active('users/index') }}"><a href="{{route('users/index')}}">Prehľad užívateľov</a></li>
                    <li class="{{ active('users/create') }}"><a href="{{route('users/create')}}"> Pridať užívateľa</a></li>
                </ul>
            </li>
            <li class="{{ active('texts/index') }}"> <a href="{{route('texts/index')}}">Texty</a> </li>
            <li> <a href="{{ route('export') }}">Export</a> </li>

            <li class="nav-info">
                <div class="m-t-xs text-center">
                    In case of any problem please conact <span class="c-white">Mr. Pavel Petrovič.</span>
                    <br/>
                </div>
            </li>
        </ul>
    </nav>
</aside>
<!-- End navigation-->