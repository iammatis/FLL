<!-- Header-->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <div id="mobile-menu">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
            </div>
            <a class="navbar-brand" href="{{route('dashboard')}}">
                LUNAR
                <span>v.1.0</span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="left-nav-toggle">
                <a href="">
                    <i class="stroke-hamburgermenu"></i>
                </a>
            </div>
            <ul class="nav navbar-nav navbar-right navbar-ul">
                <li class="navbar-logout-li">
                    <span class="profile-address">{{Auth::user()->full_name}}</span>
                </li>
                <li class="navbar-logout-li">
                    <a href="{{route('logoutAdmin')}}" class="navbar-logout-link"><i class="fa fa-sign-out"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End header-->