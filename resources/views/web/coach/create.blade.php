@extends('web.layouts.master')

@section('title') Nastavenia @endsection

@section('content')

<section class="content">
	<div class="container">
		<div class="hr-title hr-long center"><abbr>Formulár pre coacha</abbr> </div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<form method="POST" action="{{ route('coach/store') }}">
					{{csrf_field()}}
					<div class="row">
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
								<label class="upper" for="phone">Telefónne číslo</label>
								<input type="text" class="form-control required" name="phone" placeholder="Telefónne číslo" id="phone" aria-required="true" value="{{ Request::old('phone') }}" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
								<label class="upper" for="address">Adresa vaša/školy</label>
								<input type="text" class="form-control required" name="address" placeholder="Adresa" id="address" aria-required="true" value="{{ Request::old('phone') }}" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group text-center">
								<button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Odoslať</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
    </div>
</section>

@endsection