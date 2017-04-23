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
            <li> <a href="#">Dátumy</a> </li>
            <li> <a href="#">Používatelia</a> </li>
            <li> <a href="#">Články</a> </li>
            <li> <a href="#">Stavebnice</a> </li>
            <li> <a href="#">Faktúry</a> </li>
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