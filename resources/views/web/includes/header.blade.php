<nav class="navbar navbar-fixed-top navbar-inverse">
   <div class="container">
   <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" aria-expanded="false" aria-controls="navbar">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Project name</a>
      @if (Auth::check())
         <span class="navbar-text" href="#"> {{Auth::user()->full_name}} </span>
         <a href="{{ route('logout') }}" class="navbar-link navbar-text"> Logout</a>
      @endif
   </div>
   </div><!-- /.container -->
</nav><!-- /.navbar -->