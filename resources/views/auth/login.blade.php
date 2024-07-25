@extends('layouts.app-login')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-none">
                <div class="card-header text-center py-4 bg-white">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width: 89px;"><h1 class="fw-bold">SMK Ar-Rahmah</h1>
                </div>

                <div class="card-body bg-white flex-wrap">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-4 justify-content-center">
                            <div class="col-md-5">
                                <input id="username" type="text" class="form-control my-input" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">
                                @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4 justify-content-center">
                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror my-input" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 d-flex flex-wrap">
                            <div class="col-md-5 offset-md-8">
                                <button type="submit" class="btn btn-primary col-4 ">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection