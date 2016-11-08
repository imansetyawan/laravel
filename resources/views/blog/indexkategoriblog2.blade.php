<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
	<div class="widget widget_categories">
		<h5 class="widget-title">Categories</h5>
			<ul>
			@foreach ($kategoris as $kategori)
				<li><a href="{{ url('blog/kategori/'. $kategori->id)}}">{{$kategori->namakategori}}</a></li>
			@endforeach
			</ul>
	</div>
</div>