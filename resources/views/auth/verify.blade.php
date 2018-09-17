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
    <h4 class="login-box-msg">Verify Your Email Address</h4>
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            A fresh verification link has been sent to your email address.
        </div>
    @endif

    Before proceeding, please check your email for a verification link.
    If you did not receive the email, <a href="{{ route('verification.resend') }}">click here to request another</a>.

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
