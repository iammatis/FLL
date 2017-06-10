@role('user')
<div role="alert" class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span> </button>
    Momentálne ste obyčajný užívateľ, pokiaľ chcete založiť tím alebo sa stať coachom, postupujte podľa pokynov nižšie.
</div>

<div class="jumbotron jumbotron-border">
    <h3>Ste coachom?</h3>
    <p>Na to aby ste mohli byť coachom musíte vyplniť zopár dodatočných informácií!</p>
    <a class="button large blue button-3d rounded" href="{{ route('coach/create') }}"><span>Som coach!</span></a>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="hr-title hr-long center"><abbr>Váš profil</abbr> </div>
        <h4>{{$user->full_name}} <small> Meno a Priezvisko</small></h4>
        <h4>{{$user->email}} <small> E-mail</small></h4>

        <div class="text-center">
            <a href="{{ route('user/show', $user) }}" class="button btn-block shark button-3d rounded text-center">Upraviť profil</a>
            <a href="{{ route('user/pass') }}">Zmena hesla</a>
        </div>

    </div>
</div>
@endrole