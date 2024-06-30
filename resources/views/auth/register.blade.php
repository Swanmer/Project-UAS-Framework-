@extends('layouts.main',['title'=>'Admin Register','login'=>true])

@section('content')
<div class="register-logo">
    <a href="/"><b>Admin</b>{{ config('app.name') }}</a>
</div>
<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="{{ route('admin.register') }}" method="post">
            @csrf
            <div class="input-group">
                <input
                name="username"
                class="form-control @error('username') is-invalid @enderror"
                placeholder="Username"
                value="{{ old('username') }}">
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
                name="nama_petugas"
                class="form-control @error('nama_petugas') is-invalid @enderror"
                placeholder="Nama Petugas"
                value="{{ old('nama_petugas') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user-tag"></span>
                    </div>
                </div>
            </div>
            @error('nama_petugas')
            <div class="invalid-feedback d-block">{{ $message }}</div>
            @enderror

            <div class="input-group mt-3">
                <select name="level" class="form-control @error('level') is-invalid @enderror">
                    <option value="" disabled selected>Select Level</option>
                    <option value="admin">Admin</option>
                    <option value="superadmin">Superadmin</option>
                </select>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user-shield"></span>
                    </div>
                </div>
            </div>
            @error('level')
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

            <div class="input-group mt-3">
                <input
                name="password_confirmation"
                type="password"
                class="form-control"
                placeholder="Retype password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-4 offset-8">
                    <button type="submit" class="btn btn-primary btn-block">
                        Register
                    </button>
                </div>
            </div>
        </form>

        <a href="{{ route('admin.login') }}" class="text-center mt-3 d-block">I already have a membership</a>
    </div>
</div>
@endsection
