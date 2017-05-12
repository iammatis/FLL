@extends('web.layouts.master')

@section('title') Novinka @endsection

@section('content')

<section class="content">
	<div class="container">
        <div class="post-content post-content-single post-modern">
            <div class="post-item" style="padding-left: 0">
                <div class="post-content-details">

                    <div class="post-title">
                        <h2>{{$news->title}}</h2>
                    </div>

                    <div class="post-info">
                        <span class="post-autor"><i class="fa fa-clock-o"></i> {{Carbon\Carbon::parse($news->created_at)->format('d/m/Y')}}</span>
                    </div>

                    <div class="post-description">
                       {!! $news->text !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection