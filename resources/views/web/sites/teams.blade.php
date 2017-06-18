@extends('web.layouts.master')

@section('title') Tímy @endsection

@section('content')

<section class="content">
	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Zoznam registrovaných tímov</h3>
                <hr>
                @php($arr = array())
                @foreach ($regions as $region)
                    {{-- @php(array_push($arr, $region->region->name)) --}}
                    <h3>{{$region->region->name}}</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Číslo tímu</th>
                                    <th>Názov tímu</th>
                                    <th>Škola/Centrum/Klub</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($teams = \App\Tournament::where('year', $year)->where('region_id', $region->region_id)->get())
                                @php($arr[$region->region->name] = count($teams))
                                {{-- @php($arr[$region->name] = count($teams)) --}}
                                @foreach($teams as $team)
                                    <tr>
                                        <td>{{$team->fll_id}}</td>
                                        <td>{{$team->team->name}}</td>
                                        <td>{{$team->team->user->coach->address}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="hr-title hr-long center"><abbr>Mapa tímov</abbr> </div>
<div id="map" style="width:100%;height:500px;"></div>

@endsection

@section('scripts')
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 8,
            disableDefaultUI: true,
            scrollwheel: false
        });

        var myLatLng;
        var geocoder = new google.maps.Geocoder();

        var country = "Slovakia";

        geocoder.geocode( {'address' : country}, function(results, status) {
            if (status == google.maps.GeocoderStatus.OK) {
                map.setCenter(results[0].geometry.location);
                console.log(results[0].geometry.location);
            }
        });

        var pole = {!! json_encode($arr) !!};

        for (var key in pole) {
            // skip loop if the property is from prototype
            if (!pole.hasOwnProperty(key)) continue;

            let obj = pole[key];

            geocoder.geocode( { 'address': key}, function(results, status) {

                if (status == google.maps.GeocoderStatus.OK) {
                    var latitude = results[0].geometry.location.lat();
                    var longitude = results[0].geometry.location.lng();

                    // CREATE MARKER
                    var marker = new google.maps.Marker({
                            position: new google.maps.LatLng(latitude, longitude),
                            map: map,
                            label: ''+obj
                            // icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld='+ obj +'|FF0000|000000'
                    });
                    
                } 
            }); 
        }

    // MAP RESIZING
    google.maps.event.addDomListener(window, "resize", function() {
        var center = map.getCenter();
        google.maps.event.trigger(map, "resize");
        map.setCenter(center); 
    });

    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1JwbWC-yf9NLjHT_2mY1xM2XpqufxxZk&callback=initMap"></script>
@endsection