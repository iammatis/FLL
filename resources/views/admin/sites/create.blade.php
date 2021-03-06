@extends('admin.layouts.master')

@section('title') Pridanie textu @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/summernote/summernote.css') }}"/>
@endsection

@section('header-icon') pe-7s-pen @endsection
@section('header-title') Pridanie textu @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <form method="POST" action="{{ route('sites/post') }}">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="parent">Rok textu</label>
                                    <input type="text" id="parent" class="form-control" name="parent" value="{{ Request::old('parent') }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Názov textu</label>
                                    <input type="text" id="name" class="form-control" name="name" value="{{ Request::old('name') }}" required>
                                </div>
                            </div>
                        </div>

                        <div id="summernote"></div>

                        <div>
                            <button type="sumbit" class="btn btn-accent" onclick="setSummer()"">Pridať text</button>
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
                height: 200
            });

        });

        function setSummer() {
            $("#summer").val($('#summernote').summernote('code'));
        }
    </script>
@endsection