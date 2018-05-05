@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col s12 m12">
        <div class="row">
          <div class="card-panel">
            <h4 class="center-align">Iniciar Sesión</h4>
            <br>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="row">
                <div class="input-field col s12 m12">
                  <input name="name" type="text" class="validate">
                  <label for="name">Cedula</label>
                  @if ($errors->has('name'))
                    <span class="red-text">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="input-field col s12 m12">
                  <input id="password" name="password" type="password" class="validate">
                  <label class="active" for="password">Contraseña</label>
                  @if ($errors->has('password'))
                    <span class="red-text">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <div class="col s12 m12 center-align">
                  <p>
                    <input type="checkbox" name="remember" class="filled-in"
                           id="filled-in-box" {{ old('remember') ? 'checked' : '' }}/>
                    <label for="filled-in-box">Recuerdame</label>
                  </p>
                  <button type="submit" class="btn btn-primary">
                    {{ __('Ingresa') }}
                  </button>
                  <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña?') }}
                  </a>
                </div>
              
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
      
      <div class="form-group row">
          <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
      </div>
  </div>

  <div class="form-group row">
      <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
    <span class="invalid-feedback">
        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
      </div>
  </div>

  <div class="form-group row">
      <div class="col-md-6 offset-md-4">
          <div class="checkbox">
              <label>
                  <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
      </label>
  </div>
</div>
</div>

<div class="form-group row mb-0">
<div class="col-md-8 offset-md-4">
  <button type="submit" class="btn btn-primary">
{{ __('Login') }}
      </button>

      <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
      </a>
  </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
-->
@endsection
