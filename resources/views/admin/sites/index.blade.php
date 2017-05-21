@extends('admin.layouts.master')

@section('title') Prehľad textov na stránke @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/datatables/datatables.min.css') }}"/>
@endsection

@section('header-icon') pe-7s-cup @endsection
@section('header-title') Prehľad textov na stránke @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-filled">
                <div class="panel-heading">
                    <div class="panel-tools">
                        <a class="panel-toggle"><i class="fa fa-chevron-up"></i></a>
                        <a class="panel-close"><i class="fa fa-times"></i></a>
                    </div>
                    Kompletný prehľad textov na stránke
                </div>
                <div class="panel-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, blanditiis consectetur, dicta excepturi harum ipsam iure labore maiores nisi odio possimus, totam. Animi inventore praesentium repudiandae sequi sunt! Enim, voluptate?
                    </p>
                    <div class="table-responsive">

                        <table id="tableExample3" class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Rok</th>
                                <th>Názov</th>
                                <th>Text</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($sites as $site)
                                <tr>
                                    <td>{{$site->parent}}</td>
                                    <td>{{$site->name}}</td>
                                    <td>{{str_limit($site->text, 100)}}</td>
                                    <td><a href="{{ route('sites/edit', $site) }}"><i class="fa fa-pencil"></i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>

@endsection

@section('footer')
    <script src="{{ URL::asset('vendor/datatables/datatables.min.js') }}"></script>

    <script>
        $(document).ready(function () {

            $('#tableExample3').DataTable({
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [],
                columnDefs: [
                   { orderable: false, targets: -1 } // Turns of ordering of last column
                ],
                order: [[ 0, "desc" ]]
            });

        });
    </script>
@endsection