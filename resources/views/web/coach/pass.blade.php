@extends('web.layouts.master')

@section('title') Zmena hesla @endsection

@section('content')
@include('web.includes.message_block')

<section class="content">
	<div class="container">

		<div class="row">
			<div class="col-xs-12 col-md-offset-1">
				<a href="{{URL::previous()}}"><i class="fa fa-angle-left"></i> Späť</a>
			</div>
		</div>

		<div class="hr-title hr-long center"><abbr>Formulár na zmenu hesla</abbr> </div>

		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<form method="POST" action="{{ route('user/editPass') }}">
					{{csrf_field()}}

					<div class="row">
						<div class="col-md-6">
							<div class="form-group {{ $errors->has('current-password') ? 'has-error' : '' }}">
								<label class="upper" for="current-password">Staré heslo</label>
								<input type="password" class="form-control required" name="current-password" placeholder="Staré heslo" aria-required="true" required>
							</div>
						</div>

						<div class="col-md-6">
							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
								<label class="upper" for="password">Nové heslo</label>
								<input type="password" class="form-control required" name="password" placeholder="Nové heslo" aria-required="true" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
								<label class="upper" for="password_confirmation">Nové heslo znova</label>
								<input type="password" class="form-control required" name="password_confirmation" placeholder="Nové heslo znova" aria-required="true" required>
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