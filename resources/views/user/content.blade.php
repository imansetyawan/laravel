        <section class="content">
          <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User</h3>

              <div class="box-tools">
                <a href="{{ action('UserController@create')}}"><button id="add" type="button" class="btn btn btn-success btn-sm">Insert</button></a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Menu</th>
                </tr>
                 @foreach($user as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->username}}</td>
                  <td>{{$user->email}}</td>
                  <td><a href="/admin/public/app/user/{{$user->id}}/edit"><button style="margin-right: 9px; padding-bottom: 0px; padding-top: 0px;" type="submit" class="btn btn-primary">Edit</button></a>
                      
                      <form style="margin-left: 53px; margin-top: -23px;" class="" action="/admin/public/app/user/{{$user->id}}" method="post">
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
      </div>
        </section>  

            