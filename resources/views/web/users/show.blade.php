@extends('web.layouts.master')

@section('title') Úprava údajov trénera @endsection

@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('vendor/toastr/toastr.min.css') }}"/>
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

		<div class="hr-title hr-long center"><abbr>Formulár na úprave údajov trénera</abbr> </div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<form method="POST" action="{{ route('coach/edit', $user) }}">
					{{csrf_field()}}

					<div class="row">
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								<label class="upper" for="name">Meno a Priezvisko</label>
								<input type="text" value="{{$user->full_name}}" class="form-control required" name="name" aria-required="true" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
								<label class="upper" for="phone">Telefónne číslo</label>
								<input type="text" value="{{$user->coach->phone}}" class="form-control required" name="phone" aria-required="true" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
								<label class="upper" for="address">Adresa</label>
								<input type="text" value="{{$user->coach->address}}" class="form-control required" name="address" placeholder="Mesto organizácie" aria-required="true" required>
							</div>
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

@endsection