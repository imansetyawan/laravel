@include('css')
@include('navbar')
@include('sitebar')
	
<div class="content-wrapper">
	<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<div class="outter">
					<img src="{{asset('image/'.$users->avatar)}}" class="image-circle">
				</div>
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<h3>{{$users->name}}</h3>
					</div>
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
            <div class="profile-content">
					<form class="form-horizontal">
					<fieldset>
					
    <div class="row">
        <div id="no-more-tables">
            <table class="col-md-12 table-bordered table-striped table-condensed cf">
            <div class="box-header">
              <h3 class="box-title">My Profil</h3>
              <div class="box-tools">
                <a style="padding: 0px 19px 4px; border-bottom-width: 1px;" href="{{ route('get_update_profil', ['id' => $users->id]) }}" class="btn btn-success btn-lg"> Edit</a>
             </div>
            </div>
                    <hr>
                        <th data-title="Code">Nama</th>
        				<td data-title="Company">{{$users->name}}</td>
        				<tr>
        				<th data-title="Code">Nama Lengkap</th>
        				<td data-title="Company">{{$users->namalengkap}}</td>
                        <tr>
                        <th data-title="Code">Email</th>
                        <td data-title="Company">{{$users->email}}</td>
                        <tr>
                        <th data-title="Code">Nomor Hp</th>
                        <td data-title="Company">{{$users->nomorhp}}</td>
        				<tr>
        				<th data-title="Code">Angkatan</th>
        				<td data-title="Company">{{$users->angkatan}}</td>
        				<tr>
        				<th data-title="Code">Tempat, Tanggal Lahir</th>
        				<td data-title="Company">{{$users->ttl}}</td>
        				<tr>
        				<th data-title="Code">Alamat Asli</th>
        				<td data-title="Company">{{$users->alamatasli}}</td>
        				<tr>
        				<th data-title="Code">Alamat di Malang</th>
        				<td data-title="Company">{{$users->alamatmalang}}</td>
        				<tr>
        				<th data-title="Code">Deskripsi singkat diri anda</th>
        				<td data-title="Company">{!!$users->deskripsi!!}</td>
        				<tr>         
        	</table>					    
		</div>	
	</div>
					</fieldset>
					</form>
            </div>
		</div>
	</div>
</div>
<br>
<br>
</div>

  @include('js')
  @include('footer')