@extends('layouts.main',['title'=>'Admin Sign In','login'=>true])

@section('content')
<div class="login-logo">
    <a href="/"><b>Aplikasi Inventaris</b></a>
</div>
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="{{ route('admin.login') }}" method="post">
            @csrf 
            <div class="input-group">
                <input
                name="username"
                class="form-control @error('username') is-invalid @enderror"
                placeholder="Username">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            @error('username')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror

            <div class="input-group mt-3">
                <input
                name="password"
                type="password"
                class="form-control @error('password') is-invalid @enderror"
                placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('password')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror

            <div class="row mt-3">
                <div class="col-8">
                    <div class="i check-primary">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember Me</label>
                    </div>
                </div>

                <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">
                        Sign In
                    </button>
                </div>
            </div>
        </form>

        <div class="row mt-3">
            <div class="col-12">
                <a href="{{ route('admin.register') }}" class="btn btn-secondary btn-block">
                    Sign Up
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
