<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>@yield('title')</title>

    @yield('styles')

    {{-- Neccesary on every site ! --}}
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('vendor/toastr/toastr.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/pe-icons/pe-icon-7-stroke.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/pe-icons/helper.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/stroke-icons/style.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>

</head>
<body>

    @include('admin.includes.header')
    @include('admin.includes.navigation')

    <!-- Wrapper-->
    <div class="wrapper">

        <!-- Main content-->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">

                        @include('admin.includes.sectionHeader')

                        @yield('content')

                    </div>
                </div>
            </div>
        </section>
        <!-- End main content-->

    </div>
    <!-- End wrapper-->

    <footer>
        {{-- Neccessary on every site ! --}}
        <script src="{{ URL::asset('jquery/jquery-3.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('vendor/pacejs/pace.min.js') }}"></script>
        <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('vendor/toastr/toastr.min.js') }}"></script>

        <!-- App scripts -->
        <script src="{{ URL::asset('js/luna.js') }}"></script>

        <!-- Toastr scripts -->
        {!! Toastr::render() !!}

        @yield('footer')
    </footer>

</body>
</html>