@extends('layouts.master_dashboard')

@section('title')
    Prehľad Tímov
@endsection

@section('header-icon')
    pe-7s-cup
@endsection

@section('header-title')
    Administrácia Tímov
@endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content-dashboard')

    <!-- Teams Table -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-filled">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Kompletná tabuľka všetkých tímov
                </div>
                <div class="panel-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, blanditiis consectetur, dicta excepturi harum ipsam iure labore maiores nisi odio possimus, totam. Animi inventore praesentium repudiandae sequi sunt! Enim, voluptate?
                    </p>
                    <div class="table-responsive">

                        <table id="tableExample3" class="table table-striped table-hover">
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
                                    <td>{{$team->coach_id}}</td>
                                    <td>FLL ID</td>
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

    <script>
        $(document).ready(function () {

            $('#tableExample3').DataTable({
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [
                    {extend: 'copy',className: 'btn-sm'},
                    {extend: 'csv',title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                    {extend: 'print',className: 'btn-sm'}
                ]
            });

        });
    </script>

@endsection