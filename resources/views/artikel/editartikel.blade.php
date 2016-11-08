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
              <h3 class="box-title">Edit Artikel</h3>
            </div>

            <div>
            <form class="" action="{{ route('post_update_artikel', ['id' => $artikel->id])}}" method="post">
            <div class="box-body">
              <label>Nama</label>
              <input class="form-control" name="judulartikel" value="{{$artikel->judulartikel}}" type="text" placeholder="Nama Artikel" value="{{ Request::old('judulartikel') }}">
              <label>Kategori</label>
               <select class="form-control select2" style="width: 100%;" name="kategori_id" value="{{$artikel->kategori_id}}">
               @foreach($kategoris as $value)       
                      <option value="{{ $value->id }}">{{ $value->namakategori }}</option>
               @endforeach
                </select>
              </div>
          
            <!-- /.box-header -->
            <div class="box-body pad">
              <label>Deskripsi</label>
                <textarea class="textarea" name="deskripsi" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$artikel->deskripsi!!}</textarea>
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
            
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" value="edit" name="name" class="btn btn-primary">Edit</button>
            </div>
          </form>
          </div>
        </div>
      </section>
</div>

  @include('js')
  @include('footer')