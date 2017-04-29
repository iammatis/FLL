@extends('web.layouts.master')

@section('title') Index @endsection

@section('content')
	<h2>Index</h2>

	@if (Auth::guest())

		<div class="col-md-6">
			<form method="POST" action="{{ route('signIn') }}">
				{{ csrf_field() }}
		        <h2>Log in</h2>

		        <label for="email" class="sr-only">Email address</label>
		        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required>

		        <label for="password" class="sr-only">Password</label>
		        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>

		        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
		    </form>
		</div>

		<div class="col-md-6">
			<form method="POST" action="{{ route('signUp') }}">
				{{ csrf_field() }}
		        <h2>Register</h2>

		        <label for="email" class="sr-only">Email address</label>
		        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required>

		        <label for="full_name" class="sr-only">Full Name</label>
		        <input type="full_name" id="full_name" class="form-control" placeholder="Full Name" name="full_name" required>

		        <label for="password" class="sr-only">Password</label>
		        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>

		        <label for="password_confirmation" class="sr-only">Repetead Password</label>
		        <input type="password" id="password_confirmation" class="form-control" placeholder="Repetead Password" name="password_confirmation" required>

		        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
		    </form>
		</div>

	@endif

	@if(Auth::user()->hasRole('user'))
		<ul>
			<li>
				<a href="{{ route('createCoach') }}">Become a coach!</a>
			</li>
			<li>
				<a href="#">Post an Ad!</a>
			</li>
		</ul>
	@endif
@endsection