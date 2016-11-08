@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
          
            <div class="box-header with-border">
              <h3 class="box-title">Edit Induk Kategori</h3>
            </div>

            <div>
            <form class="" action="{{ route('post_update_indukkategori', ['id' => $indukkategori->id]) }}" method="post">
            <div class="box-body">
              <label>Nama Kategori</label>
              <input class="form-control" name="nama_induk_kategori" value="{{$indukkategori->nama_induk_kategori}}" type="text" placeholder="Nama Induk Kategori" value="{{ Request::old('nama_induk_kategori') }}">
            </div>
            <input type="hidden" name="_method" value="put">
            <!-- /.box-body -->
            <div class="box-footer">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" value="edit" name="name" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>

          </div>
      </section>
  </div>


  @include('js')
  @include('footer')