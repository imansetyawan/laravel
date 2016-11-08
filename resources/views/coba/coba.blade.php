<h1>All bloglist</h1>

@foreach($artikels as $artikel) 
<p>Nomer: {{ $artikel->id }} </p>
<p>judul: {{ $artikel->judulartikel }} </p>
<p>kategori: {{ $artikel->kategori }} </p>
<hr>
@endforeach

