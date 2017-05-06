@extends('web.layouts.master')

@section('title') Coach Create @endsection

@section('content')
<h2>Coach Create</h2>

<div class="col-xs-12">
	<form action="{{ route('coach/store') }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
			<label for="address">Adresa</label>
			<input type="text" class="form-control" id="address" placeholder="Adresa" name="address" required>
		</div>

		<div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
			<label for="phone">Telefón</label>
			<input type="text" class="form-control" id="phone" placeholder="Telefón" name="phone" required>
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>

@include('web.includes.errors')

@endsection