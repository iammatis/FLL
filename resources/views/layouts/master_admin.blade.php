<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    {{--<link rel="stylesheet" href="css/main.css">--}}
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="container-fluid">
        <div class="row"> {{--Statistics/IDs + Dates--}}

            <div class="col-md-6"> {{--Statistics + IDs--}}
                <div class="row"> {{--Statistics--}}

                    <div class="col-md-12" style="background-color: #7da8c3">
                        <h3>Statistics</h3>
                    </div>

                </div> {{--End of Statistics--}}

                <div class="row"> {{--Team IDs--}}

                    <div class="col-md-12" style="background-color: khaki">
                        <div class="box-heading">
                            <h3>Team IDs</h3>
                        </div>
                        <div class="box-body">
                            <form action="#" method="post">
                                <div class="form-inline">
                                    <label for="date_from">Od:</label>
                                    <input class="form-control" type="text" name="date_from" id="date_from">
                                    <label for="date_to">Do:</label>
                                    <input class="form-control" type="text" name="date_to" id="date_to">
                                </div>
                                <div class="form-group">
                                    <label for="additional_ids">Dodatocne ID (mimo intervalu):</label>
                                    <input class="form-control" type="text" name="additional_ids" id="additional_ids">
                                    <span class="box-info"><i class="fa fa-info-circle" aria-hidden="true"></i> oddelene ciarkou</span>
                                </div>
                            </form>
                        </div>
                    </div>

                </div> {{--End of Team IDs--}}
            </div> {{--End of Statistics + IDs--}}

            <div class="col-md-6"> {{--Dates--}}
                <div class="row"> {{--First Row of Dates--}}

                    <div class="col-sm-6">
                        <div class="row">

                            <div class="col-md-12" style="background-color: #8492af"> {{--I. Date Box--}}
                                <div class="box-heading">
                                    <h4>Registracia timov</h4>
                                </div>
                                <div class="box-body">
                                    <select name="" id="">
                                        <option value="">01</option>
                                    </select> /
                                    <select name="" id="">
                                        <option value="">01</option>
                                    </select> /
                                    <select name="" id="">
                                        <option value="">2017</option>
                                    </select>
                                </div>
                                <div class="box-button text-center">
                                    <button class="btn btn-default">Ulozit</button>
                                </div>
                            </div> {{--End of I. Date Box--}}

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="row">

                            <div class="col-md-12" style="background-color: #FA6B41"> {{--II. Date Box--}}
                                <div class="box-heading">
                                    <h4>Registracia do regionov</h4>
                                </div>
                                <div class="box-body">
                                    <select name="" id="">
                                        <option value="">01</option>
                                    </select> /
                                    <select name="" id="">
                                        <option value="">01</option>
                                    </select> /
                                    <select name="" id="">
                                        <option value="">2017</option>
                                    </select>
                                </div>
                                <div class="box-button text-center">
                                    <button class="btn btn-default">Ulozit</button>
                                </div>
                            </div> {{--End of II. Date Box--}}

                        </div>
                    </div>

                </div> {{--End of First Row of Dates--}}

                <div class="row"> {{--Second Row of Dates--}}

                    <div class="col-sm-6">
                        <div class="row">

                            <div class="col-md-12" style="background-color: linen "> {{--III. Date Box--}}
                                <div class="box-heading">
                                    <h4>Upravovanie timov</h4>
                                </div>
                                <div class="box-body">
                                    <select name="" id="">
                                        <option value="">01</option>
                                    </select> /
                                    <select name="" id="">
                                        <option value="">01</option>
                                    </select> /
                                    <select name="" id="">
                                        <option value="">2017</option>
                                    </select>
                                </div>
                                <div class="box-button text-center">
                                    <button class="btn btn-default">Ulozit</button>
                                </div>
                            </div> {{--End of III. Date Box--}}

                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="row">

                            <div class="col-md-12" style="background-color: powderblue"> {{--IV. Date Box--}}
                                <div class="box-heading">
                                    <h4>Upravovanie clenov</h4>
                                </div>
                                <div class="box-body">
                                    <select name="" id="">
                                        <option value="">01</option>
                                    </select> /
                                    <select name="" id="">
                                        <option value="">01</option>
                                    </select> /
                                    <select name="" id="">
                                        <option value="">2017</option>
                                    </select>
                                </div>
                                <div class="box-button text-center">
                                    <button class="btn btn-default">Ulozit</button>
                                </div>
                            </div> {{--End of IV. Date Box--}}

                        </div>
                    </div>

                </div> {{--End of Second Row of Dates--}}
            </div> {{--End of Dates--}}

        </div> {{--End of Statistics/IDs + Dates--}}

        <div class="row"> {{--Team Edit + #Teams--}}

            <div class="col-md-6"> {{--Team Editing--}}
                <div class="row">

                    <div class="col-md-12" style="background-color: aquamarine">
                        <h3>Team Editing</h3>
                        <div class="box-body">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>Nazov Timu</td>
                                    <td>Testovaci nazov</td>
                                </tr>
                                <tr>
                                    <td>Nazov Timu</td>
                                    <td>Testovaci nazov</td>
                                </tr>
                                <tr>
                                    <td>Nazov Timu</td>
                                    <td>Testovaci nazov</td>
                                </tr>
                                <tr>
                                    <td>Nazov Timu</td>
                                    <td>Testovaci nazov</td>
                                </tr>
                                <tr>
                                    <td>Nazov Timu</td>
                                    <td>Testovaci nazov</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div> {{--End of Team Editing--}}

            <div class="col-md-6"> {{--Number of teams in region--}}
                <div class="row">

                    <div class="col-md-12" style="background-color: #9b8a30">
                        <h3>Number of teams/region</h3>
                    </div>

                </div>
            </div> {{--End ofNumber of teams in region--}}

        </div> {{--End of Team Edit + #Teams--}}

    </div> {{--End of Container-Fluid--}}
</body>
</html>