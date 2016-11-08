@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Insert Kategori</h3>
            </div>

            <div>
            <form method="post" action="{{ route('post_insert_kategori') }}">
            <div class="box-body">
              <label>Nama Kategori</label>
              <div class="form-group {{ $errors->has('namakategori') ? 'has-error' : ''}}">
              <input class="form-control" name="namakategori" type="text" placeholder="Nama Kategori" value="{{ Request::old('namakategori') }}"> 
              {{($errors->has('namakategori')) ? $errors->first('namakategori') : ''}}
            </div>

              <label>Induk Kategori</label>
              <div class="form-group {{ $errors->has('indukkategori') ? 'has-error' : ''}}">
                  <select class="form-control select2" style="width: 100%;" name="indukkategori_id">
                  @foreach($indukkategori as $value)
                  <option value="{{ $value->id }}">{{ $value->nama_induk_kategori }}</option>
                  @endforeach
                  </select>
              {{($errors->has('indukkategori_id')) ? $errors->first('indukkategori_id') : ''}} 
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