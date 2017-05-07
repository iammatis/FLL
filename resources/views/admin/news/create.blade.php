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
                    <form>
                        <textarea name="text" id="text" cols="30" rows="10" class="summernote"></textarea>
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

            $('.summernote').summernote({
                height: 200
            });

        });
    </script>
@endsection