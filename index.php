<?php
include('header.php');
?>
<style>
	/*
Fade content bs-carousel with hero headers
Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
Image credits: unsplash.com
*/

	/********************************/
	/*       Fade Bs-carousel       */
	/********************************/
	.fade-carousel {
		position: relative;
	}

	.fade-carousel .carousel-inner .item {
		height: 100%;
	}

	.fade-carousel .carousel-indicators>li {
		margin: 0 2px;
		background-color: #f39c12;
		border-color: #f39c12;
		opacity: .7;
	}

	.fade-carousel .carousel-indicators>li.active {
		width: 10px;
		height: 10px;
		opacity: 1;
	}

	/********************************/
	/*          Hero Headers        */
	/********************************/
	.hero {
		position: absolute;
		top: 50%;
		left: 50%;
		z-index: 99;
		color: #fff;
		text-align: center;
		text-transform: uppercase;
		text-shadow: 1px 1px 0 rgba(0, 0, 0, .75);
		-webkit-transform: translate3d(-50%, -50%, 0);
		-moz-transform: translate3d(-50%, -50%, 0);
		-ms-transform: translate3d(-50%, -50%, 0);
		-o-transform: translate3d(-50%, -50%, 0);
		transform: translate3d(-50%, -50%, 0);
		width: 100%;
	}

	.fade-carousel .carousel-inner .item .hero {
		opacity: 0;
		-webkit-transition: 2s all ease-in-out .1s;
		-moz-transition: 2s all ease-in-out .1s;
		-ms-transition: 2s all ease-in-out .1s;
		-o-transition: 2s all ease-in-out .1s;
		transition: 2s all ease-in-out .1s;
	}

	.fade-carousel .carousel-inner .item.active .hero {
		opacity: 1;
		-webkit-transition: 2s all ease-in-out .1s;
		-moz-transition: 2s all ease-in-out .1s;
		-ms-transition: 2s all ease-in-out .1s;
		-o-transition: 2s all ease-in-out .1s;
		transition: 2s all ease-in-out .1s;
	}



	.fade-carousel .slides .slide-1,
	.fade-carousel .slides .slide-2,
	.fade-carousel .slides .slide-3 {
		background-size: cover;
		background-position: center center;
		background-repeat: no-repeat;
	}
</style>

<section class="  ">


	<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
		<!-- Overlay -->


		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
			<li data-target="#bs-carousel" data-slide-to="1"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item slides active">
				<div class="slide-1">
					<video loop autoplay="autoplay" muted id='vid'>
						<source type="video/mp4" src="images/Comp 1 3.mp4">
						<source src="images/Comp 1 3.ogg" type="video/ogg">
					</video>
				</div>
				<div class="overlay"></div>
				<div class="hero">
					<div class='banner_content'>
						<h1>Mitra's Global Market Education</h1>
						<p style='text-transform:uppercase'>Offers specialised courses related to global
							stock
							market.</p>
						<div style='margin-top:40px' class='slide_btn'><a href="courses.php"
								class='btn1 btn-yellow'>Join
								Now</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item slides ">
				<div class="slide-2"><img src="images/team/artboard.jpeg" alt=""></div>
				<div class="overlay"></div>
				<div class="hero">
					<div class="row">
						<div class="col-md-6 col-xs-12">
							<div class='banner_content banner_content1'>
								<h1>Our Professional Courses</h1>
								<p class='bannerp' style='text-transform:uppercase'>BEGINNER'S STUDENT PROFESSIONAL
									PROGRAM & ADVANCED TRADER PROFESSIONAL
									PROGRAM</p>
								<div style='margin-top:40px' class='slide_btn'><a href="courses.php"
										class='btn1 btn-yellow'>Join
										Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- eof flexslider -->
</section>

<section id="about" class="section_padding_top_100 section_padding_bottom_100 columns_padding_25 coursepad">
	<div class="container">
		<div class="row">
			<p class="small-text highlight text-center">Our Courses</p>
			<h2 class="section_header text-center">Beginners &amp; Advance Level</h2>
			<div class="col-xs-12 col-md-6 col-lg-6" data-aos="fade-right">
				<img src="images/artboard2.jpg" alt="" class='boxshadowright'>
				<div class="coursespb2">
					<p>Beginner's
						Student
						Professional <br>
						Program</p>
					<button>Enroll Now</button>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-6 " data-aos="fade-left">
				<img src="images/artboard1.jpg" alt="" class='boxshadowright'>
				<div class="coursespb2">
					<p>Advanced
						Trader
						Professional <br>
						Program</p>
					<button>Enroll Now</button>
				</div>
			</div>
		</div>
