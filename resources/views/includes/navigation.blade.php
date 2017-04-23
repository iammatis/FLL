<!-- Navigation-->
<aside class="navigation">
    <nav>
        <ul class="nav luna-nav">
            <li class="nav-category">
                Dashboard
            </li>
            <li class="active"><a href="{{route('dashboard')}}">Index</a></li>
            <li>
                <a href="#teams" data-toggle="collapse" aria-expanded="false">
                    Tímy<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="teams" class="nav nav-second collapse">
                    <li><a href="{{route('teams_overlook')}}"> Prehľad tímov</a></li>
                    <li><a href="{{route('teams_administration')}}"> Administrácia tímov</a></li>
                    <li><a href="teams_team.html"> Administrácia tímu</a></li>
                </ul>
            </li>
            <li> <a href="{{route('datesOverlook')}}">Dátumy</a> </li>
            <li>
                <a href="#users" data-toggle="collapse" aria-expanded="false">
                    Užívatelia<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="users" class="nav nav-second collapse">
                    <li><a href="{{route('usersOverlook')}}">Prehľad užívateľov</a></li>
                    <li><a href="{{route('usersAddUser')}}"> Pridať užívateľa</a></li>
                </ul>
            </li>
            <li>
                <a href="#news" data-toggle="collapse" aria-expanded="false">
                    Články<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="news" class="nav nav-second collapse">
                    <li><a href="{{route('newsOverlook')}}">Prehľad článkov</a></li>
                    <li><a href="{{route('newsAddNews')}}"> Pridať článok</a></li>
                </ul>
            </li>
            <li>
                <a href="#kits" data-toggle="collapse" aria-expanded="false">
                    Stavebnice<span class="sub-nav-icon"> <i class="stroke-arrow"></i> </span>
                </a>
                <ul id="kits" class="nav nav-second collapse">
                    <li><a href="{{route('kitsOverlook')}}">Prehľad stavebníc</a></li>
                    <li><a href="{{route('kitsSendKit')}}"> Zaslať stavebnicu</a></li>
                </ul>
            </li>
            <li> <a href="{{route('invoicesOverlook')}}">Faktúry</a> </li>
            <li> <a href="#">Export</a> </li>

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