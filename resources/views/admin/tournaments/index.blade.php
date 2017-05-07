@extends('admin.layouts.master')

@section('title') Turnaje @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/datatables/datatables.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('jquery-ui/jquery-ui.min.css') }}"/>
@endsection

@section('header-icon') pe-7s-cup @endsection
@section('header-title') Prehľad tímov prihlásených do turnaja @endsection

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
                    Krátky popis k prehľadu prihlásených tímov.
                </div>
                <div class="panel-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, maxime, sed! Velit minima vitae aliquam. Magni ducimus quae impedit et fugit dolor, dignissimos aperiam sapiente sint facilis reprehenderit voluptates dolorum.
                    </p>
                    <div class="table-responsive">

                        <table id="tableExample3" class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Názov tímu</th>
                                <th>Región</th>
                                <th>Dátum Registrácie</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($tours as $tour)
                                    <tr>
                                        <td>{{$tour->team->name}}</td>
                                        <td>{{$tour->region->name}}</td>
                                        <td>{{$tour->created_at}}</td>
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

@section('footer')
    <script src="{{ URL::asset('vendor/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('jquery-ui/jquery-ui.min.js') }}"></script>

   <script>

        $(document).ready(function () {

            $('#tableExample3').DataTable({
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [],
                order: [[ 2, "asc" ]]
            });

        });
    </script>
@endsection