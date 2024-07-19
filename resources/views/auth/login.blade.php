@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card border-0 col-md-4 mx-auto mt-4">
        <div class="card-header">
            <div class="card-title">Silahkan masuk</div>
        </div>
      <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Alamat Email') }}</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Kata sandi') }}</label>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <div class="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Ingat saya') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="mb-0">
                <div class="">
                    <button type="submit" class="btn col-12 btn-primary">
                        {{ __('Masuk') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lupa kata sandi?') }}
                        </a>
                    @endif
                    <a class="btn btn-link" href="{{ route('register') }}">
                        {{ __('Daftar Akun baru?') }}
                    </a>
                </div>
            </div>
        </form>
      </div>
    </div>
</div>
@endsection
