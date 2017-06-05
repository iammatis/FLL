<!-- HEADER -->
<header id="header" class="">
   <div id="header-wrap">
      <div class="container">

         <!--LOGO-->
         <div id="logo">
            <a href="http://fll.robotika.sk/" class="logo" data-dark-logo="images/logo-dark.png">
               <img src="{{ URL::asset('images/logo.png') }}" alt="Polo Logo">
            </a>
         </div>
         <!--END: LOGO-->

         <!--MOBILE MENU -->
         <div class="nav-main-menu-responsive">
            <button class="lines-button x">
               <span class="lines"></span>
            </button>
         </div>
         <!--END: MOBILE MENU -->

         @include('web.includes.navigation')

      </div>
   </div>
</header>
<!-- END: HEADER -->
