@extends('layouts.auth')

{{-- Title --}}

@section('title', 'Masuk &middot; Kanekes')

{{-- Content --}}

@section('content')
<form class="form-auth form-auth-sm">
    <h2 class="form-auth-heading">Masuk</h2>
    <div class="form-group">
        <label for="inputEmail" class="sr-only">Email address</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
            </div>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        </div>
    </div><!-- /.form-group -->
    <div class="form-group">
        <label for="inputPassword" class="sr-only">Password</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-key" aria-hidden="true"></i></div>
            </div>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        </div>
    </div><!-- /.form-group -->
    <div class="form-check mb-2">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="remember-me"> Ingatkan saya
        </label>
    </div><!-- /.form-check -->
    <button class="btn btn-success btn-block text-capitalize" type="submit">Masuk</button>
    <p class="text-muted text-center my-2 text-capitalize">Pengguna baru?</p>
    <a class="btn btn-primary btn-block text-capitalize" href="/register">Daftar sekarang</a>
    <hr>
    <p class="mb-0 text-center">
        <a class="btn btn-light text-capitalize" href="/">
            <i class="fa fa-home fa-lg mr-2"></i>
            Kembali ke Beranda
        </a>
    </p>
</form>
@endsection
