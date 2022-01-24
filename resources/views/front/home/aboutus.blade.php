<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="UP Agency" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('front/css/custom.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- Document Title
	============================================= -->
	<title>About Us</title>
</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">


	
		
			<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container">
	<!-- Top Bar
		============================================= -->
		<div id="top-bar">
			<div class="container clearfix top-bar-fix">

				<div class="row justify-content-between">
					<div class="col-12 col-md-auto">

						<!-- Top Links
						============================================= -->
						
							<ul id="top-social" class="lefty">
							<li class="lang-switch">
									<a  id="index_en" href="javascript:void(0)">
										<img src="https://wq3.com/uploads/language-icons/16327053281384740823.png" style="border-radius: 50%;border: 1px solid lightblue;margin:0px 2px;"> En
									</a>
									<a  id="index_ar" href="javascript:void(0)">
										<img src="https://wq3.com/uploads/language-icons/1632078760571914258.png" style="border-radius: 50%;border: 1px solid #f14131;margin:0px 2px;"> Ar
									</a>				
								</li>
								<li><a href="tel:+201200007010" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+201200007010</span></a></li>
								<li><a href="#" class="si-email"><span class="ts-icon"><i class="icon-line-heart"></i></span><span class="ts-text">Follow Us</span></a></li>
								<li><a href="mailto:HR@Mashpremiere.net" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">HR@Mashpremiere.net</span></a></li>
							</ul>
						<!-- .top-links end -->

					</div>

					<div class="col-12 col-md-auto">

						<!-- Top Social
						============================================= -->
						<ul id="top-social">
							<li><a href="https://www.facebook.com/MashPremiere/" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li class="d-none d-sm-flex"><a href="https://www.youtube.com/channel/UC-y-GnyUg4AKogTqj1TXCMw" class="si-pinterest"><span class="ts-icon"><i class="icon-line-youtube"></i></span><span class="ts-text">Youtube</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
						</ul><!-- #top-social end -->

					</div>

				</div>

			</div>
		</div><!-- #top-bar end -->


				<div class="header-row">

			<!-- Logo
			============================================= -->
			<div id="logo">
			<div id="logo">
				<a href="{{route('front_index')}}" class="standard-logo" data-dark-logo="images/Artboard-6.png"><img src="{{asset('images/Artboard-5.png')}}" alt="Canvas Logo"/></a>
				<a href="{{route('front_index')}}" class="retina-logo" data-dark-logo="images/Artboard-5.png"><img src="{{asset('images/Artboard-6.png')}}" alt="Canvas Logo"/></a>
			</div><!-- #logo end -->
			</div><!-- #logo end -->
			
			<div id="primary-menu-trigger">
				<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
			</div>

			<!-- Primary Navigation
			============================================= -->
			<nav class="primary-menu">

				<ul class="menu-container">
					<li class="menu-item">
						<a class="menu-link" href="{{route('front_index')}}"><div>Home</div></a>
					</li>
					<li class="menu-item">
						<a class="menu-link" href="{{route('front_about_us')}}"><div>About Us</div></a>
					</li>

					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_products')}}"><div>Products</div></a>
					</li>
					
					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_blogs')}}"><div>Blogs</div></a>
					</li>
				
					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_covid_19')}}"><div>Covid 19</div></a>
					</li>

					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_careers')}}"><div>Careers</div></a>
					</li>

					<li class="menu-item mega-menu">
						<a class="menu-link" href="{{route('front_contactus')}}"><div>Contact Us</div></a>
					</li>
				</ul>

			</nav><!-- #primary-menu end -->
				</div>
			</div>
		</div>
		<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		@if ($about->main_image)
			<section id="page-title" class="page-title-parallax page-title include-header" style="padding: 250px 0; background-image: url('{{$about->main_image}}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
		@else
			<section id="page-title" class="page-title-parallax page-title include-header" style="padding: 250px 0; background-image: url('{{asset('front/images/slider/Artboard-2.jpg')}}'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -500px;">
		@endif

			<div class="container clearfix">
				<h1>{{$about->title}}</h1>
				<span>{{$about->sub_title}}</span>
			</div>

		</section><!-- #page-title end -->


		<section id='contentDeleted' style="height: 600px; background-color: #FFF;" data-animate="fadeOut"> </section> 
		<!-- this section to fix some early loading problem cause animation on about section to be done without reaching it-->

			<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row col-mb-50 mb-0">

						<div class="col-lg-4">

							<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
								<h4>Why choose <span>Us</span>.</h4>
							</div>

							<p>
								{{$about->why_cheose_us}}
							</p>

						</div>

						<div class="col-lg-4">

							<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
								<h4>Our <span>MISSION</span>.</h4>
							</div>

							<p>
								{{$about->our_mission}}
							</p>

						</div>

						<div class="col-lg-4">

							<div class="heading-block fancy-title border-bottom-0 title-bottom-border">
								<h4>Our <span>Vision</span>.</h4>
							</div>

							<p>
								{{$about->our_vision}}
							</p>

						</div>

						

					</div>

				</div>

	<!-- counter
		============================================= -->
		<section id="content" class="counter-fix">
			<div class="content-wrap">
				<div class="container clearfix">

				

					<div class="row col-mb-50">
						<div class="col-sm-6 col-lg-6 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-virus"></i>
							<div class="counter  " style="color: #ed2f2a;"><span data-from="100" data-to="500000" data-refresh-interval="50" data-speed="2000"></span></div>
							<h5>Tested For & Cured From Hepatitis C Virus</h5>
						</div>

						<div class="col-sm-6 col-lg-3 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-line-users"></i>
							<div class="counter  " style="color: #ed2f2a;"><span data-from="100" data-to="1200" data-refresh-interval="50" data-speed="2500"></span></div>
							<h5>Employees </h5>
						</div>

						<div class="col-sm-6 col-lg-3 text-center">
							<i class="i-plain i-xlarge mx-auto mb-0 icon-pill"></i>
							<div class="counter  " style="color: #ed2f2a;"><span data-from="100" data-to="110" data-refresh-interval="50" data-speed="3500"></span></div>
							<h5>Products</h5>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #counter end -->

				<div class="row align-items-stretch">
					@if ($about->our_strategy_image)
					<div class="col-md-5 col-padding min-vh-75" style=" background: url('{{$about->our_strategy_image}}'); center center no-repeat; background-size: cover;"></div>
					@else
					<div class="col-md-5 col-padding min-vh-75" style="background: url('{{asset('front/images/talent-can-come.png')}}'); center center no-repeat; background-size: cover;"></div>
					@endif

					<div class="col-md-7 col-padding">
						<div>
							<div class="heading-block">
								<h3>OUR strategy</h3>
							</div>

							<div class="row col-mb-50">

								<div class="col-lg-6">
									<p>
										{{$about->our_strategy}}
									</p>
								</div>

								<div class="col-lg-6">
									<ul class="skills">
										<li data-percent="80">
											<span>New Medicine</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="80" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="60">
											<span>Total Services</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="90">
											<span>Recuperated Patients</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="90" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="70">
											<span>conferences and events</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="70" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
										<li data-percent="85">
											<span> Developing Teams</span>
											<div class="progress">
												<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="85" data-refresh-interval="30" data-speed="1100"></span>%</div></div>
											</div>
										</li>
									</ul>
								</div>

							</div>

						</div>
					</div>

				</div>

				<div class="row align-items-stretch bottommargin-lg">
					@if ($about->our_strategy_image)
					<div class="col-md-5 col-padding min-vh-75 order-md-last" style="background: url('{{$about->our_values_image}}') center center no-repeat; background-size: cover;"></div>
					@else
					<div class="col-md-5 col-padding min-vh-75 order-md-last" style="background: url('{{asset('front/images/New-Project-74.png')}}') center center no-repeat; background-size: cover;"></div>
					@endif

					<div class="col-md-7 col-padding" style="background-color: #F5F5F5;">
						<div>
							<div class="heading-block">
								<h3>OUR VALUES</h3>
							</div>

							<div class="row col-mb-50">

								<div class="col-lg-6">
									<p > {{$about->our_values}} </p>
								</div>

								<div class="col-lg-6" style="padding: 0px;">
									<ul class="skills">
										<li data-percent="100">
											<span>Respect all the diversities for all individuals.											</span>
											<div class="progress">
											</div>
										</li>
										<li data-percent="100">
											<span>Demonstrate commitment to integrity and ethics.
											</span>
											<div class="progress">
											</div>
										</li>
										<li data-percent="100">
											<span>Keep promises made to others.
											</span>
											<div class="progress">
											</div>
										</li>
										<li data-percent="100">
											<span>Help, serve and handle positively our customers.
											</span>
											<div class="progress">
											</div>
										</li>
										<li data-percent="100">
											<span>Implement innovative ideas and solutions.
											</span>
											<div class="progress">
											</div>
										</li>
									</ul>
								</div>

							</div>

						</div>
					</div>

				</div>

	<!-- testimonials
		============================================= -->
		<section id="content" class="testimonials-edit-">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="fslider testimonial testimonial-full " data-animation="fade" data-arrows="false">
						<h3 style="text-align:center;">WHAT PEOPLE SAY</h3>
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-content">
										<p>They contacted us when rooms were available close to our work site. Their rates are always the best and they stand behind their commitment. On one occasion, we had an issue at the time of check-in. It ended up being the hotel had overbooked. We contacted Check In Now and it was immediately resolved, along with courtesy calls to us inquiring about our situation and comfort.</p>
										<div class="xon">
											JIMMY CHIN
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-content">
										<p>Resolution Labs would definitely recommend contacting Check In Now anytime there is a need for accommodations.</br> They will be there for you-guaranteed!</p>
										<div class="xon">
											BILL BRYSON
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #testimonials end -->


					<!-- logos -->
				<div class="container clearfix">

					<div class="clear"></div>

					<div class="heading-block center" style="margin: 20px auto;">
						<h4>Our Clients</h4>
					</div>

					<ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0">
						<li class="grid-item"><a href="http://logofury.com/logo/enzo.html"><img src="{{asset('front/images/clients/1.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com"><img src="{{asset('front/images/clients/2.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofaves.com/2021/03/grabbt/"><img src="{{asset('front/images/clients/3.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofaves.com/2021/01/ladera-granola/"><img src="{{asset('front/images/clients/4.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofaves.com/2021/02/hershel-farms/"><img src="{{asset('front/images/clients/5.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/food-fight-radio.html"><img src="{{asset('front/images/clients/6.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com"><img src="{{asset('front/images/clients/7.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/up-travel.html"><img src="{{asset('front/images/clients/8.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/caffi-bardi.html"><img src="{{asset('front/images/clients/9.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/logo/bignix-design.html"><img src="{{asset('front/images/clients/10.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/"><img src="{{asset('front/images/clients/11.png')}}" alt="Clients"></a></li>
						<li class="grid-item"><a href="http://logofury.com/"><img src="{{asset('front/images/clients/12.png')}}" alt="Clients"></a></li>
					</ul>
				</div> <!-- end of logos -->

			</div>
		</section><!-- #content end -->

<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">
				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-6">

							<div class="widget clearfix">

							<a href="{{route('front_index')}}" class="standard-logo" data-dark-logo="images/Artboard-6.png"><img src="{{asset('images/Artboard-5.png')}}" height="100px" alt="Canvas Logo"/></a>

								<p style="font-weight: bold;margin-bottom: 15px">BE OUR GUEST</p>

								<div class="py-2" style="background: url('{{asset('front/images/world-map.png')}}') no-repeat center center;">
									<div class="row col-mb-30">
										<div class="col-6">
											<address class="mb-0">
												<span title="Headquarters" style="display: inline-block;margin-bottom: 7px;"><strong>Headquarter:</strong></span><br>
												100 S. Ashely Drive, Suite 600, Tampa FL 33602
											</address>
										</div>
										<div class="col-6">
											<span title="Phone Number"><strong>Phone:</strong></span> 888-808-0988<br>
											<span title="Email Address"><strong>Email:</strong></span> xxxxxxxx@xxx.com<br>
											<span title="Fax"><strong>Support:</strong></span> xxxxxxxx@xxx.com
										</div>
									</div>
								</div>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-rounded topmargin-sm si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>

							</div>

						</div>

						<div class="col-sm-6 col-lg-3">

							<div class="widget clearfix">
								<h4>Recent Blogs </h4>

								<div class="posts-sm row col-mb-30" id="post-list-footer">
									@foreach ($recentBlogs as $recentBlog)
									<div class="entry col-12">
										<div class="grid-inner row">
											<div class="col">
												<div class="entry-title">
													<h4><a href="{{route('front_blog_detail',['blog'=>$recentBlog->id])}}">{{$recentBlog->title}}</a></h4>
												</div>
												<div class="entry-meta">
													<ul>
														<li>{{$recentBlog->updated_at->toFormattedDateString()}}</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								</div>

							</div>

						</div>

						<div class="col-sm-6 col-lg-3">

							<div class="widget quick-contact-widget form-widget clearfix">

								<h4>Send Message</h4>

								<div class="form-result"></div>

								<form id="quick-contact-form" name="quick-contact-form" action="{{route('front_contactus_save')}}" method="post" class="quick-contact-form mb-0">
									{{ csrf_field() }}
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>

									<div class="input-group mx-auto">
										<div class="input-group-text"><i class="icon-user"></i></div>
										<input type="text" class="required form-control" id="quick-contact-form-name" name="name" value="" placeholder="Full Name" />
									</div>
									<div class="input-group mx-auto">
										<div class="input-group-text"><i class="icon-email2"></i></div>
										<input type="text" class="required form-control email" id="quick-contact-form-email" name="email" value="" placeholder="Email Address" />
									</div>
									<textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="message" rows="4" cols="30" placeholder="Message"></textarea>
									<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<input type="hidden" name="prefix" value="quick-contact-form-">
									<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-outline btn-roundeded" style="background-color: #273b76;color: #FFF;" value="submit">Send Email</button>

								</form>

							</div>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">
					<div class="w-100 text-center">
						Copyrights &copy; 2020 All Rights Reserved by GrowYa.
					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('front/js/jquery.js')}}"></script>
	<script src="{{asset('front/js/plugins.min.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{asset('front/js/functions.js')}}"></script>
	<script>
		$(document).on('click', '#index_ar', function(){
			// console.log("Output;");  
			// console.log(location.hostname);
			// console.log(document.domain);
			// alert(window.location.hostname)

			 //console.log("document.URL : "+document.URL);
			// console.log("document.location.href : "+document.location.href);
			// console.log("document.location.origin : "+document.location.origin);
			// console.log("document.location.hostname : "+document.location.hostname);
			// console.log("document.location.host : "+document.location.host);
			// console.log("document.location.pathname : "+document.location.pathname);
			window.location.href = document.location.origin + document.location.pathname.replace('en','ar')
		})
	</script>
</body>
</html>

	
