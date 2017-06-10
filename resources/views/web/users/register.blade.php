@extends('web.layouts.master')

@section('title') Registrácia @endsection

@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('vendor/toastr/toastr.min.css') }}"/>
@endsection

@section('content')
@include('web.includes.message_block')

<section class="content">
	<div class="container">

		<div class="hr-title hr-long center"><abbr>Registrácia</abbr> </div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form method="POST" action="{{ route('user/registerPost') }}">
					{{csrf_field()}}
					<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
						<label for="name" class="sr-only">Meno a priezvisko</label>
						<input name="name" type="text" class="form-control" placeholder="Meno a priezvisko" value="{{ Request::old('name') }}" required>
					</div>

					<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
						<label for="email" class="sr-only">Email</label>
						<input name="email" type="text" class="form-control" placeholder="email@mail.com" value="{{ Request::old('email') }}" required>
					</div>

					<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
						<label for="password" class="sr-only">Heslo</label>
						<input name="password" type="password" class="form-control" placeholder="Heslo" required>
					</div>

					<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
						<label for="password_confirmation" class="sr-only">Heslo znova</label>
						<input name="password_confirmation" type="password" class="form-control" placeholder="Heslo znova" required>
					</div>

					<div class="form-inline form-group">
						<button class="btn btn-block btn-primary" type="submit">Registrovať</button>
					</div>
				</form>
			</div>
		</div>

    </div>
</section>

@endsection