@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
              @if(Session::has('message'))
                <div class="callout callout-info">
                {{ Session::get('message') }}
                </div>
              @endif
            <div class="box-header with-border">
              <h3 class="box-title">Edit Profile</h3>
            </div>

            <div>
            <form class="" action="{{ route('post_update_profil', ['id' => $users->id])}}" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="nama {{ $errors->has('name') ? 'has-error' : ''}}">
              <label>Nama</label>
              <input class="form-control" name="name" value="{{$users->name}}" type="text" placeholder="Name" value="{{ Request::old('name') }}">
              {{($errors->has('name')) ? $errors->first('name') : ''}}
              </div>
              <br>
              <div class="namalengkap {{ $errors->has('namalengkap') ? 'has-error' : ''}}">
              <label>Nama Lengkap</label>
              <input class="form-control" name="namalengkap" value="{{$users->namalengkap}}" type="text" placeholder="Nama Lengkap" value="{{ Request::old('namalengkap') }}">
              {{($errors->has('namalengkap')) ? $errors->first('namalengkap') : ''}}
              </div>
              <br>
              <div class="nomorhp {{ $errors->has('nomorhp') ? 'has-error' : ''}}">
              <label>Nomor Hp</label>
              <input class="form-control" name="nomorhp" value="{{$users->nomorhp}}" type="text" placeholder="Nomor Hp" value="{{ Request::old('nomorhp') }}">
              {{($errors->has('nomorhp')) ? $errors->first('nomorhp') : ''}}
              </div>
              <br>
              <div class="angkatan {{ $errors->has('angkatan') ? 'has-error' : ''}}">
              <label>Angkatan</label>
              <input class="form-control" name="angkatan" value="{{$users->angkatan}}" type="text" placeholder="Angkatan" value="{{ Request::old('angkatan') }}">
              {{($errors->has('angkatan')) ? $errors->first('angkatan') : ''}}
              </div>
              <br>
              <div class="ttl {{ $errors->has('ttl') ? 'has-error' : ''}}">
              <label>Tempat Tanggal Lahir</label>
              <input class="form-control" name="ttl" value="{{$users->ttl}}" type="text" placeholder="Tanggal Lahir" value="{{ Request::old('ttl') }}">
              {{($errors->has('ttl')) ? $errors->first('ttl') : ''}}
              </div>
              <br>
              <div class="alamatasli {{ $errors->has('alamatasli') ? 'has-error' : ''}}">
              <label>Alamat Asli</label>
              <input class="form-control" name="alamatasli" value="{{$users->alamatasli}}" type="text" placeholder="Alamat Asli" value="{{ Request::old('alamatasli') }}">
              {{($errors->has('alamatasli')) ? $errors->first('alamatasli') : ''}}
              </div>
              <br>
              <div class="alamatmalang {{ $errors->has('alamatmalang') ? 'has-error' : ''}}">
              <label>Alamat Malang</label>
              <input class="form-control" name="alamatmalang" value="{{$users->alamatmalang}}" type="text" placeholder="Alamat Malang" value="{{ Request::old('alamatmalang') }}">
              {{($errors->has('alamatmalang')) ? $errors->first('alamatmalang') : ''}}
              </div>
              <br>
              <label>Foto</label>
              <input type="file" name="gambar">             
              </div>
          
            <!-- /.box-header -->
            <div class="box-body pad">
              <label>Deskripsi</label>
                <textarea class="textarea" name="deskripsi" value="{{ Request::old('deskripsi') }}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$users->deskripsi!!}</textarea>
                {{($errors->has('deskripsi')) ? $errors->first('deskripsi') : ''}}
            </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" value="edit" class="btn btn-primary">Edit</button>
            </div>
          </form>
          </div>
        </div>
      </section>
</div>

  @include('js')
  @include('footer')