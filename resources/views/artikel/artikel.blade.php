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
              <h3 class="box-title">Artikel</h3>
              <div class="box-tools">
        		<a style="padding: 0px 19px 4px; border-bottom-width: 1px;" href="{{ route('get_insert_artikel') }}" class="btn btn-success btn-lg"> Insert</a>
   	         </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Judul Artikel</th>
                  <th>Kategori</th>
                  <th>Deskripsi</th>
                  <th>Image</th>
                  <th>Author</th>
                  <th>Menu</th>
                  
                </tr>
                @foreach($artikels as $artikel)
                <tr>
                  <td>{{$artikel->id}}</td>
                  <td><a href="">{{$artikel->judulartikel}}</a></td>
                  <td>{{$artikel->kategori->namakategori}}</td>
                  <td>{!!str_limit($artikel->deskripsi, 100, "...")!!}</td>
                  <td><img src="{{asset('image/'.$artikel->image)}}" alt="" width="150" height="150"></td>
                  <td>{{$artikel->user->name}}</td>
                  <td><a href="{{ route('get_update_artikel', ['id' => $artikel->id]) }}"><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button></a>
                      
                      <form id="myform" style="margin-left: 53px; margin-top: -23px;" class="" action="{{ route('get_delete_artikel', ['id' => $artikel->id]) }}" method="post">
                      <input type ="hidden" name="_method" value="delete">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <button style="padding-top: 0px; padding-bottom: 0px;" type="submit" value="delete" class="hapus btn btn-danger">Delete</button>
                      </form>

                  </td>
                  
                </tr>
                @endforeach
              </table>
              
            <div class="box-footer clearfix">
              <ul class="pagination pagination-sm no-margin pull-right">
                <li>{!! $artikels->links() !!}</a></li>
              </ul>
            </div>

            </div>
            
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </section>
    </div>
  @include('js')
  @include('footer')