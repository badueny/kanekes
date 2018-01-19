@extends('layouts.2-column-right')

{{-- Document Title --}}

@section('title', 'Kanekes')

{{-- Classes --}}

@section('body_class', 'example-2-column-right')

{{-- Text --}}

@section('navbar-title', 'Kanekes')
@section('header-title', 'Kanekes Theme')
@section('header-description', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.')

{{-- Sections --}}

@section('section_top')
	@include('pages.2-column-right-example.navbar')
	@include('pages.2-column-right-example.header')
@endsection

@section('main_content')
	@include('pages.2-column-right-example.main-content')
@endsection

@section('sidebar')
	@include('pages.2-column-right-example.sidebar')
@endsection

@section('section_bottom')
	@include('pages.2-column-right-example.footer')
@endsection
