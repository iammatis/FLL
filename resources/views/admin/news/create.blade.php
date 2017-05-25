@extends('admin.layouts.master')

@section('title') Pridanie novinky @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/summernote/summernote.css') }}"/>
@endsection

@section('header-icon') pe-7s-pen @endsection
@section('header-title') Pridanie novinky @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-filled">
                <div class="panel-body">
                    <form method="POST" action="{{ route('news/post') }}">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="title">Titulok Novinky</label>
                                    <input type="text" id="title" class="form-control" name="title" value="{{ Request::old('title') }}" required>
                                </div>
                            </div>
                        </div>

                        <div id="summernote"></div>

                        <div>
                            <button type="sumbit" class="btn btn-accent" onclick="setSummer()"">Pridať Článok</button>
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