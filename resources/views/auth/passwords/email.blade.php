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
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4 class="login-box-msg">{{ __('Reset Password') }}</h4>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}">
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
      <div class="row">
        <div class="col-xs-12">          
            <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Send Password Reset Link') }}</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a class="btn btn-link" href="{{ route('login') }}">
        Click to login
    </a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@include('auth.footer')
<!-- Footer -->
<!-- jQuery 3 -->
@include('auth.scripts')
</body>
</html>