</section>
<section id="about"
	class="ls ms background_cover section_about section_padding_top_150 section_padding_bottom_150 columns_padding_25"
	data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-7  aboutcontent">
				<p class="small-text highlight">What is Mitra</p>
				<h2 class="section_header1 text-white">ABOUT Mitra's INVESTMENT SERVICES
				</h2>
				<p class='text-white'>The Mitra's Investment services consists of 2 professionally managed business arms
					viz.</p>
				<ul style='padding-left:0;margin-top:20px;'>
					<li class='text-white'><i class='fa fa-angle-double-right'></i> &nbsp; Deals in researched & sound
						advices about international market to investors .</li>
					<li class='text-white'><i class='fa fa-angle-double-right'></i> &nbsp; Offers specialised courses
						related to global stock market.
					</li>
				</ul>

				<p class="topmargin_30"> <a href="contact.html"
						class="theme_button color1 background:#fcc31c !important; min_width_button">Join us</a>
				</p>
			</div>
		</div>
	</div>
</section>
<section id="career" class="section_padding_top_100 section_padding_bottom_10 coursepad2 coursepad">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<h2 class="section_header text-center">TRADERS - AS A CAREER
				</h2>

				<div class="row justify-content-center">
					<div class="col-xs-12 ">
						<div class="imag1"><img src='images/team/11zon_cropped.png'></div>
						<div class="imag2" data-aos="fade-down-right">
							<div class="row">
								<div class="col-xs-7">
									<p class=' fontsize ' style='text-align:right'>Inflation / Recession Free Business
									</p>
								</div>
								<div id="cat-top-container" class="col-xs-5">
									<img src='images/team/trader/-Inflation.svg' width='50' height='50' id="cat-top">
									<div id="cat-top-shadow"></div>
								</div>
							</div>
						</div>
						<div class="imag3" data-aos="fade-down-left">
							<div class="row">
								<div id="cat-top-container" class="col-xs-5">
									<img src='images/team/trader/Noboss.svg' width='50' height='50' id="cat-top">
									<div id="cat-top-shadow"></div>
								</div>
								<div class="col-xs-7">
									<p class=' fontsize' style='text-align:left'>No Boss</p>
								</div>
							</div>
						</div>
						<div class="imag4" data-aos="fade-up-right">
							<div class="row">
								<div class="col-xs-7">
									<p class=' fontsize' style='text-align:right'>Time Freedom</p>
								</div>
								<div id="cat-top-container" class="col-xs-5">
									<div id="cat-top-container"><img src='images/team/trader/Time.svg' width='50'
											height='50' id="cat-top">
										<div id="cat-top-shadow"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="imag5" data-aos="fade-up-left">
							<div class="row">
								<div id="cat-top-container" class="col-xs-5">
									<div id="cat-top-container"><img src='images/team/trader/Housewife.svg' width='50'
											height='50' id="cat-top">
										<div id="cat-top-shadow"></div>
									</div>
								</div>
								<div class="col-xs-7">
									<p class=' fontsize' style='text-align:left'>House Wife / Business Men / Students
									</p>
								</div>
							</div>

						</div>
					</div>
					<!-- <div class="col-xs-6 col-md-2 colnone colnone1 careerimage"><img src='images/2.jpg'></div>
					<div class="col-xs-6 col-md-2 colnone careerimage"><img src='images/3.jpg'></div>
					<div class="col-xs-6 col-md-2 colnone colnone1 careerimage"><img src='images/4.jpg'></div>
					<div class="col-xs-6 col-md-2 colnone colnone2"><img src='images/5.jpg'></div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<section id="career" class="section_padding_top_50 section_padding_bottom_150 coursepad1">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<h2 class="section_header text-center">Career & Internships
				</h2>
				<div class="row justify-content-center">
					<div class="col-xs-6 col-sm-3 col-md-2 colnone careerimage" data-aos="fade-up"><img
							src='images/team/MITRA_INVESTMENTS-ppt.jpg'></div>
					<div class="col-xs-6  col-sm-3 col-md-2 colnone colnone1 careerimage" data-aos="fade-up"
						data-aos-dalay="0.2"><img src='images/team/2.jpg'></div>
					<div class="col-xs-6  col-sm-3 col-md-2 colnone careerimage" data-aos="fade-up"
						data-aos-dalay="0.6"><img src='images/team/3.jpg'></div>
					<div class="col-xs-6  col-sm-3 col-md-2 colnone colnone1 careerimage" data-aos="fade-up"
						data-aos-dalay="0.7"><img src='images/team/4.jpg'></div>
					<div class="col-xs-6 col-md-2 colnone colnone2" data-aos="fade-up" data-aos-dalay="0.9"><img
							src='images/team/5.jpg'></div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="page_breadcrumbs background_cover1 color_overlay ">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-xs-12">
				<h2 class='text-white'>Achieve Your dream with Mitra's</h2>
			</div>
			<div class="col-sm-4 col-xs-12">
				<h2 class='float_right'><a href="courses.php" class='btn1 btn-yellow'>Explore Now</a></h2>
			</div>
		</div>
	</div>
