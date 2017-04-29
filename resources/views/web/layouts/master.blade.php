
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

   <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

   <title>@yield('title')</title>

   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}"/>

   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <link rel="stylesheet" href="{{ URL::asset('vendor/IE10-workaround/ie10-viewport-bug-workaround.css') }}"/>

   <!-- Custom styles for this template -->
   <link rel="stylesheet" href="{{ URL::asset('vendor/offcanvas/offcanvas.css') }}"/>
</head>

<body>

   @include('web.includes.header')

   <div class="container">

      <div class="row row-offcanvas row-offcanvas-left" id="navigation">

      @include('web.includes.navigation')

      <div class="col-xs-12 col-sm-9">
      
         <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs">Toggle nav</button>
         </p>

         <div class="row">
            @yield('content')
         </div>
      </div><!--/.col-xs-12.col-sm-9-->

      </div><!--/row-->

      @include('web.includes.footer')

   </div><!--/.container-->


   <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="{{ URL::asset('jquery/jquery-3.1.1.min.js') }}"></script>
   <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="{{ URL::asset('vendor/IE10-workaround/ie10-viewport-bug-workaround.js') }}"></script>
   <script src="{{ URL::asset('vendor/offCanvas/offcanvas.js') }}"></script>
 </body>
 </html>
