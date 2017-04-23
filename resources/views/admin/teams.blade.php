@extends('layouts.master_admin_new')

@section('title')
    Teams
@endsection

{{--@section('content')--}}
{{--Hello World!--}}
{{--@endsection--}}

@section('content')

    <div class="row"> {{--Statistics row--}}

        <div class="col-sm-12">
            <div class="row">

                <div class="col-sm-4"> {{--First Stat--}}
                    First Stat
                </div> {{--End of First Stat--}}

                <div class="col-sm-4"> {{--Second Stat--}}
                    Second Stat
                </div> {{--End of Second Stat--}}

                <div class="col-sm-4"> {{--Third Stat--}}
                    Third Stat
                </div> {{--End of Third Stat--}}

            </div>
        </div>

    </div> {{--End of Statistics row--}}

    <div class="row"> {{--Header row--}}

        <div class="col-xs-12">
            <div class="section-header">
                <h4>Settings</h4>
            </div>
        </div>

    </div> {{--End of Header row--}}

    <div class="row"> {{--Dates row--}}

        <div class="col-sm-12">
            <div class="row-header"> {{--Grey header with section name--}}
                <span class="row-heading">Dátumy</span>
            </div> {{--End of Grey header with section name--}}

            <form action="#" method="POST">
                <div class="row">

                    <div class="col-md-6">
                        <div class="row">

                            <div class="col-sm-6 row-inputs">
                                <label for="reg_teams">Registrácia tímov</label>
                                <input id="reg_teams" class="datepick" name="reg_teams" type="text">
                            </div>

                            <div class="col-sm-6 row-inputs">
                                <label for="reg_regions">Registrácia Regiónov</label>
                                <input id="reg_regions" class="datepick" name="reg_regions" type="text" placeholder="01/01/2017">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">

                            <div class="col-sm-6 row-inputs">
                                <label for="edit_teams">Úprava tímov</label>
                                <input id="edit_teams" class="datepick" name="edit_teams" type="text">
                            </div>

                            <div class="col-sm-6 row-inputs">
                                <label for="edit_members">Úprava členov tímu</label>
                                <input id="edit_members" class="datepick" name="edit_members" type="text">
                            </div>

                        </div>
                    </div>

                </div> {{--End of row--}}
                <button class="btn btn-success pull-right">Ulož zmeny</button>
            </form>
        </div> {{--End of col-sm-12--}}

    </div> {{--End of Dates row--}}

    <div class="row"> {{--Team IDs row--}}
        <div class="col-sm-12">

            <div class="row-header"> {{--Grey header with section name--}}
                <span class="row-heading">Tímové ID</span>
            </div> {{--End of Grey header with section name--}}

            <form action="">
                <div class="row">

                    <div class="col-md-6">
                        <div class="row">

                            <div class="col-sm-6 row-inputs">
                                <label for="id_from">Prideľovať ID Od</label>
                                <input name="id_from" id="id_from" type="text" value="1970">
                            </div>

                            <div class="col-sm-6 row-inputs">
                                <label for="id_to">Prideľovať ID Do</label>
                                <input name="id_to" id="id_to" type="text" value="1990">
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">

                            <div class="col-sm-6 row-inputs">
                                <label for="additional_id">Dodatočné ID</label>
                                <input name="additional_id" id="additional_id" type="text">
                            </div>

                            <div class="col-sm-6 row-inputs">
                                <span>Doposiaľ pridané</span>
                                <p>2001, 2002, 2003</p>
                            </div>

                        </div>
                    </div>

                </div> {{--End of row--}}
                <button class="btn btn-success pull-right">Ulož zmeny</button>
            </form>

        </div> {{--End of col-sm-12--}}
    </div> {{--End of Team IDs row--}}

    <div class="row"> {{--Tem editing row--}}
        <div class="col-sm-12">

            <div class="row-header"> {{--Grey header with section name--}}
                <span class="row-heading">Úprava tímu</span>
            </div> {{--End of Grey header with section name--}}

            <form action="">
                <div class="row">

                    <div class="col-sm-12"> {{--Team selection--}}
                        <div class="row">

                            <div class="col-sm-6 row-inputs">
                                <label for="team_select">Vyberte región</label>
                                <select name="team_select" id="team_select">
                                    <option value="BA">Bratislavský región</option>
                                    <option value="BA">Bratislavský región</option>
                                    <option value="BA">Bratislavský región</option>
                                    <option value="BA">Bratislavský región</option>
                                </select>
                            </div>

                            <div class="col-sm-6 row-inputs">
                                <label for="team_select">Vyberte tím</label>
                                <select name="team_select" id="team_select">
                                    <option value="T1">Najlepší tím sveta</option>
                                    <option value="T1">Najlepší tím sveta</option>
                                    <option value="T1">Najlepší tím sveta</option>
                                    <option value="T1">Najlepší tím sveta</option>
                                </select>
                            </div>

                        </div>
                    </div> {{--End of Team selection--}}

                    <div class="col-sm-6">
                        <div class="row-inputs">
                            <label for="team_id">ID Tímu</label>
                            <input name="team_id" id="team_id" type="text">
                        </div>

                        <div class="row-inputs">
                            <label for="team_name">Názov Tímu</label>
                            <input name="team_name" id="team_name" type="text">
                        </div>

                        <div class="row-inputs">
                            <label for="team_address">Adresa Tímu</label>
                            <input name="team_address" id="team_address" type="text" placeholder="Adresa tímu">
                        </div>

                        <div class="row-inputs">
                            <label for="team_org">Organizácia Tímu</label>
                            <input name="team_org" id="team_org" type="text" placeholder="Názov školy/organizácie">
                        </div>
                    </div>

                    <div class="col-sm-6">



                    </div>

                </div>  {{--End of row--}}
            </form>
            <button class="btn btn-success pull-right">Ulož zmeny</button>
        </div> {{--End of col-sm-12--}}
    </div> {{--End of Tem editing row--}}

@endsection