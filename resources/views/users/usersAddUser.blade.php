@extends('layouts.master_dashboard')

@section('title')
    Pridanie užívateľa
@endsection

@section('header-icon')
    pe-7s-add-user
@endsection

@section('header-title')
    Pridanie užívateľa
@endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content-dashboard')
    @include('includes.message_block')

    <!-- Teams Table -->
    <div class="panel panel-filled">
        <div class="panel-body">
            <p>
                {{--Vyplňte prosím všetky polia!--}}
            </p>
            <form action="{{route('signup')}}" id="loginForm" method="POST">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="row">

                            <div class="form-group col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="fullName">Meno a Priezvisko</label>
                                <input type="text" id="full_name" class="form-control" name="full_name" value="{{ Request::old('full_name') }}">
                            </div>

                            <div class="form-group col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="email">Emailová Adresa</label>
                                <input type="text" id="email" class="form-control" name="email" value="{{ Request::old('email') }}">
                            </div>

                            <div class="form-group col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="rola">Rola užívateľa</label>
                                <select class="select2_rola form-control" style="width: 100%" id="rola" name="rola">
                                    <option value="1">Rola 1</option>
                                    <option value="2">Rola 2</option>
                                    <option value="3">Rola 3</option>
                                    <option value="4">Rola 4</option>
                                    <option value="5">Rola 5</option>
                                </select>
                                <span class="help-block small">
                                    <a href="#" data-toggle="modal" data-target="#vysvetlivky">Vysvetlivky k rolám</a>
                                </span>
                            </div>

                            <div class="modal fade" id="vysvetlivky" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header text-center">
                                            <h4 class="modal-title">Použivateľské role</h4>
                                            <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            </small>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <h4 class="m-t-xs">
                                                        Administrátor
                                                    </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi eligendi in laboriosam numquam repellendus, sit voluptates? Aliquid deserunt dignissimos doloribus id, iusto nobis officia praesentium rem saepe sequi ullam?</p>
                                                </div>

                                                <div class="col-xs-12">
                                                    <h4 class="m-t-xs">
                                                        Administrátor
                                                    </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi eligendi in laboriosam numquam repellendus, sit voluptates? Aliquid deserunt dignissimos doloribus id, iusto nobis officia praesentium rem saepe sequi ullam?</p>
                                                </div>

                                                <div class="col-xs-12">
                                                    <h4 class="m-t-xs">
                                                        Administrátor
                                                    </h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque commodi eligendi in laboriosam numquam repellendus, sit voluptates? Aliquid deserunt dignissimos doloribus id, iusto nobis officia praesentium rem saepe sequi ullam?</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Zavrieť</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">

                            <div class="form-group col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="password">Heslo</label>
                                <input type="password" id="password" class="form-control" name="password">
                            </div>

                            <div class="form-group col-xs-12 {{ $errors->has('password') ? 'has-error' : '' }}">
                                <label for="repeatpassword">Heslo znova</label>
                                <input type="password" id="repeatpassword" class="form-control"  name="repeatpassword">
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-accent">Pridať Užívateľa</button>
                </div>
                {{ csrf_field() }}
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(".select2_rola").select2();
        })
    </script>

@endsection