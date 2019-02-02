<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="image/kemas.png">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Blog - KemasRafli</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:700|Roboto:400,500" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="blog/css/linearicons.css">
	<link rel="stylesheet" href="blog/css/font-awesome.min.css">
	<link rel="stylesheet" href="blog/css/bootstrap.css">
	<link rel="stylesheet" href="blog/css/magnific-popup.css">
	<link rel="stylesheet" href="blog/css/nice-select.css">
	<link rel="stylesheet" href="blog/css/animate.min.css">
	<link rel="stylesheet" href="blog/css/owl.carousel.css">
	<link rel="stylesheet" href="blog/css/main.css">
</head>

<body>
	<!-- Start header Area -->
	<header id="header">
		<div class="container box_1170 main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active">
                        <a id="navbarDropdown" class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
						<li><a href="http://localhost:8000/beranda">Home</a></li>
						<li><a href="http://localhost:8000/profile">Profile</a></li>
                        <li><a href="http://localhost:8000/portofolio">Portofolio</a></li>
                        <li><a href="http://localhost:8000/artikel">Blog</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- End header Area -->

	<!-- Start banner Area -->
	<section class="banner-area">
		<div class="container box_1170">
			<div class="row fullscreen d-flex align-items-center justify-content-center">
				<div class="banner-content text-center col-lg-8">
                    <h1>Tampilan Blog</h1><br>
                    <h2 class="text-white">Kemas Muhammad Rafli Azhary</h2>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Start main body Area -->
	<div class="main-body section-gap mt--30">
		<div class="container box_1170">
			<div class="row">
				<div class="col-lg-8 post-list">
					<!-- Start Post Area -->
					<section class="post-area">
						<div class="single-post-item">
							<figure>
								<img class="post-img img-fluid" src="img/posts/p1.png" alt="">
							</figure>
							<h3>
								<a href="#">Debat Capres 2019 #SiapaMenang</a>
							</h3>
							<p>Debat Capres 2019 memang momen yang sangat di tunggu - tunggu oleh banyak warga Indonesia
                                karna ini menyangkut siapakah yang akan memimpin Indonesia selama 5 Tahun kedepan.
                            </p>
							<a href="#" class="primary-btn text-uppercase mt-15">Lanjutkan membaca</a>
							<div class="post-box">
								<div class="d-flex">
									<div>
										<a href="#">
											<img class="rounded-circle" src="img/author/a1.png" alt="">
										</a>
									</div>
									<div class="post-meta">
										<div class="meta-head">
											<a href="#">KemasRafli</a>
										</div>
										<div class="meta-details">
											<ul>
												<li>
													<a href="#">
														<span class="lnr lnr-calendar-full"></span>
														2 Feb, 2019
													</a>
												</li>
												<li>
													<a href="#">
														<span class="lnr lnr-picture"></span>
														Image Post
													</a>
												</li>
												<li>
													<a href="#">
														<span class="lnr lnr-bookmark"></span>
														News
													</a>
												</li>
												<li>
													<a href="#">
														<span class="lnr lnr-bubble"></span>
														28 Comments
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="single-post-item">
							<figure>
								<img class="post-img img-fluid" src="img/posts/p2.png" alt="">
							</figure>
							<h3>
								<a href="#">Ramai diperbincangkan, siapakah Nurhadi dan Aldo?</a>
							</h3>
							<p>Capres dan Cawapres Guyonan ini sedang ramai diperbincangkan di dunia maya, kenapa?
                                karena quotenya yang sangat lucu dan tidak masuk ke akal pikiran.
                            </p>
							<a href="#" class="primary-btn text-uppercase mt-15">Lanjutkan membaca</a>
							<div class="post-box">
								<div class="d-flex">
									<div>
										<a href="#">
											<img class="rounded-circle" src="img/author/a1.png" alt="">
										</a>
									</div>
									<div class="post-meta">
										<div class="meta-head">
											<a href="#">KemasRafli</a>
										</div>
										<div class="meta-details">
											<ul>
												<li>
													<a href="#">
														<span class="lnr lnr-calendar-full"></span>
														1 Feb, 2019
													</a>
												</li>
												<li>
													<a href="#">
														<span class="lnr lnr-picture"></span>
														Image Post
													</a>
												</li>
												<li>
													<a href="#">
														<span class="lnr lnr-bookmark"></span>
														News
													</a>
												</li>
												<li>
													<a href="#">
														<span class="lnr lnr-bubble"></span>
														74 Comments
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="single-post-item">
							<figure>
								<img class="post-img img-fluid" src="img/posts/p3.png" alt="">
							</figure>
							<h3>
								<a href="#l">Edy Rahmayadi Mundur dari Ketua Umum PSSI</a>
							</h3>
							<p>Edy Rahmayadi menyatakan mundur sebagai Ketua Umum PSSI pada Minggu (20/1/2019).
                                Hal tersebut disampaikan Edy dalam Kongres PSSI yang tengah berlangsung di Bali, tepatnya di Sofitel Bali Nusa Dua Beach Resort.</p>
							<a href="#" class="primary-btn text-uppercase mt-15">Lanjutkan membaca</a>
							<div class="post-box">
								<div class="d-flex">
									<div>
										<a href="#">
											<img class="rounded-circle" src="img/author/a1.png" alt="">
										</a>
									</div>
									<div class="post-meta">
										<div class="meta-head">
											<a href="#">KemasRafli</a>
										</div>
										<div class="meta-details">
											<ul>
												<li>
													<a href="#">
														<span class="lnr lnr-calendar-full"></span>
														31 Jan, 2019
													</a>
												</li>
												<li>
													<a href="#">
														<span class="lnr lnr-picture"></span>
														Image Post
													</a>
												</li>
												<li>
													<a href="#">
														<span class="lnr lnr-bookmark"></span>
														News
													</a>
												</li>
												<li>
													<a href="#">
														<span class="lnr lnr-bubble"></span>
														56 Comments
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- Start Post Area -->
				</div>

				<div class="col-lg-4 sidebar">
					<div class="single-widget search-widget">
						<form class="example" action="#" style="margin:auto;max-width:300px">
							<input type="text" placeholder="Search Posts" name="search2">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>

					<div class="single-widget protfolio-widget">
						<img class="img-fluid" src="img/blog/user2.png" alt="">
						<a href="#">
							<h4>Kemas Muhammad Rafli Azhary</h4>
						</a>
						<p>
							"Belajar, belajar dan belajar"
						</p>
						<ul>
							<li><a href="http://github.com/KemasRafli" target="blank"><i class="fa fa-github"></i></a></li>
							<li><a href="http://kemasmrafli.space" target="blank"><i class="fa fa-safari"></i></a></li>
							<li><a href="https://instagram.com/kemasrafli/" target="blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>

					<div class="single-widget popular-posts-widget">
						<h4 class="title">Postingan terpopuler</h4>
						<div class="blog-list ">
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb">
									<img class="img-fluid" src="img/blog/r1.png" alt="">
								</div>
								<div class="popular-details">
									<a href="#">
										<h4>Debat Capres</h4>
									</a>
									<p class="text-uppercase">8 Jam yang lalu</p>
								</div>
							</div>
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb">
									<img class="img-fluid" src="img/blog/r2.png" alt="">
								</div>
								<div class="popular-details">
									<a href="#">
										<h4>Nurhadi-Aldo</h4>
									</a>
									<p class="text-uppercase">1 Hari yang lalu</p>
								</div>
							</div>
							<div class="single-popular-post d-flex flex-row">
								<div class="popular-thumb">
									<img class="img-fluid" src="img/blog/r3.png" alt="">
								</div>
								<div class="popular-details">
									<a href="#">
										<h4>80 Juta Sakit?</h4>
									</a>
									<p class="text-uppercase">2 Hari yang lalu</p>
								</div>
							</div>
						</div>
					</div>

					<div class="single-widget newsletter-widget">
						<h4 class="title">Newsletter</h4>
						<div id="mc_embed_signup">
							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="">
								<div class="form-group" style="width: 100%">
									<input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '"
									 required="" type="email">
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<button class="primary-btn text-uppercase">
										Subscribe Now
										<span class="lnr lnr-arrow-right"></span>
									</button>
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- Start main body Area -->
      <!-- start footer Area -->		
      <footer class="footer-area">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text mb-4 text-white">Copyright ©2019 All rights lets move out | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="http://github.com/KemasRafli" target="blank"><i class="fa fa-github"></i></a>
							<a href="http://kemasmrafli.space" target="blank"><i class="fa fa-safari"></i></a>
							<a href="https://instagram.com/kemasrafli/" target="blank"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

	<script src="blog/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="blog/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="blog/js/easing.min.js"></script>
	<script src="blog/js/hoverIntent.js"></script>
	<script src="blog/js/superfish.min.js"></script>
	<script src="blog/js/jquery.ajaxchimp.min.js"></script>
	<script src="blog/js/jquery.magnific-popup.min.js"></script>
	<script src="blog/js/owl.carousel.min.js"></script>
	<script src="blog/js/jquery.nice-select.min.js"></script>
	<script src="blog/js/waypoints.min.js"></script>
	<script src="blog/js/mail-script.js"></script>
	<script src="blog/js/main.js"></script>
</body>

</html>