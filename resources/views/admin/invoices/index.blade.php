@extends('admin.layouts.master')

@section('title') Faktúry @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/datatables/datatables.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('jquery-ui/jquery-ui.min.css') }}"/>
@endsection

@section('header-icon') pe-7s-cash @endsection
@section('header-title') Administrácia Faktúr @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    <!-- Teams Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-filled">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Stručný nadpis k prehľadu faktúr.
                </div>
                <div class="panel-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, culpa reiciendis. Eligendi totam est nisi distinctio rerum, molestias error earum esse quos doloribus placeat saepe ea sapiente qui dolorem inventore!
                    </p>
                    <div class="table-responsive">

                        <table id="invoices" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Názov tímu</th>
                                    <th>Adresa</th>
                                    <th>Registrácia do turnaja</th>
                                    <th>Zaslanie faktúry</th>
                                    <th>Zaplatenie faktúry</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach (\App\Invoice::orderBy('created_at', 'desc')->cursor() as $invoice)
                                <tr>
                                    <td>{{$invoice->team->name}}</td>
                                    <td>{{$invoice->team->address}}</td>
                                    <td>{{Carbon\Carbon::parse($invoice->registration)->format('d/m/Y')}}</td>
                                    <td>{{$invoice->sent ? Carbon\Carbon::parse($invoice->sent)->format('d/m/Y') : $invoice->sent}}</td>
                                    <td>{{$invoice->paid ? Carbon\Carbon::parse($invoice->paid)->format('d/m/Y') : $invoice->paid}}</td>
                                    <td>
                                        <a href="#" id="{{$invoice->id}}" data-toggle="modal" data-target="#modal">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>
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

    @include('admin.modals.invoicePatch')
    @include('admin.includes.message_block')
@endsection

@section('footer')
    <script src="{{ URL::asset('vendor/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('jquery-ui/jquery-ui.min.js') }}"></script>

    <script>
        $(document).ready(function () {

            /*----------  DATATABLE SETTINGS  ----------*/ 

            $('#invoices').DataTable({
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'copy',className: 'btn-sm'},
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ],
                columnDefs: [
                   { orderable: false, targets: -1 } // Turns of ordering of last column
                ]
            });

            /*----------  MODAL SETTINGS  ----------*/

            $('td a').click(function(event) {
                $("#modal-form").attr("action", "invoices/patch/" + $(this).attr("id"));
                var prevAll = $(this).parent().prevAll(); // Vsetky predchadzajuce <td>
                $(".modal-title").text($(prevAll[4]).text()); // Nazov timu
                $("#modal-small").text($(prevAll[3]).text()); // Adresa
                $("#registration").val($(prevAll[2]).text()); // Registracia do turnaja
                $("#sent").val($(prevAll[1]).text()); // Zaslanie faktury
                $("#paid").val($(prevAll[0]).text()); // Zaplatenie faktury
            });

            /*----------  DATEPICKER SETTINGS  ----------*/

            $("#registration, #sent, #paid").datepicker({
                dateFormat: 'dd/mm/yy'
            });

        });
    </script>
@endsection