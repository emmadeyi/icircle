<!DOCTYPE html>
<html>
<head>
  @include('auth.head')
</head>
<body class="hold-transition login-page">
<div class="login-box" style="bottom:0px; margin-bottom:30px">
  <div class="login-logo">
      
    <h2><span>i</span>Circle <a href="{{url('/')}}" class="btn btn-sm btn-primary text-white"> <i class="fa fa-home"></i> Home</a></h2>
  </div>
  @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4 class="login-box-msg">Sign in to start your session </h4>

    <form method="POST" action="{{ route('login') }}">
        @csrf
      <div class="form-group has-feedback">
         <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                       
         @if ($errors->has('email'))
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $errors->first('email') }}</strong>
             </span>
         @endif
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">
                       
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        
              <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
              </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Forgot Your Password?') }}
    </a><br>
    <a class="btn btn-link" href="{{ route('register') }}">
        Register a new membership
    </a><br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@include('auth.footer')
@include('auth.scripts')
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
