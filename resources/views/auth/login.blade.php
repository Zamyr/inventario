@extends('layouts.login')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href="javascript:;"><b>Inisio</b> Sesión</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"> </p>

    <form action="{{ url('/login') }}" method="POST">
    {{ csrf_field() }}
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember"> Recuerdame
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p> </p>
    </div>
    <!-- /.social-auth-links -->

    <a href="{{ url('register') }}">Registro</a><br></a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
