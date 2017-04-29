@extends('admin.layouts.master')

@section('title') Pridanie článku @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/summernote/summernote.css') }}"/>
@endsection

@section('header-icon') pe-7s-pen @endsection
@section('header-title') Pridanie článku @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <form class="summernote">
                        Dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        <br/>
                        <br/>
                    </form>
                    <div>
                        <button class="btn btn-accent">Pridať Článok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
<script src="{{ URL::asset('vendor/summernote/summernote.js') }}"></script>

    <script>
        $(document).ready(function () {

            $('.summernote').summernote();

        });
    </script>
@endsection