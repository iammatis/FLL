@extends('web.layouts.master')

@section('title') Nastavenia @endsection

@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('vendor/toastr/toastr.min.css') }}"/>
   <link rel="stylesheet" href="{{ URL::asset('jquery-ui/jquery-ui.min.css') }}"/>
   <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datepicker3.min.css') }}">
@endsection

@section('content')
@include('web.includes.message_block')

<section class="content">
	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-md-offset-1">
				<a href="{{URL::previous()}}"><i class="fa fa-angle-left"></i> Späť</a>
			</div>
		</div>

		<div class="hr-title hr-long center"><abbr>Formulár na založenie tímu</abbr> </div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<form method="POST" action="{{ route('team/edit', $tm) }}">
					{{csrf_field()}}

					<div class="row">
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								<label class="upper" for="name">Názov tímu</label>
								<input type="text" value="{{$tm->name}}" class="form-control required" name="name" id="name" aria-required="true" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('organization') ? 'has-error' : '' }}">
								<label class="upper" for="organization">Organizácia</label>
								<input type="text" value="{{$tm->organization}}" class="form-control required" name="organization" id="organization" aria-required="true" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
								<label class="upper" for="city">Mesto organizácie</label>
								<input type="text" value="{{$tm->city}}" class="form-control required" name="city" placeholder="Mesto organizácie" id="city" aria-required="true" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
								<label class="upper" for="address">Adresa organizácie</label>
								<input type="text" value="{{$tm->address}}" class="form-control required" name="address" id="address" aria-required="true" required>
							</div>
						</div>
					</div>

					<div class="hr-title hr-long center"><abbr>Členovia tímu</abbr> </div>
					@php ($i = 0)
					@foreach($members as $member)
						@php ($i++)
						<div class="row">
							<div class="col-md-6">
								<div class="form-group {{ $errors->has('member') ? 'has-error' : '' }}">
									<label class="upper" for="member{{$member->id}}">Meno člena č. {{$i}}</label>
									<input type="text" value="{{$member->name}}" class="form-control required" name="member{{$member->id}}" aria-required="true" value="{{ Request::old('member') }}" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group {{ $errors->has('birth') ? 'has-error' : '' }}">
									<label class="upper" for="birth{{$member->id}}">Dátum narodenia člena č. {{$i}}</label>
									<input data-provide="datepicker" value="{{\DateTime::createFromFormat('Y-m-d',$member->birth)->format('d/m/Y')}}" type="text" class="form-control required datepicker" name="birth{{$member->id}}" id="birth{{$member->id}}" aria-required="true" value="{{ Request::old('birth') }}" required>
								</div>
							</div>
						</div>
					@endforeach

					<div class="row">
						<div class="col-xs-12">
							<button id="add" class="btn grey btn-block">Pridať ďalšieho člen</button>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group text-center">
								<input type="hidden" name="count" id="count" value="0">
								<button class="btn btn-primary" type="submit"><i ="fa fa-paper-plane"></i>&nbsp;Odoslať</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
    </div>
</section>

<script src="{{ URL::asset('jquery-ui/jquery-ui.min.js') }}"></script>

<script>
	
	$(document).ready(function () {

		$('.datepicker').datepicker({
			dateFormat: 'dd/mm/yy'
		});

		$("#add").click(function(event) {
			event.preventDefault();

			var count = parseInt($("#count").val());
			console.log(({{$i}} + count));

			$("<div class='row'>\
					<div class='col-md-6'>\
						<div class='form-group'> \
							<label class='upper' for='member" + ({{$i}} + count) +"'>Meno člena č. " + ({{$i}} + count) +"</label>\
							<input type='text' class='form-control required' name='member" + count +"' placeholder='Meno člena' aria-required='true' required> \
						</div>\
					</div>\
					<div class='col-md-6'>\
						<div class='form-group'> \
							<label class='upper' for='birth" + ({{$i}} + count) +"'>Dátum narodenia člena č. " + ({{$i}} + count) +"</label> \
							<input data-provide='datepicker' type='text' class='form-control required datepicker' name='birth" + count +"' placeholder='Dátum narodenia člena' aria-required='true' required> \
						</div> \
					</div> \
				</div>").insertBefore(this);

			count++;

			$("#count").val(count);

			$('.datepicker').datepicker({
				dateFormat: 'dd/mm/yy'
			});
		});
	});

</script>

@endsection