</section>

<section id="advantages"
	class="ls s1 ms section_advantages background_cover section_padding_bottom_10 columns_margin_bottom_30"
	data-aos="fade-up">
	<h2 class="section_header text-center" style='margin-top:-60px '>Basics of Stock Market
	</h2>
	<div class="container">

		<div class="row" style='margin-right:-100px ;margin-left:-100px'>

			<div class="col-md-4 col-xs-6">
				<div class="teaser max_width_260 text-center">
					<div class="teaser_icon size_small highlight"> <img src='img/parallax/Market index & Indices.svg'
							width='50' height='50'>
					</div>
					<h4 class="hover-color2"><a href="service-single.html">Market index &amp; Indices</a></h4>
					<!-- <p>Be sure in your account security and your funds safe.</p> -->
				</div>
			</div>
			<div class="col-md-4 col-xs-6 col-md-offset-4">
				<div class="teaser max_width_260 text-center">
					<div class="teaser_icon size_small highlight2"> <img src='img/parallax/Tecnical Analysis.svg'
							width='50' height='50'> </div>
					<h4 class="hover-color2"><a href="service-single.html">Technical Analysis</a></h4>
					<!-- <p>Recurring transaction feature allows you to schedule future</p> -->
				</div>
			</div>

		</div>
		<div class="row" style='margin-right:-100px ;margin-left:-100px'>
			<div class="col-md-3 col-xs-6">
				<div class="teaser max_width_260 text-center">
					<div class="teaser_icon size_small highlight3"> <img
							src='img/parallax/Trading System & Terminal.svg' width='50' height='50'>
					</div>
					<h4 class="hover-color2"><a href="service-single.html">Trading System & Terminal</a></h4>
					<!-- <p>Perfectly developed mobile apps will open new opportunities.</p> -->
				</div>
			</div>
			<div class="col-md-3 col-xs-6 col-md-offset-6">
				<div class="teaser max_width_260 text-center">
					<div class="teaser_icon size_small highlight3"> <img
							src='img/parallax/Derivatics - Basics of Future & Option.svg' width='50' height='50'>
					</div>
					<h4 class="hover-color2"><a href="service-single.html">Derivatics - Basics of Future & Option</a>
					</h4>
					<!-- <p>Instant Exchange allows you to send bitcoin and pay for it</p> -->
				</div>
			</div>
		</div>
		<div class="row" style='margin-right:-100px; margin-left:-100px'>
			<div class="col-md-4 col-xs-6">
				<div class="teaser max_width_260 text-center">
					<div class="teaser_icon size_small highlight2"> <img src='img/parallax/analysis.svg' width='50'
							height='50'>
					</div>
					<h4 class="hover-color2"><a href="service-single.html">Fundamental Analytics Basics</a></h4>
					<!-- <p>Perfectly developed mobile apps will open new opportunities.</p> -->
				</div>
			</div>
			<div class="col-md-4 col-xs-6 col-md-offset-4">
				<div class="teaser max_width_260 text-center">
					<div class="teaser_icon size_small highlight"> <img src='img/parallax/Equity Market,.svg' width='50'
							height='50'>
					</div>
					<h4 class="hover-color2"><a href="service-single.html">Equity Market, Primary Market & Secondary
							Market</a></h4>
					<!-- <p>Support will answer your questions regarding bitcoins.</p> -->
				</div>
			</div>

		</div>
	</div>
