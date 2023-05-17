@extends('C21.layouts.app')
@section('content')


	<!-- <div id="preloader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
		<div class="preloader-cancel-btn-wraper">
			<a href="#" class="btn btn-primary preloader-cancel-btn">Cancel Preloader</a>
		</div>
	</div> -->


	@include('C21/partials/top_bar')
	@include('C21/partials/adbanner1')

	@include('C21/partials/header_nav')


	@include('C21/partials/blockpost')

	@include('C21.partials.popular')

	@include('C21.partials.hot')
	@include('C21.partials.adbanner2')
	@include('C21.partials.watchnow')






	<!-- post wraper start-->
	<section class="block-wrapper mb-45" id="more-news-section">
		<div class="container">
			<div class="ts-grid-box ts-grid-box-heighlight">
				<h2 class="ts-title">More News</h2>

				<div class="owl-carousel" id="more-news-slider">
					<div class="ts-overlay-style">
						<div class="item">
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/sports/sports4.jpg" alt="">
								</a>
							</div>
							<a class="post-cat ts-green-bg" href="#">Sports</a>
							<div class="overlay-post-content">
								<div class="post-content">
									<h3 class="post-title">
										<a href="#">Man plans to ride out Hurricane Florence on a boat out Hurricane</a>
									</h3>
									<span class="post-date-info">
										<i class="fa fa-clock-o"></i>
										March 21, 2019
									</span>
								</div>
							</div>
						</div>
						<!-- end item-->
					</div>
					<!-- ts-overlay-style end-->
					<div class="ts-overlay-style">
						<div class="item">
							<a class="post-cat ts-yellow-bg" href="#">Food</a>
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/foods/food2.jpg" alt="">
								</a>
							</div>
							<div class="overlay-post-content">
								<div class="post-content">
									<h3 class="post-title">
										<a href="#">help us make mfs better with our better with our reader survey</a>
									</h3>
									<span class="post-date-info">
										<i class="fa fa-clock-o"></i>
										March 21, 2019
									</span>
								</div>
							</div>
						</div>
						<!-- end item-->
					</div>
					<!-- ts-overlay-style end-->
					<div class="ts-overlay-style">
						<div class="item">
							<a class="post-cat ts-orange-bg" href="#">Travel</a>
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/travel/travel4.jpg" alt="">
								</a>
							</div>
							<div class="overlay-post-content">
								<div class="post-content">
									<h3 class="post-title">
										<a href="#">Tourism in Dubai is booming international tourist most visited place</a>
									</h3>
									<span class="post-date-info">
										<i class="fa fa-clock-o"></i>
										March 21, 2019
									</span>
								</div>
							</div>
						</div>
						<!-- end item-->
					</div>
					<!-- ts-overlay-style end-->
					<div class="ts-overlay-style">
						<div class="item">
							<a class="post-cat ts-pink-bg" href="#">Music</a>
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/music/music2.jpg" alt="">
								</a>
							</div>
							<div class="overlay-post-content">
								<div class="post-content">
									<h3 class="post-title">
										<a href="#">Tourism in Dubai is booming international tourist most visited place</a>
									</h3>
									<span class="post-date-info">
										<i class="fa fa-clock-o"></i>
										March 21, 2019
									</span>
								</div>
							</div>
						</div>
						<!-- end item-->
					</div>
					<!-- ts-overlay-style end-->
					<div class="ts-overlay-style">
						<div class="item">
							<a class="post-cat ts-green-bg" href="#">sports</a>
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/sports/sports2.jpg" alt="">
								</a>
							</div>
							<div class="overlay-post-content">
								<div class="post-content">
									<h3 class="post-title">
										<a href="#">Tourism in Dubai is booming international tourist most visited place</a>
									</h3>
									<span class="post-date-info">
										<i class="fa fa-clock-o"></i>
										March 21, 2019
									</span>
								</div>
							</div>
						</div>
						<!-- end item-->
					</div>
					<!-- ts-overlay-style end-->
					<div class="ts-overlay-style">
						<div class="item">
							<a class="post-cat ts-orange-bg" href="#">Travel</a>
							<div class="ts-post-thumb">
								<a href="#">
									<img class="img-fluid" src="images/news/travel/travel6.jpg" alt="">
								</a>
							</div>
							<div class="overlay-post-content">
								<div class="post-content">
									<h3 class="post-title">
										<a href="#">Tourism in Dubai is booming international tourist most visited place</a>
									</h3>
									<span class="post-date-info">
										<i class="fa fa-clock-o"></i>
										March 21, 2019
									</span>
								</div>
							</div>
						</div>
						<!-- end item-->
					</div>
					<!-- ts-overlay-style end-->
				</div>
				<!-- most-populers end-->
			</div>
			<!-- ts-populer-post-box end-->
		</div>
		<!-- container end-->
	</section>
	<!-- post wraper end-->

	<!-- footer social list start-->
	<section class="ts-footer-social-list">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo">
						<a href="#">
							<img src="images/logo/footer_logo.png" alt="">
						</a>
					</div>
					<!-- footer logo end-->
				</div>
				<!-- col end-->

				<div class="col-lg-8 align-self-center">
					<ul class="footer-social">
						<li class="ts-facebook">
							<a href="#">
								<i class="fa fa-facebook"></i>
								<span>Facebook</span>
							</a>
						</li>
						<li class="ts-google-plus">
							<a href="#">
								<i class="fa fa-google-plus"></i>
								<span>Google Plus</span>
							</a>
						</li>
						<li class="ts-twitter">
							<a href="#">
								<i class="fa fa-twitter"></i>
								<span>Twitter</span>
							</a>
						</li>
						<li class="ts-pinterest">
							<a href="#">
								<i class="fa fa-pinterest-p"></i>
								<span>pinterest</span>
							</a>
						</li>
						<li class="ts-linkedin">
							<a href="#">
								<i class="fa fa-linkedin"></i>
								<span>Linkedin</span>
							</a>

						</li>
					</ul>
				</div>
				<!-- col end-->

			</div>
		</div>
	</section>
	<!-- footer social list end-->

	<!-- newslater start -->
	<section class="ts-newslatter">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="ts-newslatter-content">
						<h2>
							Sign up for the Newsletter
						</h2>
						<p>
							Join our newsletter and get updates in your inbox. We won’t spam you and we respect your privacy.
						</p>
					</div>
				</div>
				<!-- col end-->

				<div class="col-lg-6 align-self-center">
					<div class="newsletter-form">
						<form action="#" method="post" class="media align-items-end">
							<div class="email-form-group media-body">
								<i class="fa fa-paper-plane" aria-hidden="true"></i>
								<input type="email" name="email" id="newsletter-form-email" class="form-control" placeholder="Enter Your Email" autocomplete="off"
								 required>
							</div>
							<div class="d-flex ts-submit-btn">
								<button class="btn btn-primary">Subscribe</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- newslater end -->

	<!-- footer start -->
	<footer class="ts-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-menu text-center">
						<ul>
							<li>
								<a href="#">Support</a>
							</li>
							<li>
								<a href="#">Suggestion</a>
							</li>
							<li>
								<a href="#">Privacy</a>
							</li>
							<li>
								<a href="#">About</a>
							</li>
							<li>
								<a href="#">Our Ads </a>
							</li>
							<li>
								<a href="#">Terms</a>
							</li>
						</ul>
					</div>
					<div class="copyright-text text-center">
						<p>&copy; 2018, Vinazine. All rights reserved</p>
					</div>
				</div><!-- col end -->
			</div><!-- row end -->
			<div id="back-to-top" class="back-to-top">
				<button class="btn btn-primary" title="Back to Top">
					<i class="fa fa-angle-up"></i>
				</button>
			</div><!-- Back to top end -->
		</div><!-- Container end-->
	</footer>
	<!-- footer end -->

@endsection



