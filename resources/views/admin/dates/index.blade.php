@extends('layouts.master_dashboard')

@section('title')
    Dátumy
@endsection

@section('header-icon')
    pe-7s-date
@endsection

@section('header-title')
    Prehľad Dátumov
@endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content-dashboard')

    <!-- TOP Statistics -->
    <div class="row">

        @foreach($dates as $date)

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel panel-filled">

                    <div class="panel-body">
                        <div class="m-t-sm">
                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-xs" data-toggle="modal"
                                   data-target="#date{{$date->id}}">Nastaviť</a>
                            </div>
                            <h2 class="m-b-none">
                                {{Carbon\Carbon::parse($date->datum)->diffInDays()}} dní
                            </h2>
                            <div class="small">{{$date->label}}</div>
                            <div class="slight m-t-sm">
                                <i class="fa fa-clock-o"> </i> <span>{{$date->created_at}}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="modal fade" id="date{{$date->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                <form action="dates/update/id" method="POST">

                    {{csrf_field()}}

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title">{{$date->label}}</h4>
                                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </small>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="m-t-xs text-center">
                                            <input type="text" class="datumy" id="datum_reg" name="datum_reg"
                                                   placeholder="{{$date->datum}}"
                                                   value="{{Carbon\Carbon::parse($date->datum)->format("m/d/Y")}}">
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zavrieť</button>
                                <button type="submit" class="btn btn-accent">Uložiť zmeny</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        @endforeach

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-b-accent">

                <div class="panel-body">
                    <div class="m-t-sm">
                        <h2 class="m-b-none">
                            <i class="pe-7s-plus" style="font-size: 32px"></i> Pridať dátum
                        </h2>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- END TOP Statistics -->

    <script>
        $(function () {
            $("#datum_reg").datepicker();
        });
    </script>

@endsection