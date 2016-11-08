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
              <h3 class="box-title">Edit Kategori</h3>
            </div>

            <div>
            <form class="" action="{{ route('post_update_kategori', ['id' => $kategori->id])}}" method="post">
            <div class="box-body">
              <label>Nama Kategori</label>
              <input class="form-control" name="namakategori" value="{{$kategori->namakategori}}" type="text" placeholder="Nama Kategori" value="{{ Request::old('namakategori') }}">
              <label>Induk Kategori</label>
                  <select class="form-control select2" style="width: 100%;" name="indukkategori_id">
                  @foreach($indukkategori as $value)
                  <option value="{{ $value->id }}">{{ $value->nama_induk_kategori }}</option>
                  @endforeach
                  </select>   
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