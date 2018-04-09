@extends('layouts.app')

@section('content')
<div class="limiter">
  <div class="container-login100" id="particles-js">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54" style="z-index:2;">
      <form method="POST" class="login100-form validate-form" action="{{ route('login') }}">
        @csrf
        <span class="login100-form-title p-b-49">
          <!-- Ｌ　Ｏ　Ｇ　Ｉ　Ｎ -->
          {{__ ('Welcome, NYAN!')}}
        </span>

        <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
          <span class="label-input100">{{ __('Email Address')}}</span>
          <input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" name="email" id="email" placeholder="Type your username" value="{{ old('email') }}" required autofocus>
          <span class="focus-input100" data-symbol="&#xf206;"></span>
          @if ($errors->has('email'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('email') }}</strong>
            </span>
          @endif

        </div>

        <div class="wrap-input100 validate-input" data-validate="Password is required">
          <span class="label-input100">{{ __('Password') }}</span>
          <input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password" name="password" id="password" placeholder="Type your password" required>
          <span class="focus-input100" data-symbol="&#xf190;"></span>
          @if ($errors->has('password'))
            <span class="invalid-feedback">
              <strong>{{ $errors->first('password') }}</strong>
            </span>
          @endif

        </div>

        <div class="text-right p-t-8 p-b-31">
          <a href="{{ route('register') }}">
            Dont have account? Sign Up here
          </a>
        </div>

        <div class="container-login100-form-btn">
          <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button type="submit" class="login100-form-btn">
              {{ __('Login') }}
            </button>
          </div>
        </div>

        <a class="btn btn-link" href="{{ route('password.request') }}">
          {{ __('Forgot Your Password?') }}
        </a>

      </form>
    </div>
  </div>
</div>
@endsection
