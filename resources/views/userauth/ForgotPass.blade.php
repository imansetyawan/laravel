@include('css')
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-box-body">
    <p class="login-box-msg">Forgot Password</p>

     <form role="form" method="POST" action="/laravel/public/ForgotPassword">
      {{ csrf_field() }}

      <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" name="email" class="form-control" placeholder="Email" value="{{Request::old('email')}}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="social-auth-links text-center">
        <button type="submit" class="btn btn-primary btn-block btn-flat">
            Send Password Reset Link
        </button>
    </div>
        <!-- /.col -->
      </div>
    </form>

    
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
</div>
</body>