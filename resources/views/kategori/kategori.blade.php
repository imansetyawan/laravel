@include('css')
@include('navbar')
@include('sitebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
                @if(Session::has('messageinsert'))
                <div class="callout callout-success">
                {{ Session::get('messageinsert') }}
                </div>
                @endif
                @if(Session::has('messageupdate'))
                <div class="callout callout-info">
                {{ Session::get('messageupdate') }}
                </div>
                @endif
                @if(Session::has('messagedelete'))
                <div class="callout callout-danger">
                {{ Session::get('messagedelete') }}
                </div>
                @endif
            <div class="box-header">
              <h3 class="box-title">Kategori</h3>
              <div class="box-tools">
        		<a style="padding: 0px 19px 4px; border-bottom-width: 1px;" href="{{ route('get_insert_kategori') }}" class="btn btn-success btn-lg"> Insert</a>
   	         </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Nama Kategori</th>
                  <th>Induk Kategori</th>
                  <th>Menu</th>
                  
                </tr>
                @foreach($kategori as $kategori)
                <tr>
                  <td>{{$kategori->id}}</td>
                  <td>{{$kategori->namakategori}}</td>
                  <td>{{$kategori->indukkategori->nama_induk_kategori}}</td>
                  <td><a href="{{ route('get_update_kategori', ['id' => $kategori->id]) }}"><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button></a>
                  	  
                      <form id="myform" style="margin-left: 53px; margin-top: -23px;" class="" action="{{ route('get_delete_kategori', ['id' => $kategori->id]) }}" method="post">
                      <input type ="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" value="delete" class="btn btn-danger">Delete</button>
                      </form>
                  </td>
                  
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>

    
    </div>
  </aside>
  
  @include('js')
  @include('footer')
