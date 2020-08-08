@extends('layouts.auth')

@section('content')
<div class="h-100 container-fluid">
  <div class="row justify-content-center h-100">
    <div class="col-8 h-100" id="cover">
      
    </div>
    <div class="col-4 h-100">
      <div class="container h-100">     
        <div class="row h-100 align-items-center">
          <div class="col">
            <h1>LOGIN</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="btn btn-danger btn-block">
                  {{ __('Login') }}
                </button>
            </form>
            <div class="text-center mt-2">
              <p>Don't have account ? <a href="{{ route('register') }}">{{ __('Register') }}</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection