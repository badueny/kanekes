@extends('layouts.1-column')

{{-- Document Title --}}

@section('title', 'Kanekes')

{{-- Classes --}}

@section('body_class', 'landing-page')

{{-- Text --}}

@section('navbar-title', 'Kanekes')
@section('header-title', 'Kanekes Theme')
@section('header-description', 'A Starter Theme for Laravel.')

{{-- Sections --}}

@section('section_top')
	@include('pages.landing-page.navbar')
	@include('pages.landing-page.header')
@endsection

@section('main_content')
	@include('pages.landing-page.section-1')
	@include('pages.landing-page.section-2')
	@include('pages.landing-page.section-3')
	@include('pages.landing-page.section-4')
	@include('pages.landing-page.section-5')
	@include('pages.landing-page.section-6')
@endsection

@section('section_bottom')
	@include('pages.landing-page.footer')
@endsection
