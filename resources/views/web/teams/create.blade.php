@extends('web.layouts.master')

@section('title') Index @endsection

@section('content')
<h2>Create a Team!</h2>

<div class="col-xs-12">
	<form action="{{ route('team/store') }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group" {{ $errors->has('team_name') ? 'has-error' : '' }}>
			<label for="team_name">Názov tímu</label>
			<input type="text" class="form-control" id="team_name" placeholder="Názov tímu" name="team_name" value="{{ Request::old('team_name') }}" required>
		</div>

		<div class="form-group" {{ $errors->has('organization') ? 'has-error' : '' }}>
			<label for="organization">Organizácia</label>
			<input type="text" class="form-control" id="organization" placeholder="Organizácia" name="organization" value="{{ Request::old('organization') }}" required>
		</div>

		<div class="form-group" {{ $errors->has('address') ? 'has-error' : '' }}>
			<label for="address">Adresa</label>
			<input type="text" class="form-control" id="address" placeholder="Adresa" name="address" value="{{ Request::old('address') }}" required>
		</div>

		<button type="submit" class="btn btn-default">Submit</button>
	</form>
</div>

@include('web.includes.message_block')

@endsection