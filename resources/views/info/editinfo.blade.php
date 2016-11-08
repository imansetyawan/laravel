@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Kategori</h3>
            </div>

            <div>
            <form class="" action="{{ url('app/info/' . $info->id) }}" method="post">
            <div class="box-body">
              <label>Alamat</label>
              <input class="form-control" name="alamat" value="{{$info->alamat}}" type="text" placeholder="Alamat" value="{{ Request::old('alamat') }}">
              <label>Nomor Telpon</label>
              <input class="form-control" name="telp" value="{{$info->telp}}" type="text" placeholder="Nomor Telpon" value="{{ Request::old('telp') }}">
              <label>Email</label>
              <input class="form-control" name="email" value="{{$info->email}}" type="text" placeholder="Email" value="{{ Request::old('email') }}">
            </div>
            <input type="hidden" name="_method" value="put">
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" value="edit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>

          </div>
      </section>
  </div>


  @include('js')
  @include('footer')