</section>
<section id="testimonials" class="ls section_padding_top_50 section_padding_bottom_10" data-aos="fade-up">

	<div class="container">
		<h2 class="section_header text-center">Testimonial
		</h2>
		<div class="row">

			<div class="col-sm-6 padding section_padding_bottom_100 carouselbox">
				<div class="owl-carousel caroudl1" data-responsive-lg="1" data-responsive-md="1" data-responsive-xs="1"
					data-nav="false" data-dots="true">
					<blockquote class="text-center">
						<div class="item-meta topmargin_0">
							<div class="avatar"> <img src="images/image-032.jpg" alt=""> </div>
							<h2 class="section_header margin_0"> <span class="small-text highlight">Amruta Deshmukh</h2>
							<!-- <div class="star-rating" title="Rated 4.0 out of 5"> <span style="width:80%">
									<strong class="rating">4.0</strong> out of 5
								</span> </div> -->
						</div> Hi,I am Amruta Deshmukh I was having four years of experience in stock market. In 2022 I
						joined
						Mitra's as a Senior trader and now promoted as a Trainer..We are helping youngsters to take up
						stock
						trading as profession and earn 50k to 80k per month and become independent.
					</blockquote>
					<blockquote class="text-center">
						<div class="item-meta topmargin_0">
							<div class="avatar"> <img src="images/image-033.jpg" alt=""> </div>
							<h2 class="section_header margin_0"> <span class="small-text highlight">Nikesh Dudhe</h2>
							<!-- <div class="star-rating" title="Rated 4.0 out of 5"> <span style="width:80%">
									<strong class="rating">4.0</strong> out of 5
								</span> </div> -->
						</div> Hi,myself Nikesh Dudhe and i joined Mitra's on april 2022 and currently i am earning
						70k to 75k
						per month, so thanks to Mitra and team for supporting me in my career.
					</blockquote>
				</div>
			</div>
			<div class="col-sm-6  padding section_padding_bottom_100">
				<div class="owl-carousel caroudl1" data-responsive-lg="1" data-responsive-md="1" data-responsive-xs="1"
					data-nav="false" data-dots="true">
					<blockquote class="text-center">
						<div class="item-meta topmargin_0">
							<div class=""> <video style='width:100%' height="300" >
									<source src="images/aashish.mp4" type="video/mp4">
									<source src="images/aashish.ogg" type="video/ogg">
									Your browser does not support the video tag.
								</video> </div>
							<h2 class="section_header margin_0" style='padding-top:20px'> <span
									class="small-text highlight">Aashish
									Thapkir</span></h2>
									<a type="button" class="waich_video waich_video1" data-toggle="modal"
									data-target="#exampleModal">
									<i class='fa fa-caret-right'></i>
</a>
							<!-- <div class="star-rating" title="Rated 4.0 out of 5"> <span style="width:80%">
									<strong class="rating">4.0</strong> out of 5
								</span> </div> -->
						</div> Hi,myself Aashish thapkir and i joined Mitra's on april 2022 and currently i am earning
						70k to 75k
						per month, so thanks to Mitra's and team for supporting me in my career.
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="testimonials" class="ls section_padding_top_100 section_padding_bottom_10" data-aos="fade-up">

	<div class="container">
		<h2 class="section_header text-center"> Rewards and Recognitions
		</h2>
		<div class="row">
			<div class="col-sm-12  padding section_padding_bottom_100">
				<div class="owl-carousel caroudl1" data-responsive-lg="1" data-responsive-md="1" data-responsive-xs="1"
					data-nav="false" data-dots="true">
					<blockquote class="text-center">
						<div class="item-meta topmargin_0">
							<div id="fade_close" onClick="lightbox_close();"></div>
							<div class=""> <video style='width:100%' height="300" class='rewards'>
									<source src="images/team/reward_video.mp4" type="video/mp4">
									<source src="images/team/reward_video.ogg" type="video/ogg">
									Your browser does not support the video tag.
								</video> </div>
							<h2 class="section_header margin_0" style='padding-top:20px'> <span
									class="small-text highlight">Aashish
									Thapkir</span></h2>

							<div>
								<a type="button" class="waich_video" data-toggle="modal"
									data-target="#exampleModal">
									<i class='fa fa-caret-right'></i>
