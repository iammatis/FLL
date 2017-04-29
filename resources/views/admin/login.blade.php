<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>Login</title>

    {{-- Neccesary on every site ! --}}
    <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('vendor/toastr/toastr.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/pe-icons/pe-icon-7-stroke.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/pe-icons/helper.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>

</head>
<body class="blank">

<!-- Wrapper-->
<div class="wrapper">

    <!-- Main content-->
    <section class="content">
        @include('admin.includes.message_block')

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

</div>
<!-- End wrapper-->

<footer>
    {{-- Neccessary on every site ! --}}
    <script src="{{ URL::asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/pacejs/pace.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('vendor/toastr/toastr.min.js') }}"></script>
</footer>

<!-- App scripts -->
<script src="{{ URL::asset('js/luna.js') }}"></script>

<!-- Toastr scripts -->
{!! Toastr::render() !!}

</body>
</html>