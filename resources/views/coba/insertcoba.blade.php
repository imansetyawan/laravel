<h1>insert data</h1>

<form class="" action="/admin/public/app/kategori" method="post">
	<input type="text" name="namakategori" value="" placeholder="judul artikel"><br>
	{{($errors->has('namakategori')) ? $errors->first('namakategori') : ''}}
	<textarea name="indukkategori" rows="8" cols="40" placeholder="isi"></textarea>
	{{($errors->has('indukkategori')) ? $errors->first('namakategori') : ''}}
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="submit" value="post">
</form>