</a>
								<!-- <a onclick="lightbox_open();" class='waich_video'></a> -->
							</div>
						</div>
					</blockquote>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="news" class="ls section_padding_top_100 section_padding_bottom_150" data-aos="fade-up">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 text-center">
				<h2 class="section_header">Recent Blog</h2>
				<p class="small-text ">Separated they live in. A small river named Duden flows by their place and
					supplies it with the necessary regelialia. It is a paradisematic country</p>

				<div class="owl-carousel owl-carosel1 text-nav" data-responsive-lg="3" data-nav="true" data-margin="30">
					<article class="post vertical-item content-padding big-padding with_border text-center">
						<div class="item-media with_icon"> <a href="blog-detail.php"><img src="images/events/05.jpg"
									alt=""></a>
							<div class="post_icon"> <a href="blog-detail.php"><i class="fa fa-eye"></i> </a></div>
						</div>
						<div class="item-content">
							<h4 class="entry-title"> <a href="blog-detail.php">Sadipscing elitr
									sed diam nonumy eirmod</a> </h4>
							<p class="content-3lines-ellipsis">At vero eos et accusam et justo duo
								dolores ea rebum clita kasd gubergren, no sea takimata.</p>
						</div>

					</article>
					<article class="post vertical-item content-padding big-padding with_border text-center">
						<div class="item-media with_icon"> <a href="blog-detail.php"><img src="images/events/05.jpg"
									alt=""></a>
							<div class="post_icon"> <a href="blog-detail.php"><i class="fa fa-eye"></i> </a></div>
						</div>
						<div class="item-content">
							<h4 class="entry-title"> <a href="blog-detail.php">Sadipscing elitr
									sed diam nonumy eirmod</a> </h4>
							<p class="content-3lines-ellipsis">At vero eos et accusam et justo duo
								dolores ea rebum clita kasd gubergren, no sea takimata.</p>
						</div>
						<!-- <footer class="item-meta small-text darklinks">
							<div> <span class="bg_text">on</span> <a href="blog-detail.php">
									<time datetime="2017-10-03T08:50:40+00:00">
										21.10.17
									</time>
								</a> </div>
							<div> <span class="bg_text">by</span> <a href="blog-right.html">
									admin
								</a> </div>
							<div> <span class="bg_text">in</span> <a href="blog-right.html">
									news
								</a> </div>
						</footer> -->
					</article>
					<article class="post vertical-item content-padding big-padding with_border text-center">
						<div class="item-media with_icon"> <a href="blog-detail.php"><img src="images/events/05.jpg"
									alt=""></a>
							<div class="post_icon"> <a href="blog-detail.php"><i class="fa fa-eye"></i> </a></div>
						</div>
						<div class="item-content">
							<h4 class="entry-title"> <a href="blog-detail.php">Sadipscing elitr
									sed diam nonumy eirmod</a> </h4>
							<p class="content-3lines-ellipsis">At vero eos et accusam et justo duo
								dolores ea rebum clita kasd gubergren, no sea takimata.</p>
						</div>
						<!-- <footer class="item-meta small-text darklinks">
							<div> <span class="bg_text">on</span> <a href="blog-detail.php">
									<time datetime="2017-10-03T08:50:40+00:00">
										19.10.17
									</time>
								</a> </div>
							<div> <span class="bg_text">by</span> <a href="blog-right.html">
									admin
								</a> </div>
							<div> <span class="bg_text">in</span> <a href="blog-right.html">
									news
								</a> </div>
						</footer> -->
					</article>

				</div>

			</div>
		</div>
	</div>
</section>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content content_modal">
			<div class="modal-header">
				<button type="button" class="close boxclose" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div id="light_box">
					<!-- <a class="" id="boxclose" onclick="lightbox_close();"></a> -->
					<video id="VisaChipCardVideo" width="" controls autoplay>
						<source src="images/team/reward_video.mp4" type="video/mp4">
						<source src="images/team/reward_video.ogg" type="video/ogg">
						Your browser does not support the video tag.
					</video>
				</div>
			</div>
			<!-- <div class="">
				
			</div> -->

		</div>
	</div>
</div>

<?php include('footer.php') ?>