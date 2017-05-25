@extends('admin.layouts.master')

@section('title') Administrácia noviniek @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/datatables/datatables.min.css') }}"/>
@endsection

@section('header-icon') pe-7s-news-paper @endsection
@section('header-title') Administrácia noviniek @endsection

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
                    DataTables with HTML5 export buttons
                </div>
                <div class="panel-body">
                    <p>
                        The Buttons library for DataTables provides a framework with common options and API that can be used with DataTables, but is also very extensible, recognising that you will likely want to use buttons which perform an action unique to your applications.
                    </p>
                    <div class="table-responsive">

                        <table id="tableExample3" class="table table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Titulok</th>
                                <th>Text</th>
                                <th>Dátum vytvorenia</th>
                                <th>Užívateľ</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            
                            @foreach($news as $post)
                                <tr>
                                    <td>{{str_limit($post->title, 30)}}</td>
                                    <td>{{strip_tags(str_limit($post->text, 40))}}</td>
                                    <td>{{$post->created_at}}</td>
                                    <td>{{$post->user->full_name}}</td>
                                    <td><a href="{{ route('news/edit', $post) }}"><i class="fa fa-pencil"></i></a></td>
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

    <script>
        $(document).ready(function () {

            $('#tableExample3').DataTable({
                dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
                buttons: [],
                columnDefs: [
                   { orderable: false, targets: -1 } // Turns of ordering of last column
                ],
                order: [[ 2, "desc" ]]
            });

        });
    </script>
@endsection