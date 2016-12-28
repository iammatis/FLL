@extends('layouts.master')

@section('title')
    Team Creation
@endsection

@section('content')
    @include('includes.message_block')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Create a Team!</h3>
            <hr>
            <h4>Fakturačné údaje</h4>
            <form action="{{ route('create_team') }}" method="POST">
                <div class="form-group">
                    <label for="team_name">Názov tímu</label>
                    <input class="form-control" type="text" name="team_name" id="team_name" value="{{ Request::old('team_name') }}"">
                </div>
                <div class="form-group">
                    <label for="organization">Organizácia</label>
                    <input class="form-control" type="text" name="organization" id="organization" value="{{ Request::old('organization') }}"">
                </div>
                <div class="form-group">
                    <label for="address">Adresa</label>
                    <input class="form-control" type="text" name="address" id="address" value="{{ Request::old('address') }}"">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection