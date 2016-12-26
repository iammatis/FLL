@extends('layouts.master')

@section('title')
    Welcome!
@endsection

@section('content')
    {{--Error Statements--}}
    @if(count($errors) > 0)
    <div class="row">
        <div class="col-md-6">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    {{--End of Error Statements--}}

    {{--Log In and Sign Up Forms--}}
    <div class="row">
        <div class="col-md-6">
            <h3>Log In</h3>
            <form action="{{ route('signin') }}" method="POST">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email value="{{ Request::old('email') }}"">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Email</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                {{ csrf_field() }}
            </form>
        </div>
        <div class="col-md-6">
            <h3>Sign Up</h3>
            <form action="{{ route('signup') }}" method="POST">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">Your Email</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Your Password</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <div class="form-group {{ $errors->has('retype_password') ? 'has-error' : '' }}">
                    <label for="retype_password">Retype Your Password</label>
                    <input class="form-control" type="password" name="retype_password" id="retype_password" value="{{ Request::old('retype_password') }}">
                </div>
                <button type="submit" class="btn btn-primary">Sign up</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>
@endsection