@extends('admin.layouts.master')

@section('title') Správa turnaja @endsection

@section('styles')
    <link rel="stylesheet" href="{{ URL::asset('jquery-ui/jquery-ui.min.css') }}"/>
@endsection

@section('header-icon') pe-7s-tools @endsection
@section('header-title') Správa turnaja @endsection

@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')
    @include('admin.includes.message_block')

    <div class="row">
        <!--===================================
        =            Dates Section            =
        ====================================-->
        
        <div class="col-md-6">
            <div class="panel panel-filled">

                <div class="panel-heading">
                    Nastavenie dátumov pre aktuálny ročník
                </div>

                <form action="{{ route('dates/patch') }}" method="POST">
                    {{ method_field('PATCH') }} 

                    <div class="panel-body">
                        @foreach($dates as $date)
                            <div class="row" id="dates" style="border-bottom: 1px solid #515563; margin-bottom: 15px">
    
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-12 form-group">
                                            <label for="name{{$date->id}}" class="sr-only">{{$date->name}}</label>
                                            <input value="{{$date->name}}" name="name{{$date->id}}" type="text" class="form-control">
                                        </div>

                                        <div class="col-xs-12 form-group">
                                            <label for="info{{$date->id}}" class="sr-only">{{$date->info}}</label>
                                            <input value="{{$date->info}}" name="info{{$date->id}}" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-xs-12 form-group">
                                            <label for="date{{$date->id}}" class="sr-only">{{$date->date}}</label>
                                            <input value="{{Carbon\Carbon::parse($date->date)->format('d/m/Y')}}" name="date{{$date->id}}" type="text" class="form-control dPicker">
                                        </div>

                                        <div class="col-xs-12 form-group">
                                            <a href="#" class="btn btn-w-md btn-danger btn-block">Zmazať dátum</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-xs-12 form-group">
                                <label for="newName" class="sr-only">Názov dátumu</label>
                                <input placeholder="Názov dátumu" name="newName" type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="newName" class="sr-only">Dátum slovom</label>
                                <input placeholder="Dátum slovom" name="newInfo" type="text" class="form-control">
                            </div>

                            <div class="col-lg-6 form-group">
                                <label for="newDate" class="sr-only">Dátum</label>
                                <input placeholder="Dátum" name="newDate" type="text" class="form-control dPicker">
                            </div>
                        </div>

                    </div>

                    <div class="panel-footer">
                        <div>
                            <button class="btn btn-success btn-block">Uložiť zmeny</button>
                        </div>
                    </div>

                    {{ csrf_field() }}
                </form>
            </div>
        </div> <!--====  End of Dates Section  ====-->

        <!--=====================================
        =            Regions Section            =
        ======================================-->

        <div class="col-md-6">
            <div class="panel panel-filled">
                
                <div class="panel-heading">
                    Nastavenie regiónov pre aktuálny ročník
                </div>

                <form action="{{ route('regions/patch') }}" method="POST">
                    {{ method_field('PATCH') }} 
                    
                    <div class="panel-body">
                        @foreach($regions as $region)
                            <div class="row">
                                <div class="col-xs-10 form-group">
                                    <label for="region{{$region->id}}" class="sr-only">{{$region->name}}</label>
                                    <input type="text" value="{{$region->name}}" name="region{{$region->id}}" class="form-control">
                                </div>
                                <div class="col-xs-1 form-group">
                                    <div class="checkbox checkbox-success" style="margin-top: 7px">
                                        <input name="check{{$region->id}}" class="styled" type="checkbox" @if($region->active) checked="" @endif>
                                        <label for="check{{$region->id}}"></label>
                                    </div>
                                </div>
                                <div class="col-xs-1 form-group">
                                    <a href="{{ route('regions/delete', ['region' => $region->id]) }}" style="color: #db524b; line-height: 34px;"><i class="fa fa-ban"></i></a>
                                </div>
                            </div>
                        @endforeach

                        <div class="row">
                            <div class="col-xs-10 form-group">
                                <label for="newRegion" class="sr-only">Nový Región</label>
                                <input type="text" name="newRegion" placeholder="Nový región" class="form-control">
                            </div>
                            <div class="col-xs-1 form-group">
                                <div class="checkbox checkbox-success" style="margin-top: 7px">
                                    <input name="newCheck" class="styled" type="checkbox">
                                    <label for="newCheck"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel-footer">
                        <div>
                            <button class="btn btn-success btn-block">Uložiť zmeny</button>
                        </div>
                    </div>

                    {{ csrf_field() }}
                </form>    

            </div>
        </div> <!--====  End of Regions Section  ====-->

    </div>

    <!--===========================================
    =            New Tournamet Section            =
    ============================================-->

    <div class="row">
        <div class="panel panel-filled panel-c-danger">

            <div class="panel panel-heading">
                Ukončenie starého a tvorba nového ročníka
            </div>

            <form action="new" method="POST">

                <div class="panel-body">
                    <div class="col-xs-12 form-group">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum eaque, maxime excepturi sit ab, iusto, deleniti eligendi eius aspernatur dolores odit, temporibus dicta. Nam iste, dolorum rem. Ipsa, omnis? Fuga.
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6 form-group">
                                <label for="year" class="sr-only">Ročník</label>
                                <input type="text" name="year" placeholder="napr. 2017" class="form-control" required>
                            </div>
                            <div class="col-xs-6 form-group">
                                <button class="btn btn-danger btn-block">Začať nový ročník</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{ csrf_field() }}
            </form>
        </div>
    </div> <!--====  End of New Tournamet Section  ====-->

@endsection

@section('footer')
    <script src="{{ URL::asset('jquery-ui/jquery-ui.min.js') }}"></script>
    
    <script>
        $(function () {
            $(".dPicker").datepicker({
                dateFormat: 'dd/mm/yy'
            });
        });
    </script>

@endsection