@extends('web.layouts.master')

@section('title') Index @endsection

@section('content')

<section class="p-0">
	<div class="container">
	    <div class="carousel clients-carousel" data-carousel-col="5">
			<div> <a href="#"><img alt="" src="{{ URL::asset('images/sponsors/anasoft40px.png') }}"> </a> </div>
			<div> <a href="#"><img alt="" src="{{ URL::asset('images/sponsors/logo_nadacia_eset.png') }}"> </a> </div>
			<div> <a href="#"><img alt="" src="{{ URL::asset('images/sponsors/pcrevue100px.png') }}"> </a> </div>
			<div> <a href="#"><img alt="" src="{{ URL::asset('images/sponsors/profesia80px.png') }}"> </a> </div>
			<div> <a href="#"><img alt="" src="{{ URL::asset('images/sponsors/swan.png') }}"> </a> </div>
	    </div>
	</div>
</section>

	<!-- NEWS GRID -->
	<section class="p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3>Registrácia na FLL 2017/2018 už otvorená!</h3>
					<p>Témou 10. ročníka FLL je Hydro Dynamics</p>
					<div class="seperator"><i class="fa fa-flag"></i></div>
					<ul>
						<li>Si vo veku od 9 do 16 rokov?</li>
						<li>Chceš sa zabaviť a zároveň naučiť, ako sa stavajú a programujú LEGO roboty?</li>
						<li>Chceš si vysúšať, aké je to byť výskumníkom?</li>
						<li>Vieš dať dokopy 3 až 10-členný tím?</li>
						<li>Má tvoj tím trénera - dospeláka, ktorý vám bude pomáhať?</li>
					</ul>
					<div>
			            <a href="#" class="button btn-block red-light button-3d rounded text-center">Prihlás sa!</a>
			        </div>
				</div>
				<div class="col-md-6">
					<h3>First Lego League 2015/2016</h3>
					<iframe width="1280" height="720" src="https://www.youtube.com/embed/av0qwJ10DOw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- END: NEWS GRID -->

		<!-- HIGHTLIGHTS -->
	<section class="p-t-0 p-b-40">
		<div class="container">
			<div class="heading-fancy heading-line">
				<h4>NOVINKY</h4></div>
			<div class="row">

				<div class="col-md-5">
					<div class="post-thumbnail">
						<div class="post-thumbnail-entry">
							<div class="post-thumbnail-content">
								<h3><a href="{{ route('news/show', $recent) }}">{{$recent->title}}</a></h3>
								<p>{!! strip_tags(str_limit($recent->text, 700), '<p><a><em><strong>') !!}</p>
								<span class="post-date post-date-update">
									<i class="fa fa-clock-o"></i>
									{{$recent->created_at->diffForHumans()}}
								</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-7">
					<div class="row">
						<div class="col-md-6">
							<div class="post-thumbnail-list">

								@foreach($first as $post)
									<div class="post-thumbnail-entry">
										<div class="post-thumbnail-content">
											<h4><a href="{{ route('news/show', $post) }}">{{str_limit($post->title, 40)}}</a></h4>
											<span class="post-text">{!! strip_tags(str_limit($post->text, 100), '<p><a><em><strong>') !!}</span>
											<span class="post-date post-date-update">
												<i class="fa fa-clock-o"></i>
												{{$post->created_at->diffForHumans()}}
											</span>
										</div>
									</div>
								@endforeach

							</div>
						</div>

						<div class="col-md-6">
							<div class="post-thumbnail-list">

								@foreach($second as $post)
									<div class="post-thumbnail-entry">
										<div class="post-thumbnail-content">
											<h4><a href="{{ route('news/show', $post) }}">{{str_limit($post->title, 40)}}</a></h4>
											<span class="post-text">{!! str_limit($post->text, 100) !!}</span>
											<span class="post-date post-date-update">
												<i class="fa fa-clock-o"></i>
												{{$post->created_at->diffForHumans()}}
											</span>
										</div>
									</div>
								@endforeach

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<!-- END: HIGHTLIGHTS -->

	<!-- CALL TO ACTION -->
	<div class="jumbotron jumbotron-fullwidth background-colored text-light m-b-0">
		<div class="container">
			<h3>Chceš si to vyskúšať aj ty?</h3>
			<p>Každý tím zaregistruje tréner, ktorý má aspoň 18 rokov.</p>
			<a href="{{route('user/register')}}" class="button transparent rounded"><span>Registrácia trénera</span></a>
		</div>
	</div>
		<!-- END: CALL TO ACTION -->
@endsection
