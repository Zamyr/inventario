@extends('layouts.login')

@section('content')
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>REGISTRO</b></a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Registrar un nuevo miembro</p>

    <form role="form" method="POST" action="{{ url('/register') }}">
      {{ csrf_field() }}
      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} has-feedback">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repetir Contraseña">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        @if ($errors->has('password_confirmation'))
            <span class="help-block">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Registro</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p> </p>
    </div>
    <a href="{{url('login')}}" class="text-center">Tengo una cuenta</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->
@endsection
