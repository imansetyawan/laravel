@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Info</h3>
            </div>

            <div>
  <form class="" action="{{ url('app/info') }}" method="post">
        <div class="box-body">
              <label>Alamat</label>
              <div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
              <input class="form-control" name="alamat" type="text" placeholder="alamat" value="{{ Request::old('alamat') }}"> 
              {{($errors->has('alamat')) ? $errors->first('alamat') : ''}}
            </div>

            <label>Nomor Telpon</label>
              <div class="form-group {{ $errors->has('telp') ? 'has-error' : ''}}">
              <input class="form-control" name="telp" type="text" placeholder="Nomor Telpon" value="{{ Request::old('telp') }}"> 
              {{($errors->has('telp')) ? $errors->first('telp') : ''}}
            </div>

            <label>Email</label>
              <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
              <input class="form-control" name="email" type="email" placeholder="Email" value="{{ Request::old('email') }}"> 
              {{($errors->has('email')) ? $errors->first('email') : ''}}
            </div>   
        </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" value="post" class="btn btn-primary">Submit</button>
            </div>
  </form>
          </div>

          </div>
      </section>
  </div>


  @include('js')
  @include('footer')