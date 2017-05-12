@extends('web.layouts.master')

@section('title') Index @endsection

@section('content')

<section class="content">
	<div class="container">
        <!-- Blog post-->
        <div class="post-content post-content-single post-modern">
            <!-- Post item-->
            <div class="post-item" style="padding-left: 0">
                <div class="post-content-details">

                    <div class="post-title">
                        <h2>{{$tour->year}} / {{$region->region->name}}</h2>
                    </div>

                    <div class="post-info">
                        <span class="post-autor">Post by: <a href="#">Alea Grande</a></span>
                        <span class="post-category">in <a href="#">Productivity</a></span>
                    </div>

                    <div class="post-description">
                        {{$tour->about}}
                        {!! $region->text !!}
                    </div>

                </div>
            </div> <!-- End of Post item-->
        </div> <!-- End of Blog post-->
    </div>
</section>

@endsection