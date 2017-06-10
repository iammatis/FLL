@extends('web.layouts.master')

@section('title') Nastavenia @endsection

@section('styles')
   <link rel="stylesheet" href="{{ URL::asset('vendor/toastr/toastr.min.css') }}"/>
@endsection

@section('content')

<section class="content">
	<div class="container">
        <div class="post-content post-content-single post-modern">
            <div class="post-item" style="padding-left: 0">
                <div class="post-content-details">

                    <div class="post-title">
                        <h2>Vitajte, {{$user->full_name}}!</h2>
                    </div>

                    <div class="post-description">
                        <!--===============================
                        =            User Role            =
                        ================================-->
                        
                        @include('web.coach.partials.user')
                        
                        <!--====  End of User Role  ====-->

                        @role('coach')
                            @if(!empty($tournament))
                                <div class="jumbotron background-colored text-light">
                                    <h3>Úspešne registrovaný!</h3>
                                    <p>Vy a váš tím {{$team->name}} ste zaregistrovaný na na turnaj pre ročník {{$tournament->year}}. Potrebné informácie pre tento ročník nájdete cez menu Turnaj {{$tournament->year}} hore.</p>
                                </div>

                                <!--===================================
                                =            Team Settings            =
                                ====================================-->
                                
                                @include('web.coach.partials.team')

                                <!--====  End of Team Settings  ====-->

                            @elseif(!empty($team))
                                <div class="row">
                                    <div class="jumbotron jumbotron-border">
                                        <div id="registration">
                                            <h3>Registrácia na turnaj!</h3>
                                            @if(!$fll) {{-- Dosli FLL ID --}}
                                                <p>V tomto momente je registrácia pozastavená, ak tento problém nie je v krátkom čase opravený, prosím kontaktujte Mgr. Pavla Petroviča</p>
                                            @else
                                            <p>Momentálne beží registrácia na turnaj, ak sa chcete so svojím tímom zaregistrovať, prosím pokračujte kliknutím na odkaz.</p>
                                            <a class="button large blue button-3d" href="#">Registrovať</a>
                                            @endif
                                        </div>

                                        <div class='row' id="regForm" hidden>
                                            <div class='m-20' style='display: inline; text-align: center;'>
                                                <form method='POST' action='{{ route('tournament/register', $team) }}' class='form-inline'>
                                                    {{csrf_field()}}
                                                    <label for='tournament'>Registrácia na turnaj</label>
                                                    <div class='form-group m-10'>
                                                        <select class='form-control' style='height: 46px;min-width: 160px; margin-right: 10px;' name='tournament'>
                                                            @foreach ($regions as $region)
                                                                <option value="{{$region->id}}">{{$region->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class='form-group'>
                                                        <button class='btn btn-primary' type='submit'>Registrovať</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--===================================
                                =            Team Settings            =
                                ====================================-->
                                
                                @include('web.coach.partials.team')

                                <!--====  End of Team Settings  ====-->
                            @else
                                <div role="alert" class="alert alert-info alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
                                    Ste trénerom! Pokiaľ chcete založiť tím, postupujte podľa pokynov nižšie.
                                </div>

                                <div class="jumbotron jumbotron-border">
                                    <h3>Chcete založiť tím?</h3>
                                    <p>Od úspešného založenia tímu vás delí už len pár klikov!</p>
                                    <a class="button large blue button-3d rounded" href="{{ route('team/create') }}"><span>Založiť tím!</span></a>
                                </div>
                            @endif

                        @endrole
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="row"></div>

<script>
    $("#registration a").click(function(event) {
        $("#registration").prop("hidden", true);
        $("#regForm").prop("hidden", false);
    });
</script>

@endsection
