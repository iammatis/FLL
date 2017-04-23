@extends('layouts.master')

@section('content')

    @include('includes.header')
    @include('includes.navigation')

    <script>
        $(@yield('active-in')).addClass("in");
        $(@yield('active-section')).parent().addClass("active");
    </script>

    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">

                    <!-- Section Header -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="view-header">
                                <div class="header-icon">
                                    <i class="pe page-header-icon @yield('header-icon')"></i>
                                </div>
                                <div class="header-title">
                                    <h3 class="m-b-xs">@yield('header-title')</h3>
                                    <small>
                                        @yield('header-info')
                                    </small>
                                </div>
                            </div>
                            <hr>
                        </div>

                    </div>
                    <!-- END Section Header -->

                    @yield('content-dashboard')

                </div>
            </div>
        </div>
    </section>
    <!-- End main content-->

@endsection