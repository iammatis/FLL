@extends('web.layouts.master')

@section('title') Regionálni organizátori @endsection

@section('content')

<section class="content">
	<div class="container">

		<div class="hr-title hr-long center"><abbr>Regionálni organizátori FLL 2016/2017</abbr> </div>

		<div class="row">
			<div class="col-xs-12 col-sm-offset-1 p-b-20">
				<p>Regionálne turnaje organizujeme v roku 2016/2017 v spolupráci s regionálnymi partnermi v 7 mestách Slovenska:</p>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-7 col-sm-offset-1">
				<div class="row">
					<div class="col-xs-12"><h5>Banská Bystrica</h5></div>
					<div class="col-xs-12"><a href="http://www.svs.edu.sk/">Školské výpočtové stredisko (CVTI SR)</a></div>
					<div class="col-xs-12"><small>Kontaktná osoba: Mgr. Stanislav Slačka</small></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="pull-right"> <img class="imgsize" src="{{ URL::asset('images/regions/logo_cvti.png') }}" alt="Logo CVTI"> </div>
			</div>
			<div class="seperator p-t-20"></div>
		</div>

		<div class="row">
			<div class="col-sm-7 col-sm-offset-1">
				<div class="row">
					<div class="col-xs-12"><h5>Bratislava</h5></div>
					<div class="col-xs-12"><a href="http://www.fmph.uniba.sk/">Fakulta matematiky, fyziky a informatiky Univerzity Komenského</a></div>
					<div class="col-xs-12"><small>Kontaktná osoba: Mgr. Pavel Petrovič, PhD.</small></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="pull-right"> <img class="imgsize" src="{{ URL::asset('images/regions/Logo_fmfi.gif') }}" alt="Logo FMFI"> </div>
			</div>
			<div class="seperator p-t-20"></div>
		</div>

		<div class="row">
			<div class="col-sm-7 col-sm-offset-1">
				<div class="row">
					<div class="col-xs-12"><h5>Košice</h5></div>
					<div class="col-xs-12"><a href="http://upjs.sk/prirodovedecka-fakulta/">Prírodovedecká fakulta, Univerzita Pavla Jozefa Šafárika v KošiciachPF UPJŠ</a></div>
					<div class="col-xs-12"><small>Kontaktná osoba: RNDr. Róbert Hajduk, PhD.</small></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="pull-right"><img class="imgsize" src="{{ URL::asset('images/regions/logo_upjs.png') }}" alt="Logo UPJS"> </div>
			</div>
			<div class="seperator p-t-20"></div>
		</div>

		<div class="row">
			<div class="col-sm-7 col-sm-offset-1">
				<div class="row">
					<div class="col-xs-12"><h5>Žiar nad Hronom</h5></div>
					<div class="col-xs-12"><a href="http://www.cvczh.edu.sk/">Centrum voľného času v Žiari nad Hronom</a></div>
					<div class="col-xs-12"><small>Kontaktná osoba: Mgr. Helena Gáfriková</small></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="pull-right"><img class="imgsize" src="{{ URL::asset('images/regions/logo_ziar.png') }}" alt="Logo Ziar"> </div>
			</div>
			<div class="seperator p-t-20"></div>
		</div>

		<div class="row">
			<div class="col-sm-7 col-sm-offset-1">
				<div class="row">
					<div class="col-xs-12"><h5>Žilina</h5></div>
					<div class="col-xs-12"><a href="http://www.fri.uniza.sk/">Fakulta riadenia a informatiky Žilinskej Univerzity</a></div>
					<div class="col-xs-12"><small>Kontaktná osoba: Ing. Michal Kochláň</small></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="pull-right"><img class="imgsize" src="{{ URL::asset('images/regions/FRI_Logo.jpg') }}" alt="Logo FRI"> </div>
			</div>
			<div class="seperator p-t-20"></div>
		</div>

		<div class="row">
			<div class="col-sm-7 col-sm-offset-1">
				<div class="row">
					<div class="col-xs-12"><h5>Petržalka</h5></div>
					<div class="col-xs-12"><a href="http://www.paneurouni.com/sk/">Paneurópska vysoká škola</a></div>
					<div class="col-xs-12"><small>Kontaktná osoba: Ing. Juraj Štefanovič, PhD.</small></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="pull-right"><img class="imgsize" src="{{ URL::asset('images/regions/fipaeurouni.png') }}" alt="Logo PANEU"> </div>
			</div>
			<div class="seperator p-t-20"></div>
		</div>

		<div class="row">
			<div class="col-sm-7 col-sm-offset-1">
				<div class="row">
					<div class="col-xs-12"><h5>Poprad</h5></div>
					<div class="col-xs-12"><a href="http://ssosta.edupage.org/">Súkromná stredná odborná škola Poprad</a></div>
					<div class="col-xs-12"><small>Kontaktná osoba: Ing. Vladislav Mitický</small></div>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="pull-right"><img class="imgsize" src="{{ URL::asset('images/regions/logo_tatranska.png') }}" alt="Logo Tatranska"> </div>
			</div>
			<div class="seperator p-t-20"></div>
		</div>

    </div>
</section>

@endsection