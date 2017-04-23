@extends('layouts.master')

@section('title')
    Login
@endsection

@section('body')
    "blank"
@endsection

@section('content')

    <!-- Main content-->
    <section class="content">
        @include('includes.message_block')

        <div class="container-center animated slideInDown">


            <div class="view-header">
                <div class="header-icon">
                    <i class="pe page-header-icon pe-7s-unlock"></i>
                </div>
                <div class="header-title">
                    <h3>Prihlásenie</h3>
                    <small>
                        Prosím zadajte svoje meno a heslo.
                    </small>
                </div>
            </div>

            <div class="panel panel-filled">
                <div class="panel-body">
                    <form action="{{ route('signin') }}" id="loginForm" method="POST">
                        <div class="form-group" {{ $errors->has('email') ? 'has-error' : '' }}>
                            <label class="control-label" for="email">Meno</label>
                            <input type="text" placeholder="email@gmail.com" title="Prosím zadajte svoje meno" value="{{ Request::old('email') }}" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group" {{ $errors->has('password') ? 'has-error' : '' }}>
                            <label class="control-label" for="password">Heslo</label>
                            <input type="password" title="Prosím zadajte svoje heslo" placeholder="******" value="{{ Request::old('password') }}" name="password" id="password" class="form-control">
                        </div>
                        <div>
                            <button class="btn btn-accent">Login</button>
                        </div>
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>

        </div>
    </section>
    <!-- End main content-->

@endsection