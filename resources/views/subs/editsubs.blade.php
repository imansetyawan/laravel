@include('css')
@include('navbar')
@include('sitebar')

  <div class="content-wrapper">      
    <section class="content-header">
        <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Subscriber</h3>
            </div>

            <div>
            <form class="" action="{{ route('post_update_subscriber', ['id' => $subs->id])}}" method="post">
            <div class="box-body">
              <label>Email</label>
              <input class="form-control" name="email" value="{{$subs->email}}" type="text" placeholder="Email" value="{{ Request::old('email') }}">
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