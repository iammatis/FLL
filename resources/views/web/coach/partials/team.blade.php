<div class="row">
    <div class="col-md-6">
        <div class="hr-title hr-long center"><abbr>Váš profil</abbr> </div>

        <dl class="dl-horizontal">
            <dt>Tel. číslo:</dt>
            <dd>{{$user->coach->phone}}</dd>
            <dt>Adresa:</dt>
            <dd>{{$user->coach->address}}</dd>
            <dt>Tím:</dt>
            <dd>{{$team->name}}</dd>
            <dt>Adresa tímu:</dt>
            <dd>{{$team->address}}</dd>
        </dl>

    </div>
    <div class="col-md-6">
        <div class="hr-title hr-long center"><abbr>Váš tím</abbr> </div>
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
            <a href="{{ route('team/show', $team) }}" class="button btn-block shark button-3d rounded text-center">Upraviť</a>
        </div>
    </div>
</div>