@extends('layouts.admin')

{{-- Document Title --}}

@section('title', 'Admin')

{{-- Text --}}

@section('navbar-title', 'Kanekes')

{{-- Sections --}}

@section('navbar_and_sidebar')
	@include('pages.admin-page.navbar')
	@include('pages.admin-page.sidebar')
@endsection

@section('main_content')
	@include('pages.admin-page.home.alert')
	@include('pages.admin-page.home.card-media')
	@include('pages.admin-page.home.mumbul')
	@include('pages.admin-page.home.form')
	@include('pages.admin-page.home.table')
	@include('pages.admin-page.home.card')
	@include('pages.admin-page.home.list-group')
	@include('pages.admin-page.home.progress')
@endsection
