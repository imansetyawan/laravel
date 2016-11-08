@include('css')
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
   @if (count($errors) > 0)
       <div class="alert alert-danger" role="alert">
            <strong>Error:</strong>
              <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
              </ul>      
        </div>
    @endif
    @if(Session::has('messagesuccessregist'))
          <div class="callout callout-success">
           {{ Session::get('messagesuccessregist') }}
          </div>
    @endif
    @if(Session::has('messageerror'))
          <div class="callout callout-danger">
           {{ Session::get('messageerror') }}
          </div>
    @endif
    @if(Session::has('messageinsert'))
          <div class="callout callout-success">
           {{ Session::get('messageinsert') }}
          </div>
    @endif
  <div class="login-box-body">
    <p class="login-box-msg">Login Here</p>

     <form role="form" method="POST" action="{{ route('post_login') }}">
      {{ csrf_field() }}

      <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
        <input type="email" name="email" class="form-control" placeholder="Email" value="{{Request::old('email')}}">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>


      <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <div class="col-xs-6">
          <div class="checkbox icheck">
            <label style="margin-left: 23px;">
              <input type="checkbox"> Remember Me
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

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="{{action('UserController@getForgot')}}">I forgot my password</a><br>
    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
</body>