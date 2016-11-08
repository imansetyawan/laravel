@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Induk Kategori</h3>
            </div>

            <div>
            <form class="" action="{{ route('post_insert_indukkategori') }}" method="post">
            <div class="box-body">
              <label>Nama Induk Kategori</label>
              <div class="form-group {{ $errors->has('nama_induk_kategori') ? 'has-error' : ''}}">
              <input class="form-control" name="nama_induk_kategori" type="text" placeholder="Nama Induk Kategori" value="{{ Request::old('nama_induk_kategori') }}"> 
              {{($errors->has('nama_induk_kategori')) ? $errors->first('nama_induk_kategori') : ''}}
            </div>
            </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" value="post" name="name" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>

          </div>
      </section>
  </div>


  @include('js')
  @include('footer')