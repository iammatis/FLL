@extends('web.layouts.master')

@section('title') Tímy @endsection

@section('content')

<section class="content">
	<div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h2>Zoznam registrovaných tímov</h3>
                <hr>
                @foreach ($regions as $region)
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
                                @foreach(\App\Tournament::where('year', $year)->where('region_id', $region->region_id)->get() as $team)
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

@endsection