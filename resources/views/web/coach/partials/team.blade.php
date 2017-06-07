<div class="row">
    <div class="col-md-6">
        <div class="hr-title hr-long center"><abbr>Váš profil</abbr> </div>

        <h4>{{$user->full_name}} <small> Meno a Priezvisko</small></h4>
        <h4>{{$user->coach->phone}} <small> Telefónne číslo</small></h4>
        <h4>{{$user->coach->address}} <small> Adresa</small></h4>
        <h4>{{$user->email}} <small> E-mail</small></h4>

        <div class="text-center">
            <a href="{{ route('coach/show', $user) }}" class="button btn-block shark button-3d rounded text-center">Upraviť profil</a>
            <a href="{{ route('user/pass') }}">Zmena hesla</a>
        </div>

    </div>

    <div class="col-md-6">
        <div class="hr-title hr-long center"><abbr>Váš tím</abbr> </div>

        <div class="row">
            <div class="col-xs-12">
                <h4>{{$team->name}} <small> Názov tímu</small></h4>
                <h4>{{$team->organization}} <small> Organizácie tímu</small></h4>
                <h4>{{$team->city}} <small> Mesto organizácie tímu</small></h4>
                <h4>{{$team->address}} <small> Adresa organizácie tímu</small></h4>
            </div>

            <div class="col-xs-12">
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Meno a Priezvisko</th>
                                <th>Dátum narodenia</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($members as $member)
                                <tr>
                                    <td>{{$member->name}}</td>
                                    <td>{{Carbon\Carbon::parse($member->birth)->format('d/m/Y')}}</td>
                                    <td>
                                        <a class="button small red icon-left" href="{{ route('member/delete', $member) }}" style="margin: 0;">
                                            <span><i class="fa fa-ban"></i>Zmazať</span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <a href="{{ route('team/show', $team) }}" class="button btn-block shark button-3d rounded text-center">Upraviť tím</a>
                </div>

            </div>  {{-- End col-xs-12 --}}
        </div>

    </div>
</div>