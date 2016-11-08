<aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            @foreach ($kategoris as $kategori)
                            <li>
                                <a href="{{ url('blog/kategori/'. $kategori->id)}}">{{$kategori->namakategori}}</a>
                                <span class="post-count pull-right">{{$kategori->artikel_count}}</span>
                            </li>
                            @endforeach
                        </ul>
                    </aside>