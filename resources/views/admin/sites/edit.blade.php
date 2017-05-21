@extends('admin.layouts.master')

@section('title') Úprava textu @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/summernote/summernote.css') }}"/>
@endsection

@section('header-icon') pe-7s-pen @endsection
@section('header-title') Úprava textu @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <form method="POST" action="{{ route('sites/patch', $site) }}">
                        {{ method_field('PATCH') }} 
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="parent">Rok Textu</label>
                                    <input type="text" id="parent" class="form-control" name="parent" value="{{ $site->parent }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="name">Názov Textu</label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{ $site->name }}" required>
                                </div>
                            </div>
                        </div>

                        <div id="summernote"></div>

                        <div>
                            <button type="sumbit" class="btn btn-accent" onclick="setSummer()">Uložiť zmeny</button>
                        </div>

                        <textarea name="summer" id="summer" hidden></textarea>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
<script src="{{ URL::asset('vendor/summernote/summernote.js') }}"></script>

    <script>
        $(document).ready(function () {

            $('#summernote').summernote({
                height: 400
            });
            $('#summernote').summernote('code', "{!! $site->text !!}");

        });

        function setSummer() {
            $("#summer").val($('#summernote').summernote('code'));
        }
    </script>
@endsection