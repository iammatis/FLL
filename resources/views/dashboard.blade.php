@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-6 col-md-offset-3">
            <div class="row">
                <div class="col-xs-6">
                    <a href="#" class="btn btn-primary pull-left">Create Team</a>
                </div>
                <div class="col-xs-6">
                    <a href="{{ route('coach_form') }}" class="btn btn-primary pull-right">Become Coach</a>
                </div>
            </div>
        </div>
    </div>
@endsection