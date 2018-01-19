@extends('layouts.3-column')

{{-- Document Title --}}

@section('title', 'Kanekes')

{{-- Classes --}}

@section('body_class', 'example-3-column')

{{-- Text --}}

@section('navbar-title', 'Kanekes')
@section('header-title', 'Kanekes Theme')
@section('header-description', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.')

{{-- Sections --}}

@section('section_top')
	@include('pages.3-column-example.navbar')
	@include('pages.3-column-example.header')
@endsection

@section('main_content')
	@include('pages.3-column-example.main-content')
@endsection

@section('sidebar_left')
	@include('pages.3-column-example.sidebar-left')
@endsection


@section('sidebar_right')
	@include('pages.3-column-example.sidebar-right')
@endsection

@section('section_bottom')
	@include('pages.3-column-example.footer')
@endsection
