@extends('admin.layouts.master')

@section('title') Prehľad Textov @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/select2/css/select2.min.css') }}"/>
@endsection

@section('header-icon') pe-7s-cup @endsection
@section('header-title') Administrácia Textov @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    <!-- Teams Table -->
    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-filled">
                <div class="panel-heading">
                    Heading
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="name" class="sr-only"></label>
                            <select id="year" class="form-control" style="width: 100%">
                                @foreach($tours as $tour)
                                    <option value="{{$tour->year}}">{{$tour->year}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 form-group">
                            <label for="name" class="sr-only"></label>
                            <select id="option" class="form-control" style="width: 100%">
                                @foreach(\App\RegionTexts::where('year', $tour->year) as $region)
                                    <option value="{{$region->year}}">{{$region->year}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    Footer
                </div>
            </div>
        </div>

    </div>
    <!-- END Teams Table -->

    {{var_dump($arr)}}

@endsection

@section('footer')
    <script src="{{ URL::asset('vendor/select2/js/select2.js') }}"></script>

    <script>
        $(document).ready(function(){
            $(".year").select2();
        })

        $("#year").on('change', function () {
            console.log("{{$tours}}");
            var locations = datajson[$(this).val()];
            var locationString = '';
            $.each(locations[0], function (i, item) {            
                locationString += '<option value="' + item[0].id + '">' + item[0].name + '</option>';
            });

            console.log(locationString);
            $('#option').html(locationString);
        });
    </script>
@endsection