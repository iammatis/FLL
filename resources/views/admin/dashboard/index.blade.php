@extends('admin.layouts.master')

@section('title')
    Welcome!
@endsection

@section('header-icon') pe-7s-paper-plane @endsection
@section('header-title') Dashboard @endsection
@section('header-info')
    A aspernatur at dignissimos earum, error explicabo facilis fugiat harum ipsa ipsam, itaque libero maxime nesciunt optio possimus quidem rem, tempora temporibus.
@endsection

@section('content')

    INDEX

    @role('admin')
	    <p>This is visible to users with the admin role. Gets translated to 
	    \Entrust::role('admin')</p>
	@endrole

	@role('editor')
	    <p>This is visible to users with the editor role. Gets translated to 
	    \Entrust::role('editor')</p>
	@endrole

@endsection