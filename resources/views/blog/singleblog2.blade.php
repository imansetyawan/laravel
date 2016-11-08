@include('blog.headerblog')
@include('blog.navbarblog')
		<!-- Main Content -->
		<div class="content-wrapper">
			<!-- Blogspot Section -->
			<div class="section section-blogspot has-padding">
				<div class="container">
					<div class="row">
						<div class="main-content">
							<div class="col-md-16">
								<!-- Single Post -->
								<div class="blog-post single-post">
									<div class="post-header">
										<p class="categories"><a href="#">{{$artikel->kategori->namakategori}}</p>
										<h2 class="post-title">{{$artikel->judulartikel}}</h2>
										<ul class="post-meta">
											<li class="date">{{ date('d F Y', strtotime($artikel->created_at))}} </li>
											<li class="author">by <a href="#">{{$artikel->user->name}}</a></li>
											<li class="comments"><a href="#">Comments (1)</a></li>
										</ul>
									</div>

									<div class="post-cover">
										<img src="{{asset('image/'.$artikel->image)}}" alt="single post cover" />
									</div>

									<div class="post-body">
										<p>{!!$artikel->deskripsi!!}</p>
										<p class="tags"><span>Tags: </span><a href="#">White</a> / <a href="#">City</a> / <a href="#">Sport</a></p>
										<div class="share-block">
											<span class="toggle">Share <i class="icon-share"></i></span>
											<div class="share-options">
												<ul class="clean-list">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<!-- Related Posts -->
								<div class="related-post-box">
									<h3 class="box-title align-center">Related Posts</h3>

									<div class="row">
									@foreach ($relatedartikel as $relatedartikel)
									<div class="col-sm-12">
										<div class="blog-post small">
											<div class="post-header">
												<p class="categories"><a href="{{ url('blog/kategori/'. $artikel->kategori_id)}}">{{$relatedartikel->kategori->namakategori}}</a></p>

												<h2 class="post-title">
													<a href="/laravel/public/blog/{{$relatedartikel->slug}}">{{$relatedartikel->judulartikel}}</a>
												</h2>

												<ul class="post-meta">
													<li class="date">{{ date('d F Y', strtotime($relatedartikel->created_at)) }}</li>
													<li class="author">by <a href="{{ url('blog/author/'.$relatedartikel->user_id)}}">{{$relatedartikel->user->name}}</a></li>
													<li class="comments"><a href="#">Comments (1)</a></li>
												</ul>
											</div>

											<div class="post-cover">
												<a href="blog-post.html">
													<img max-width="367" max-height="346" src="{{asset('image/thumb_'.$relatedartikel->image)}}" alt="simple post cover" />
												</a>
											</div>

											<div class="post-body">
												<p>{!!str_limit($relatedartikel->deskripsi, 100, "...")!!}</p>
												<div class="align-center">
													<a href="/laravel/public/blog/{{$relatedartikel->slug}}" class="btn template-btn-2">Read more</a>
												</div>
											</div>
										</div>
									</div>
									@endforeach

										
									</div>
								</div>

								<!-- Comments Area -->
								<div class="comments-area">
									<div class="content">
									<div id="disqus_thread"></div>
									<script>

									/**
									 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
									 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables */
									/*
									var disqus_config = function () {
									    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
									    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
									};
									*/
									(function() { // DON'T EDIT BELOW THIS LINE
									    var d = document, s = d.createElement('script');
									    s.src = '//iniblog-com.disqus.com/embed.js';
									    s.setAttribute('data-timestamp', +new Date());
									    (d.head || d.body).appendChild(s);
									})();
									</script>
									</div>          
								</div>
							</div>
						</div>

						<div class="sidebar">
							<div class="col-lg-7 col-lg-offset-1 col-md-8">
								<div class="row isotope-container">
									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<div class="widget widget_bio">
											<h5 class="widget-title">Penulis</h5>

											<img src="{{asset('image/'.$artikel->user->image)}}" alt="author avatar" />

											<div class="bio">
												<h4 class="name">{{$artikel->user->namalengkap}}</h4>

												<ul class="social-block">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
												</ul>

												<p>{!!$artikel->user->deskripsi!!}</p>
											</div>
										</div>
									</div>
									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<div class="widget widget_instagram">
											<h5 class="widget-title">Instagram</h5>

											<div class="instagram-feed" data-instagram-items="6" data-instagram-tag="epilogfeed1"></div>
										</div>
									</div>

									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<div class="widget widget_social">
											<h5 class="widget-title">Subscribe &amp; Follow</h5>

											<ul class="social-block">
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram"></i></a></li>
												<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											</ul>

											<div class="subscribe-form-wrapper">
												<form class="subscribe-form">
													<input type="text" class="form-input" placeholder="E-mail address" />
													<button class="form-submit"><i class="icon-arrow-right2"></i></button>
												</form>
											</div>
										</div>
									</div>

									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<div class="widget widget_promo">
											<a href="blog-post.html">
												<img src="img/promo-bg.jpg" alt="promo bg">

												<div class="promo-text">
													<h2>Best food</h2>
													<h3>$2<span>90</span></h3>
												</div>
											</a>
										</div>
									</div>
@include('blog.indexkategoriblog')
									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<div class="widget widget_facebook">
											<h5 class="widget-title">Find us on facebook</h5>

											<div class="fb-page" data-href="https://www.facebook.com/teslathemes" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
										</div>
									</div>

									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<div class="widget widget_popular">
											<h5 class="widget-title">Most popular stories</h5>

											<ul class="clean-list stories">
												<li class="story">
													<div class="cover">
														<a href="blog-post.html">
															<img src="img/popular-story-1.jpg" alt="popular story" />
														</a>
													</div>

													<div class="story-body">
														<h3 class="title"><a href="blog-post.html">Praesent id purus ipsum.</a></h3>
														<span class="date">15 jul, 2015</span>
													</div>
												</li>

												<li class="story">
													<div class="cover">
														<a href="blog-post.html">
															<img src="img/popular-story-1.jpg" alt="popular story" />
														</a>
													</div>

													<div class="story-body">
														<h3 class="title"><a href="blog-post-2.html">metus finibus auctor</a></h3>
														<span class="date">11 jul, 2015</span>
													</div>
												</li>

												<li class="story">
													<div class="cover">
														<a href="blog-post.html">
															<img src="img/popular-story-3.jpg" alt="popular story" />
														</a>
													</div>

													<div class="story-body">
														<h3 class="title"><a href="blog-post.html">Donec consequat quam</a></h3>
														<span class="date">10 jul, 2015</span>
													</div>
												</li>
											</ul>
										</div>
									</div>

									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<div class="widget widget_tagcloud">
											<h5 class="widget-title">Tag cloud</h5>

											<div class="tag_cloud">
												<a href="#">cook</a>
												<a href="#">food</a>
												<a href="#">fashion</a>
												<a href="#">flowers</a>
												<a href="#">book</a>
												<a href="#">event</a>
												<a href="#">work</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@include ('blog.footerblog')