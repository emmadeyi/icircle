<!DOCTYPE html>
<html>
<head>
  @include('auth.head')
</head>
<body class="hold-transition login-page">
<div class="login-box" style="margin-top:50px; margin-bottom:30px">
  <div class="login-logo">
      
    <h2><span>i</span>Circle <a href="{{url('/')}}" class="btn btn-sm btn-primary text-white"> <i class="fa fa-home"></i> Home</a></h2>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h4 class="login-box-msg">Enter Details Below</h4>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group has-feedback">
            <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus placeholder="First Name">

            @if ($errors->has('firstname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('firstname') }}</strong>
                </span>
            @endif
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}" required placeholder="Last Name">

            @if ($errors->has('lastname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lastname') }}</strong>
                </span>
            @endif
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input id="othername" type="text" class="form-control{{ $errors->has('othername') ? ' is-invalid' : '' }}" name="othername" value="{{ old('othername') }}" required placeholder="Other Name">

            @if ($errors->has('othername'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('othername') }}</strong>
                </span>
            @endif
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">            
            <select class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }} select2" name="gender" style="width: 100%;" placeholder="Gender">
              <option value="m" selected>Male</option>
              <option value="f">Female</option>
            </select>
                       
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
      <div class="form-group has-feedback">
         <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus placeholder="Phone Number">
                       
         @if ($errors->has('phone'))
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $errors->first('phone') }}</strong>
             </span>
         @endif
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
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
      <div class="form-group has-feedback">
        <input id="password-confirm" type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" required placeholder="Password Confirmation">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">          
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a class="btn btn-link" href="{{ route('login') }}">
        Already Registered?
    </a><br>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

@include('auth.footer')
<!-- Footer -->
<!-- jQuery 3 -->
@include('auth.scripts')
<script>
  $(function () {      
    //Initialize Select2 Elements
    $('.select2').select2();
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
