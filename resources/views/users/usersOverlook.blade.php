@extends('layouts.master_dashboard')

@section('title')
    Prehľad Užívateľov
@endsection

@section('header-icon')
    pe-7s-users
@endsection

@section('header-title')
    Prehľad Užívateľov
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
                    Prehľad všetkých užívateľov
                </div>
                <div class="panel-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores dignissimos dolor eaque, eius eveniet id modi nihil nobis perferendis quas quidem quisquam quo quod sint tempora voluptas. Inventore, quis.
                    </p>
                    <div class="table-responsive">

                        <table id="tableExample3" class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach (\App\User::all() as $team)
                                <tr>
                                    <td>{{$team->full_name}}</td>
                                    <td>{{$team->email}}</td>
                                    <td>Administrator</td>
                                </tr>
                            @endforeach
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
                buttons: []
            });

        });
    </script>

@endsection