@extends('admin.layouts.master')

@section('title')
    Regions!
@endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/switchery/switchery.min.css') }}"/>
@endsection

@section('header-icon') pe-7s-world @endsection
@section('header-title') Regions @endsection
@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

	<div class="row">

		<div class="col-xs-12 panel panel-filled">
			<div class="panel-body">
				<p>Checkbox-y označújú aktívne regony!</p>
				<form action="regions/patch" class="form-horizontal" method="POST">
					{{ method_field('PATCH') }} 
					
					{{-- <div class="row"> --}}
						<div class="col-md-6">
							@for ($i = 0; $i < $first; $i++)
								<div class="form-group">
									<div class="row">

										<div class="col-xs-10">
											<label for="region{{$i}}" class="sr-only">{{$regions[$i]->name}}</label>
											<input type="text" name="region{{$i}}" class="form-control" id="region{{$i}}" value="{{$regions[$i]->name}}">
										</div>

										<div class="col-xs-2">
			                                <div class="checkbox checkbox-success">
			                                    <input name="check{{$i}}" class="styled" type="checkbox" @if($regions[$i]->active) checked="" @endif>
			                                    <label for="check{{$i}}"></label>
			                                    <a href="regions/delete/{{$regions[$i]->id}}" style="color: #db524b"><i class="fa fa-ban"></i></a>
			                                </div>
										</div>

									</div>
								</div>
							@endfor
						</div>

						<div class="col-md-6">

							@for ($i = $first; $i <= $count - 1; $i++)
								<div class="form-group">
									<div class="row">

										<div class="col-xs-10">
											<label for="region{{$i}}" class="sr-only">{{$regions[$i]->name}}</label>
											<input type="text" name="region{{$i}}" class="form-control" id="region{{$i}}" value="{{$regions[$i]->name}}">
										</div>

										<div class="col-xs-2">
			                                <div class="checkbox checkbox-success">
			                                    <input name="check{{$i}}" class="styled" type="checkbox" @if($regions[$i]->active) checked="" @endif>
			                                    <label for="check{{$i}}"></label>
			                                    <a href="regions/delete/{{$regions[$i]->id}}" style="color: #db524b"><i class="fa fa-ban"></i></a>
			                                </div>
										</div>

									</div>
								</div>
							@endfor

							<div class="form-group">
								<div class="row">
									<div class="col-xs-10">
										<label for="newRegion" class="sr-only">Nový Región</label>
										<input type="text" class="form-control" name="newRegion" placeholder="Nový Región">
									</div>
									<div class="col-xs-2">
		                                <div class="checkbox checkbox-success">
		                                    <input class="styled" type="checkbox" name="newCheck">
		                                    <label for="newCheck"></label>
		                                </div>
									</div>
								</div>
							</div>

						</div>
					{{-- </div> --}}

					<div>
	                    <button class="btn btn-success btn-block">Uložiť</button>
	                </div>
					{{ csrf_field() }}
				</form>
			</div>
		</div>

	</div>

@endsection