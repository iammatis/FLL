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

                        <div class="col-md-6">
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

                        <div class="col-md-6">
                            <div class="panel panel-b-accent">

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="m-t-sm">
                                                <h2 class="m-b-none">
                                                    20
                                                </h2>
                                                <div class="small">Počet ostávajúcich stavebníc</div>
                                                <div class="slight m-t-sm">
                                                    <i class="fa fa-clock-o"> </i> Posledná odoslaná: <span class="c-white">05.06.2017 12:13</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="m-t-sm">
                                                <div class="sparkline7 m-t-xs"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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