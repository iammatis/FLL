@extends('web.layouts.master')

@section('title') Index @endsection

@section('content')

	<!-- NEWS GRID -->
	<section class="p-t-40 p-b-40">
		<div class="container">
			<div class="grid-articles">
				<article class="post-entry">
					<a href="#" class="post-image"><img alt="" src="{{ URL::asset('images/1.jpg') }}"></a>
					<div class="post-entry-overlay">
						<div class="post-entry-meta">
							<div class="post-entry-meta-category">
								<span class="label label-danger">NEWS</span>
							</div>
							<div class="post-entry-meta-title">
								<h2><a href="#">Pellentesque ipsum erat, facilisis ut venenatis eu, sodales vel dolor</a></h2>
							</div>
						</div>
					</div>
				</article>
				<article class="post-entry">
					<a href="#" class="post-image"><img alt="" src="{{ URL::asset('images/1.jpg') }}"></a>
					<div class="post-entry-overlay">
						<div class="post-entry-meta">
							<div class="post-entry-meta-category">
								<span class="label label-danger">LIFESTYLE</span>
							</div>
							<div class="post-entry-meta-title">
								<h2><a href="#">Venenatis eu, sodales vel dolor</a></h2>
							</div>
						</div>
					</div>
				</article>
				<article class="post-entry">
					<a href="#" class="post-image"><img alt="" src="{{ URL::asset('images/1.jpg') }}"></a>
					<div class="post-entry-overlay">
						<div class="post-entry-meta">
							<div class="post-entry-meta-category">
								<span class="label label-danger">LIFESTYLE</span>
							</div>
							<div class="post-entry-meta-title">
								<h2><a href="#">Suspendisse consectetur fringilla luctus</a></h2>
							</div>
						</div>
					</div>
				</article>
				<article class="post-entry">
					<a href="#" class="post-image"><img alt="" src="{{ URL::asset('images/1.jpg') }}"></a>
					<div class="post-entry-overlay">
						<div class="post-entry-meta">
							<div class="post-entry-meta-category">
								<span class="label label-danger">World</span>
							</div>
							<div class="post-entry-meta-title">
								<h2><a href="#">Fusce id mi diam, non ornare orci</a></h2>
							</div>
						</div>
					</div>
				</article>
				<article class="post-entry">
					<a href="#" class="post-image"><img alt="" src="{{ URL::asset('images/1.jpg') }}"></a>
					<div class="post-entry-overlay">
						<div class="post-entry-meta">
							<div class="post-entry-meta-category">
								<span class="label label-danger">World</span>
							</div>
							<div class="post-entry-meta-title">
								<h2><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h2>
							</div>
						</div>
					</div>
				</article>
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
								<h3><a href="#">{{$recent->title}}</a></h3>
								<p>{!! str_limit($recent->text, 700) !!}</p>
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
											<h4><a href="#">{{str_limit($post->title, 40)}}</a></h4>
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

						<div class="col-md-6">
							<div class="post-thumbnail-list">

								@foreach($second as $post)
									<div class="post-thumbnail-entry">
										<div class="post-thumbnail-content">
											<h4><a href="#">{{str_limit($post->title, 40)}}</a></h4>
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
			<h3>Ready to purchase POLO Template?</h3>
			<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
			<a href="#" class="button transparent rounded"><span>Purchase</span></a>
		</div>
	</div>
		<!-- END: CALL TO ACTION -->

	<section class="p-t-40 p-b-40">
		<div class="container">
			<div class="heading-fancy heading-line">
				<h4>NOVINKY</h4>
			</div>
		    <div class="carousel clients-carousel" data-carousel-col="5">
				<div> <a href="#"><img alt="" src="{{ URL::asset('images/1.png') }}"> </a> </div>
				<div> <a href="#"><img alt="" src="{{ URL::asset('images/1.png') }}"> </a> </div>
				<div> <a href="#"><img alt="" src="{{ URL::asset('images/1.png') }}"> </a> </div>
				<div> <a href="#"><img alt="" src="{{ URL::asset('images/1.png') }}"> </a> </div>
				<div> <a href="#"><img alt="" src="{{ URL::asset('images/1.png') }}"> </a> </div>
		    </div>
		</div>
	</section>

	{{-- @if (Auth::guest())

		<div class="col-md-6">
			<form method="POST" action="{{ route('signIn') }}">
				{{ csrf_field() }}
		        <h2>Log in</h2>
				
				<div class="form-group">
			        <label for="email" class="sr-only">Email address</label>
			        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required>
				</div>

				<div class="form-group">
			        <label for="password" class="sr-only">Password</label>
			        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
				</div>

		        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
		    </form>
		</div>

		<div class="col-md-6">
			<form method="POST" action="{{ route('signUp') }}">
				{{ csrf_field() }}
		        <h2>Register</h2>

				<div class="form-group">
			        <label for="email" class="sr-only">Email address</label>
			        <input type="email" id="email" class="form-control" placeholder="Email address" name="email" required>
				</div>

				<div class="form-group">
			        <label for="full_name" class="sr-only">Full Name</label>
			        <input type="full_name" id="full_name" class="form-control" placeholder="Full Name" name="full_name" required>
				</div>

				<div class="form-group">
			        <label for="password" class="sr-only">Password</label>
			        <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
				</div>

				<div class="form-group">
			        <label for="password_confirmation" class="sr-only">Repetead Password</label>
			        <input type="password" id="password_confirmation" class="form-control" placeholder="Repetead Password" name="password_confirmation" required>
				</div>

		        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
		    </form>
		</div>

	@endif

	@if($user = Auth::user())
		<h4>Vitaj {{$user->full_name}}!</h4>
		@if(Auth::user()->hasRole('coach'))
			<ul>
				<li>
					<a href="{{ route('team/create') }}">Zaloz tim!</a>
				</li>
				<li>
					<a href="#">Post an coachAd!</a>
				</li>
				<li>
					<a href="">View coachAdS!</a>
				</li>
			</ul>
		@else
			<ul>
				<li>
					<a href="{{ route('coach/create') }}">Become a coach!</a>
				</li>
				<li>
					<a href="#">Post an Ad!</a>
				</li>
				<li>
					<a href="#">View AdS!</a>
				</li>
			</ul>
		@endif

	@endif --}}
@endsection