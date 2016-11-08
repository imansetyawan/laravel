@include('css')
@include('navbar')
@include('sitebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
		<div class="register-box">
		  <div class="register-box-body">
		    <p class="login-box-msg">Edit User</p>
		    <form action="{{ route('post_update_user', ['id' => $user->id])}}" method="post">
		    <label>Nama</label>
			<div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : ''}}">
			        <input type="text" name="name" value="{{$user->name}}" class="form-control" value="{{ Request::old('name') }}" placeholder="Name">
			        <span class="glyphicon glyphicon-user form-control-feedback"></span>
			        {{($errors->has('name')) ? $errors->first('name') : ''}}
			 </div>
		     <label>Email</label>
		     <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : ''}}">
		        	<input type="email" name="email" value="{{$user->email}}" class="form-control" value="{{ Request::old('emal') }}" placeholder="Email">
		        	<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		        	{{($errors->has('email')) ? $errors->first('email') : ''}}
		     </div>
		     <label>Password</label>
		     <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : ''}}">
		        	<input type="password" name="password" value="{{$user->password}}" class="form-control" placeholder="Password">
		        	<span class="glyphicon glyphicon-user form-control-feedback"></span>
		        	{{($errors->has('password')) ? $errors->first('password') : ''}}
		     </div>
		     <label>Retype password</label>
		     <div class="form-group has-feedback">
		        	<input type="password" name="password_confirmation" value="{{$user->password}}" class="form-control" placeholder="Password">
		        	<span class="glyphicon glyphicon-user form-control-feedback"></span>
		     </div>
		     <label>Group</label>
              <div class="form-group has-feedback">
                  <select class="form-control select2" style="width: 100%;" name="roles_id" value="{{$user->roles_id}}">
                  @foreach($roles as $value)
                  <option value="{{ $value->id }}">{{ $value->name }}</option>
                  @endforeach
                  </select> 
              </div> 
		      <div class="row">
		        <div class="col-xs-4">
		          <input type="hidden" name="_method" value="put">
		          <input type="hidden" name="_token" value="{{ csrf_token() }}">
		          <button type="submit" value="edit" class="btn btn-block btn-primary">Submit</button>
		        </div>
		        <!-- /.col -->
		      </div>
		    </form>
		  </div>
		  <!-- /.form-box -->
		</div>
		<!-- /.register-box -->
    </section>    
</div>

  @include('footer')
  @include('js')