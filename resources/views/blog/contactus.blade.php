@include('blog.headerblog')
@include('blog.navbarblog')
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="leave-comment mr0"><!--leave comment-->
                    <!-- <div id="googleMap" style="width:100%; height:380px; margin-bottom: 40px"></div> -->
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus aliquam deserunt esse
                        fugit iste magnam, neque nesciunt nihil possimus ratione repellendus veniam vero. Accusamus
                        deleniti deserunt esse illo recusandae.</p> -->

                    <h3 class="text-uppercase">Send massage</h3>
                    <br>

                    <form class="form-horizontal contact-form" role="form" method="post" action="{{ route('post_blog_contact') }}">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="name"
                                       placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="email"
                                       placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject"
                                       placeholder="Subject">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                        <textarea class="form-control" rows="6" name="pesan"
                                                  placeholder="Message" required></textarea>
                            </div>
                        </div>
                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" name="submit" class="btn send-btn">send massage</button>

                    </form>
                </div><!--end leave comment-->
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            <li>
                                <a href="">Food & Drinks</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="">Travel</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="">Business</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="">Story</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="">DIY & Tips</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                            <li>
                                <a href="">Lifestyle</a>
                                <span class="post-count pull-right"> (2)</span>
                            </li>
                        </ul>
                    </aside>
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

                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="assets/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                        <div class="popular-post">

                            <a href="#" class="popular-img"><img src="assets/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="assets/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="assets/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="assets/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="assets/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">

                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="assets/images/r-p.jpg" alt="">

                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@include ('blog.footerblog')