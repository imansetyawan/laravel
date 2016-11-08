@include('blog.headerblog')
@include('blog.navbarblog')
<!-- Main Content -->
		<div class="content-wrapper">
			<!-- Main Slider -->
			<div class="main-slider">
				<ul class="items clean-list">
					@foreach ($slides as $slide)
					<li class="item gallery-cell">
						<img width="840" height="542" src="{{asset('image/thumb_'.$slide->image)}}" alt="slider item cover" />
						<div class="slide-components">
							<h3 class="title slide-component first-row"><a href="/laravel/public/blog/{{$slide->slug}}">{{$slide->judulartikel}}</a></h3>
							<hr class="slide-component second-row" />
							<a href="/laravel/public/blog/{{$slide->slug}}" class="link slide-component third-row">Read more</a>
						</div>
					</li>
					@endforeach

					<!-- <li class="item gallery-cell">
						<img width="840" height="542" src="http://localhost/laravel/dist2/img/slider-cover-2.jpg" alt="slider item cover" />
						<div class="slide-components">
							<h3 class="title slide-component first-row"><a href="blog-post.html">Mauris massa metus, fermentum</a></h3>
							<hr class="slide-component second-row" />
							<a href="blog-post.html" class="link slide-component third-row">Read more</a>
						</div>
					</li> -->

					<!-- <li class="item gallery-cell">
						<img width="840" height="542" src="http://localhost/laravel/dist2/img/slider-cover-3.jpg" alt="slider item cover" />
						<div class="slide-components">
							<h3 class="title slide-component first-row"><a href="blog-post.html">Mauris massa metus, fermentum</a></h3>
							<hr class="slide-component second-row" />
							<a href="blog-post.html" class="link slide-component third-row">Read more</a>
						</div>
					</li> -->

					<!-- <li class="item gallery-cell">
						<img width="840" height="542" src="http://localhost/laravel/dist2/img/slider-cover-4.jpg" alt="slider item cover" />
						<div class="slide-components">
							<h3 class="title slide-component first-row"><a href="blog-post.html">Mauris massa metus, fermentum</a></h3>
							<hr class="slide-component second-row" />
							<a href="blog-post.html" class="link slide-component third-row">Read more</a>
						</div>
					</li> -->
				</ul>
			</div>

			<!-- Blogspot Section -->
			<div class="section section-blogspot">
				<div class="container">

					<div class="row">
						<div class="main-content">
							<div class="col-md-16">
								<!-- Simple posts -->
								<div class="row">
									@foreach ($artikels as $artikel)
									<div class="col-sm-12">
										<div class="blog-post small">
											<div class="post-header">
												<p class="categories"><a href="{{ url('blog/kategori/'. $artikel->kategori_id)}}">{{$artikel->kategori->namakategori}}</a></p>

												<h2 class="post-title">
													<a href="/laravel/public/blog/{{$artikel->slug}}">{{$artikel->judulartikel}}</a>
												</h2>

												<ul class="post-meta">
													<li class="date">{{ date('d F Y', strtotime($artikel->created_at)) }}</li>
													<li class="author">by <a href="{{ url('blog/author/'.$artikel->user_id)}}">{{$artikel->user->name}}</a></li>
													<li class="comments"><a href="#">Comments (1)</a></li>
												</ul>
											</div>

											<div class="post-cover">
												<a href="blog-post.html">
													<img max-width="367" max-height="346" src="{{asset('image/thumb_'.$artikel->image)}}" alt="simple post cover" />
												</a>
											</div>

											<div class="post-body">
												<p>{!!str_limit($artikel->deskripsi, 100, "...")!!}</p>
												<div class="align-center">
													<a href="/laravel/public/blog/{{$artikel->slug}}" class="btn template-btn-2">Read more</a>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>

								<ul class="page-numbers">
									<li>{!!$artikels->links()!!}}</li>
								</ul>
							</div>
						</div>

						<div class="sidebar">
							<div class="col-lg-7 col-lg-offset-1 col-md-8">
								<div class="row isotope-container">
									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<!-- <div class="widget widget_bio">
											<h5 class="widget-title">About me</h5>

											<img width="318" height="366" src="http://localhost/laravel/dist2/img/author.jpg" alt="author avatar" />

											<div class="bio">
												<h4 class="name">Author blogger</h4>

												<ul class="social-block">
													<li><a href="#"><i class="fa fa-facebook"></i></a></li>
													<li><a href="#"><i class="fa fa-twitter"></i></a></li>
													<li><a href="#"><i class="fa fa-instagram"></i></a></li>
													<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
												</ul>

												<p>Molestie neque. Integer laoreet ac nisl vel lobortis. Aliquam erat volutpat. Vivamus enim nibh...</p>
											</div>
										</div> -->
									</div>	
@include('blog.indexkategoriblog')								
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
												<img width="320" height="285" src="http://localhost/laravel/dist2/img/promo-bg.jpg" alt="promo bg">

												<div class="promo-text">
													<h2>Best food</h2>
													<h3>$2<span>90</span></h3>
												</div>
											</a>
										</div>
									</div>

									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<div class="widget widget_facebook">
											<h5 class="widget-title">Find us on facebook</h5>

											<div class="fb-page" data-href="https://www.facebook.com/teslathemes" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
										</div>
									</div>

									<div class="col-md-24 col-sm-12 col-xs-24 isotope-item">
										<div class="widget widget_popular">
											<h5 class="widget-title">Latest Articles</h5>

											<ul class="clean-list stories">
												@foreach ($slides as $slide)
												<li class="story">
													<div class="cover">
														<a href="blog-post.html">
															<img width="130" height="85" src="{{asset('image/thumb_'.$slide->image)}}"/>
														</a>
													</div>

													<div class="story-body">
														<h3 class="title"><a href="/laravel/public/blog/{{$slide->slug}}">{{$slide->judulartikel}}</a></h3>
														<span class="date">{{ date('d F Y', strtotime($slide->created_at)) }}</span>
													</div>
												</li>
												@endforeach

												
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