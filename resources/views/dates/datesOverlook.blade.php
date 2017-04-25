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

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-filled">

                <div class="panel-body">
                    <div class="m-t-sm">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#datumReg4">Nastaviť</a>
                        </div>
                        <h2 class="m-b-none">
                            20 dní
                        </h2>
                        <div class="small">Registrácia</div>
                        <div class="slight m-t-sm">
                            <i class="fa fa-clock-o"> </i> <span>05.06.2017</span>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="datumReg4" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title">Dátum registrácie</h4>
                                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </small>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="m-t-xs text-center">
                                            <input type="text" class="datumy" id="datum_reg" name="datum_reg"
                                                   placeholder="04/05/2017">
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zavrieť</button>
                                <button type="button" class="btn btn-accent">Uložiť zmeny</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-filled">

                <div class="panel-body">
                    <div class="m-t-sm">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#datumReg3">Nastaviť</a>
                        </div>
                        <h2 class="m-b-none">
                            20 dní
                        </h2>
                        <div class="small">Úprava tímov</div>
                        <div class="slight m-t-sm">
                            <i class="fa fa-clock-o"> </i> <span>05.06.2017</span>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="datumReg3" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title">Dátum registrácie</h4>
                                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </small>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="m-t-xs text-center">
                                            <input type="text" class="datumy" id="datum_reg" name="datum_reg"
                                                   placeholder="04/05/2017">
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zavrieť</button>
                                <button type="button" class="btn btn-accent">Uložiť zmeny</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-filled">

                <div class="panel-body">
                    <div class="m-t-sm">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#datumReg2">Nastaviť</a>
                        </div>
                        <h2 class="m-b-none">
                            12 dní
                        </h2>
                        <div class="small">Úprava členov tímu</div>
                        <div class="slight m-t-sm">
                            <i class="fa fa-clock-o"> </i> <span>29.04.2017</span>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="datumReg2" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title">Dátum registrácie</h4>
                                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </small>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="m-t-xs text-center">
                                            <input type="text" class="datumy" id="datum_reg" name="datum_reg"
                                                   placeholder="04/05/2017">
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zavrieť</button>
                                <button type="button" class="btn btn-accent">Uložiť zmeny</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="panel panel-filled">

                <div class="panel-body">
                    <div class="m-t-sm">
                        <div class="pull-right">
                            <a href="#" class="btn btn-default btn-xs" data-toggle="modal" data-target="#datumReg">Nastaviť</a>
                        </div>
                        <h2 class="m-b-none">
                            322 dní
                        </h2>
                        <div class="small">Ďalší dátum</div>
                        <div class="slight m-t-sm">
                            <i class="fa fa-clock-o"> </i> <span>29.04.2017</span>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="datumReg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header text-center">
                                <h4 class="modal-title">Dátum registrácie</h4>
                                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                </small>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h4 class="m-t-xs text-center">
                                            <input type="text" class="datumy" id="datum_reg" name="datum_reg"
                                                   placeholder="04/05/2017">
                                        </h4>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Zavrieť</button>
                                <button type="button" class="btn btn-accent">Uložiť zmeny</button>
                            </div>
                        </div>
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