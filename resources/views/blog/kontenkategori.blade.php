@include('blog.headerblog')
@include('blog.navbarblog')
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="row">
                    @foreach ($artikel as $row)
                    <div class="col-md-6">
                        
                        <article class="post post-grid">
                            <div class="post-thumb">
                                <a href="blog.html"><img src="{{asset('image/thumb_'.$row->image)}}" alt=""></a>

                                <a href="/laravel/public/blog/{{$row->slug}}" class="post-thumb-overlay text-center">
                                    <div class="text-uppercase text-center">View Post</div>
                                </a>
                            </div>
                            <div class="post-content">
                                <header class="entry-header text-center text-uppercase">
                                    <h6><a href="{{ url('blog/kategori/'. $row->kategori_id)}}"> {{$row->kategori->namakategori}}</a></h6>

                                    <h1 class="entry-title"><a href="/laravel/public/blog/{{$row->slug}}">{{$row->judulartikel}}</a></h1>
                                </header>
                                
                            </div>
                        </article>
                    </div>
                      @endforeach
                </div>
                <ul class="pagination">
                    <li></li>
                </ul>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    @include('blog.indexkategoriblog')
                    <aside class="widget news-letter">
                        <h3 class="widget-title text-uppercase text-center">Get Newsletter</h3>

                        <form action="#">
                            <input type="email" placeholder="Your email address">
                            <input type="submit" value="Subscribe Now"
                                   class="text-uppercase text-center btn btn-subscribe">
                        </form>

                    </aside>
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
                        @foreach ($mostpop as $mostpop)
                        <div class="popular-post">
                            <a href="#" class="popular-img"><img width="298" height="191" src="{{asset('image/thumb_'.$mostpop->image)}}" alt="">
                                <div class="p-overlay"></div>
                            </a>
                            <div class="p-content">
                                <a href="/laravel/public/blog/{{$mostpop->slug}}" class="text-uppercase">{{$mostpop->judulartikel}}</a>
                                <span class="p-date">{{ date('d F Y', strtotime($mostpop->created_at))}}</span>
                            </div>
                        </div>
                        @endforeach
                    </aside>
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Featured Posts</h3>

                        <div id="widget-feature" class="owl-carousel">
                            <div class="item">
                                <div class="feature-content">
                                    <img src="assets/images/p1.jpg" alt="">

                                    <a href="#" class="overlay-text text-center">
                                        <h5 class="text-uppercase">Home is peaceful</h5>

                                        <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feature-content">
                                    <img src="assets/images/p2.jpg" alt="">

                                    <a href="#" class="overlay-text text-center">
                                        <h5 class="text-uppercase">Home is peaceful</h5>

                                        <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feature-content">
                                    <img src="assets/images/p3.jpg" alt="">

                                    <a href="#" class="overlay-text text-center">
                                        <h5 class="text-uppercase">Home is peaceful</h5>

                                        <p>Lorem ipsum dolor sit ametsetetur sadipscing elitr, sed </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>
                        @foreach ($recents as $recent)
                        <div class="thumb-latest-posts">
                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img width="107" height="76" src="{{asset('image/thumb_'.$recent->image)}}" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="/laravel/public/blog/{{$recent->slug}}" class="text-uppercase">{{$recent->judulartikel}}</a>
                                    <span class="p-date">{{ date('d F Y', strtotime($recent->created_at))}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </aside>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@include ('blog.footerblog')