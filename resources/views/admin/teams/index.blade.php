@extends('admin.layouts.master')

@section('title') Prehľad Tímov @endsection

@section('header-icon') pe-7s-cup @endsection
@section('header-title') Prehľad Tímov @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    <!-- TOP Statistics -->
    <div class="row">

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="panel panel-filled">

                <div class="panel-body">
                    <div class="m-t-sm">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal"
                                   data-target="#fllid">Nastaviť</a>
                        </div>
                        <h2 class="m-b-none">
                            {{\App\IDs::all()->count()}}
                        </h2>
                        <div class="small">Počet ostávajúcich ID</div>
                        <div class="slight m-t-sm">
                            <i class="fa fa-clock-o"> </i> 
                            Posledné z: <span class="c-white">{{\App\IDs::all()->pluck('created_at')->last()}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.modals.createId')

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
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#patchKitsLeft">Nastaviť</a>
                        </div>
                        <h2 class="m-b-none">
                            {{\App\KitsLeft::all()->pluck('count')->first()}}
                        </h2>
                        <div class="small">Počet ostávajúcich stavebníc</div>
                        <div class="slight m-t-sm">
                            <i class="fa fa-clock-o"> </i> Posledné z: <span class="c-white">{{\App\KitsLeft::all()->pluck('updated_at')->last()}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('admin.modals.patchKit')

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
                    5 Posledných registrovaných tímov
                </div>

                <div class="panel-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, ullam soluta sapiente. Nostrum consequatur pariatur magnam perferendis quidem deserunt, rem suscipit, minima odio aut illo, facilis assumenda expedita impedit iusto.</p>

                    <div class="table-responsive">
                        <table  class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Názov tímu</th>
                                <th>Organizácia</th>
                                <th>Adresa</th>
                                <th>Coach</th>
                                <th>FLL ID</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach (\App\Team::orderBy('created_at', 'desc')->limit('5')->cursor() as $team)
                                    <tr>
                                    <td>{{$team->team_name}}</td>
                                    <td>{{$team->organization}}</td>
                                    <td>{{$team->address}}</td>
                                    <td>{{$team->user_id}}</td>
                                    <td>{{$team->fll_id}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- END Teams Table -->

@endsection