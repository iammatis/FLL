@extends('web.layouts.master')

@section('title') Index @endsection

@section('content')
	<h2>Index</h2>

	@if (Auth::guest())

		<div class="col-md-6">
			<form method="POST" action="{{ route('signIn') }}">
				{{ csrf_field() }}
		        <h2>Log in</h2>
				
				<div class="form-group">
			        <label for="email" class="sr-only">Email address</label>
			        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required>
				</div>

				<div class="form-group">
			        <label for="password" class="sr-only">Password</label>
			        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
				</div>

		        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
		    </form>
		</div>

		<div class="col-md-6">
			<form method="POST" action="{{ route('signUp') }}">
				{{ csrf_field() }}
		        <h2>Register</h2>

				<div class="form-group">
			        <label for="email" class="sr-only">Email address</label>
			        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required>
				</div>

				<div class="form-group">
			        <label for="full_name" class="sr-only">Full Name</label>
			        <input type="full_name" id="full_name" class="form-control" placeholder="Full Name" name="full_name" required>
				</div>

				<div class="form-group">
			        <label for="password" class="sr-only">Password</label>
			        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
				</div>

				<div class="form-group">
			        <label for="password_confirmation" class="sr-only">Repetead Password</label>
			        <input type="password" id="password_confirmation" class="form-control" placeholder="Repetead Password" name="password_confirmation" required>
				</div>

		        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
		    </form>
		</div>

	@endif

	@if($user = Auth::user())
		<h4>Vitaj {{$user->full_name}}!</h4>
		@if(Auth::user()->hasRole('coach'))
			<ul>
				<li>
					<a href="{{ route('team/create') }}">Zaloz tim!</a>
				</li>
				<li>
					<a href="#">Post an coachAd!</a>
				</li>
				<li>
					<a href="">View coachAdS!</a>
				</li>
			</ul>
		@else
			<ul>
				<li>
					<a href="{{ route('coach/create') }}">Become a coach!</a>
				</li>
				<li>
					<a href="#">Post an Ad!</a>
				</li>
				<li>
					<a href="#">View AdS!</a>
				</li>
			</ul>
		@endif

	@endif
@endsection