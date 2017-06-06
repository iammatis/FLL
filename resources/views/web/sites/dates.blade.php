@extends('web.layouts.master')

@section('title') Kalendár @endsection

@section('content')

<section class="content">
	<div class="container">

		<div class="hr-title hr-long center"><abbr>Kalendár FLL na Slovensku {{$year}}</abbr> </div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="table-responsive">
					<table class="table">
				        <thead>
				         	<tr>
				            	<th></th>
				            	<th></th>
				          	</tr>
				        </thead>
				        <tbody>
							@foreach ($dates as $date)
					          	<tr>
						            <td>{{$date->info ? $date->info : Carbon\Carbon::parse($date->date)->format('d/m/Y')}}</td>
						            <td>{{$date->name}}</td>
					          	</tr>
							@endforeach
				        </tbody>
				      </table>
			    </div>

			</div>
		</div>
    </div>
</section>

@endsection