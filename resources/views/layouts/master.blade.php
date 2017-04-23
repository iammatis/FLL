<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>@yield('title')</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="{{ URL::asset('vendor/fontawesome/css/font-awesome.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('vendor/animate.css/animate.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('vendor/toastr/toastr.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('vendor/datatables/datatables.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('vendor/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('vendor/summernote/summernote.css') }}"/>

    <!-- App styles -->
    <link rel="stylesheet" href="{{ URL::asset('css/pe-icons/pe-icon-7-stroke.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/pe-icons/helper.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/stroke-icons/style.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>

</head>
<body class=@yield('body')>
<!-- Vendor scripts -->
<script src="{{ URL::asset('vendor/pacejs/pace.min.js') }}"></script>
<script src="{{ URL::asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('vendor/toastr/toastr.min.js') }}"></script>
<script src="{{ URL::asset('vendor/datatables/datatables.min.js') }}"></script>
<script src="{{ URL::asset('vendor/select2/js/select2.js') }}"></script>
<script src="{{ URL::asset('vendor/summernote/summernote.js') }}"></script>
<script src="{{ URL::asset('vendor/sparkline/index.js') }}"></script>

<!-- App scripts -->
<script src="{{ URL::asset('js/luna.js') }}"></script>

<!-- Toastr scripts -->
{!! Toastr::render() !!}

<!-- Wrapper-->
<div class="wrapper">

    @yield('content')

</div>
<!-- End wrapper-->
</body>
</html>