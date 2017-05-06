@extends('admin.layouts.master')

@section('title') Dátumy @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('jquery-ui/jquery-ui.min.css') }}"/>
@endsection

@section('header-icon') pe-7s-date @endsection
@section('header-title') Prehľad Dátumov @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    <!-- TOP Statistics -->
    <div class="row">

        @foreach($dates as $date)
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="panel panel-filled">

                    <div class="panel-body">
                        <div class="m-t-sm">
                            <div class="pull-right" id="dateModal">
                                <a href="#" class="btn btn-danger btn-xs" data-toggle="modal"
                                   data-target="#deleteDate" id="{{$date->id}}">Zmazať</a>
                                <a href="#" class="btn btn-default btn-xs" data-toggle="modal"
                                   data-target="#patchDate" id="{{$date->id}}">Nastaviť</a>
                            </div>
                            <h2 class="m-b-none">
                                {{Carbon\Carbon::parse($date->date)->diffInDays()}} dní
                            </h2>
                            <div class="small">{{$date->name}}</div>
                            <div class="slight m-t-sm">
                                <i class="fa fa-clock-o"> </i> <span>{{Carbon\Carbon::parse($date->date)->format('d/m/Y')}}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

        <div class="col-lg-2 col-xs-6">
            <div class="panel panel-b-accent">
                <div class="panel-body" data-toggle="modal" data-target="#createDate">
                    <h2 class="m-b-none">
                        <i class="fa fa-plus c-white"> </i>
                    </h2>
                    <div class="small">Pridať dátum</div>
                    <div class="slight m-t-sm"><i class="fa fa-info"> </i> Additional info</div>
                </div>
            </div>
        </div>

    </div>
    @include('admin.modals.createDate')
    @include('admin.modals.patchDate')
    @include('admin.modals.deleteDate')
    @include('admin.includes.message_block')
    <!-- END TOP Statistics -->
@endsection

@section('footer')
    <script src="{{ URL::asset('jquery-ui/jquery-ui.min.js') }}"></script>

    <script>

        $('#dateModal a').click(function(event) {
            $("#patchDate-form").attr("action", "dates/patch/" + $(this).attr("id"));
            $("#nameD").val($(this).parent().nextAll().eq(1).text()); // Nazov Datumu
            var datum = $(this).parent().nextAll().eq(2).children().get(1);
            $("#dateD").val($(datum).text()); // Datum

            $("#deleteDate-form").attr("action", "dates/delete/" + $(this).attr("id"));
            $("#deleteDateTitle").text($(this).parent().nextAll().eq(1).text()); // Datum
        });

        $(function () {
            $("#date, #dateD").datepicker({
                dateFormat: 'dd/mm/yy'
            });
        });
    </script>
@endsection