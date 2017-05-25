@extends('admin.layouts.master')

@section('title') Pridanie užívateľa @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('vendor/select2/css/select2.min.css') }}"/>
@endsection

@section('header-icon') pe-7s-add-user @endsection
@section('header-title') Pridanie užívateľa @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')
    @include('admin.includes.message_block')

    <!-- Teams Table -->
    <div class="panel panel-filled">
        <div class="panel-body">
            <p>
                {{--Vyplňte prosím všetky polia!--}}
            </p>
            <form action="{{route('signupAdmin')}}" id="loginForm" method="POST">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="row">

                            <div class="form-group col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="fullName">Meno a Priezvisko</label>
                                <input type="text" id="full_name" class="form-control" name="full_name" value="{{ Request::old('full_name') }}" required>
                            </div>

                            <div class="form-group col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="email">Emailová Adresa</label>
                                <input type="text" id="email" class="form-control" name="email" value="{{ Request::old('email') }}" required>
                            </div>

                            <div class="form-group col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="rola">Rola užívateľa</label>
                                <select class="select2_rola form-control" style="width: 100%" id="rola" name="rola">
                                    @foreach ($roles as $role)
                                        <option value="{{$role->name}}">{{$role->display_name}}</option>
                                    @endforeach
                                </select>
                                <span class="help-block small">
                                    <a href="#" data-toggle="modal" data-target="#vysvetlivky">Vysvetlivky k rolám</a>
                                </span>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">

                            <div class="form-group col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="password">Heslo</label>
                                <input type="password" id="password" class="form-control" name="password" required>
                            </div>

                            <div class="form-group col-xs-12 {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                <label for="password_confirmation">Heslo znova</label>
                                <input type="password" id="password_confirmation" class="form-control"  name="password_confirmation" required>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-accent">Pridať Užívateľa</button>
                </div>
                {{ csrf_field() }}
            </form>

            @include('admin.modals.rolesShow')
        </div>
    </div>
@endsection

@section('footer')
    <script src="{{ URL::asset('vendor/select2/js/select2.js') }}"></script>

    <script>
        $(document).ready(function(){
            $(".select2_rola").select2();
        })
    </script>
@endsection