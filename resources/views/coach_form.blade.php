@extends('layouts.master')

@section('title')
    Coach Creation
@endsection

@section('content')
    {{--Error Statements--}}
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                    {{--<li>{{ $error }}</li>--}}
                @endforeach
            </div>
        </div>
    @endif
    {{--End of Error Statements--}}

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h3>Become Coach!</h3>
            <hr>
            <form action="{{ route('create_coach') }}" method="POST">
                <div class="form-group {{ $errors->has('meno') ? 'has-error' : '' }}">
                    <label for="meno">Meno</label>
                    <input class="form-control" type="text" name="meno" id="meno" value="{{ Request::old('meno') }}"">
                </div>
                <div class="form-group {{ $errors->has('priezvisko') ? 'has-error' : '' }}">
                    <label for="priezvisko">Priezvisko</label>
                    <input class="form-control" type="text" name="priezvisko" id="priezvisko" value="{{ Request::old('priezvisko') }}"">
                </div>
                <div class="form-group {{ $errors->has('telefon') ? 'has-error' : '' }}">
                    <label for="telefon">Telefón (+421)</label>
                    <input class="form-control" type="text" name="telefon" id="telefon" value="{{ Request::old('telefon') }}"">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection