@extends('layouts.master_dashboard')

@section('title')
    Zasielanie stavebníc
@endsection

@section('header-icon')
    pe-7s-mail-open
@endsection

@section('header-title')
    Zasielanie stavebníc
@endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content-dashboard')

    <!-- Teams Table -->
    <div class="panel panel-filled">
        <div class="panel-body">
            <p>
                {{--Vyplňte prosím všetky polia!--}}
            </p>
            <form action="index.html" id="loginForm">
                <div class="row">

                    <div class="col-lg-6">
                        <div class="row">

                            <div class="form-group col-md-12">
                                <label for="name">Užívateľské meno</label>
                                <input type="text" value="" id="name" class="form-control" name="name">
                                {{--<span class="help-block small">Your unique username to app</span>--}}
                            </div>

                            <div class="form-group col-xs-12">
                                <label for="fullName">Meno a Priezvisko</label>
                                <input type="text" value="" id="fullName" class="form-control" name="fullName">
                                {{--<span class="help-block small">Your address email to contact</span>--}}
                            </div>

                            <div class="form-group col-xs-12">
                                <label for="email">Emailová Adresa</label>
                                <input type="text" value="" id="email" class="form-control" name="email">
                                {{--<span class="help-block small">Your address email to contact</span>--}}
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">

                            <div class="form-group col-xs-12">
                                <label for="password">Heslo</label>
                                <input type="password" value="" id="password" class="form-control" name="password">
                                {{--<span class="help-block small">Your hard to guess password</span>--}}
                            </div>

                            <div class="form-group col-xs-12">
                                <label for="repeatpassword">Heslo znova</label>
                                <input type="password" value="" id="repeatpassword" class="form-control"
                                       name="repeatpassword">
                                {{--<span class="help-block small">Please repeat your pasword</span>--}}
                            </div>

                            <div class="form-group col-xs-12">
                                <label for="rola">Rola užívateľa</label>
                                <select class="select2_rola form-control" style="width: 100%" id="rola" name="rola">
                                    <option value="1">Rola 1</option>
                                    <option value="2">Rola 2</option>
                                    <option value="3">Rola 3</option>
                                    <option value="4">Rola 4</option>
                                    <option value="5">Rola 5</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div>
                    <button class="btn btn-accent">Pridať Užívateľa</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function(){
            $(".select2_rola").select2();
        })
    </script>

@endsection