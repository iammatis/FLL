@extends('layouts.master_dashboard')

@section('title')
    Prehľad Tímov
@endsection

@section('header-icon')
    pe-7s-users
@endsection

@section('header-title')
    Prehľad Tímov
@endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content-dashboard')

    <!-- TOP Statistics -->
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-filled">

                <div class="panel-body">
                    <div class="m-t-sm">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-xs">Nastaviť</a>
                        </div>
                        <h2 class="m-b-none">
                            20
                        </h2>
                        <div class="small">Počet ostávajúcich ID</div>
                        <div class="slight m-t-sm">
                            <i class="fa fa-clock-o"> </i> Posledný z: <span class="c-white">05.06.2017 12:13</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-filled">

                <div class="panel-body">
                    <div class="m-t-sm">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-xs">Nastaviť</a>
                        </div>
                        <h2 class="m-b-none">
                            12
                        </h2>
                        <div class="small">Počet otvorených inzerátov</div>
                        <div class="slight m-t-sm">
                            <i class="fa fa-clock-o"> </i> Posledný z: <span class="c-white">29.04.2017 16:40</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-filled">

                <div class="panel-body">
                    <div class="m-t-sm">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-xs">Nastaviť</a>
                        </div>
                        <h2 class="m-b-none">
                            322
                        </h2>
                        <div class="small">Počet ostávajúcich stavebníc</div>
                        <div class="slight m-t-sm">
                            <i class="fa fa-clock-o"> </i> Posledný z: <span class="c-white">29.04.2017 16:40</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END TOP Statistics -->

    <!-- Teams Table -->
    <div class="row">

        <div class="col-xs-12">
            <div class="panel">

                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Top 5 Najlepších tímov
                </div>

                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, ullam soluta sapiente. Nostrum consequatur pariatur magnam perferendis quidem deserunt, rem suscipit, minima odio aut illo, facilis assumenda expedita impedit iusto.</p>

                    <div class="table-responsive">
                        <table  class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Street Address</th>
                                <th>City</th>
                                <th>Country</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Abraham</td>
                                <td>076 9477 4896</td>
                                <td>294-318 Duis Ave</td>
                                <td>Vosselaar</td>
                                <td>Belgium</td>
                            </tr>
                            <tr>
                                <td>Phelan</td>
                                <td>0500 034548</td>
                                <td>680-1097 Mi Rd.</td>
                                <td>Lavoir</td>
                                <td>Pakistan</td>
                            </tr>
                            <tr>
                                <td>Raya</td>
                                <td>(01315) 27698</td>
                                <td>Ap #289-8161 In Avenue</td>
                                <td>Santomenna</td>
                                <td>Burkina Faso</td>
                            </tr>
                            <tr>
                                <td>Azalia</td>
                                <td>0500 854198</td>
                                <td>226-4861 Augue. St.</td>
                                <td>Newtown</td>
                                <td>Christmas Island</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- END Teams Table -->

@endsection