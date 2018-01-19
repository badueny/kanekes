@extends('layouts.2-column-left')

{{-- Document Title --}}

@section('title', 'Kanekes')

{{-- Classes --}}

@section('body_class', 'example-2-column-left')

{{-- Text --}}

@section('navbar-title', 'Kanekes')
@section('header-title', 'Kanekes Theme')
@section('header-description', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.')

{{-- Sections --}}

@section('section_top')
	@include('pages.2-column-left-example.navbar')
	@include('pages.2-column-left-example.header')
@endsection

@section('sidebar')
	@include('pages.2-column-left-example.sidebar')
@endsection

@section('main_content')
	@include('pages.2-column-left-example.main-content')
@endsection

@section('section_bottom')
	@include('pages.2-column-left-example.footer')
@endsection
