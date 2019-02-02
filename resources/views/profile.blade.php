
  <!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
		<!-- Favicon-->
		<link rel="shortcut icon" href="image/kemas.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Profile - KemasRafli</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel='stylesheet' href='css/simplelightbox.min.css' >
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/style.css">

		</head>
		<body>
			<!-- Start Header Area -->
			<header class="default-header">
				<div class="container">
					<div class="header-wrap">
						<div class="header-top d-flex justify-content-between align-items-center">
							<div class="main-menubar d-flex align-items-center">
								<nav>
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
									</div>
									<a href="http://localhost:8000/beranda">Home</a>
									<a href="http://localhost:8000/profile">Profile</a>
									<a href="http://localhost:8000/portofolio">Portofolio</a>	
									<a href="http://localhost:8000/artikel">Blog</a>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
            <!-- End Header Area -->
			
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">			
				<div class="slider"><div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				        <div class="carousel-inner" role="listbox">
				          <!-- Slide One - Set the background image for this slide in the line below -->
				          <div class="carousel-item active" style="background-image: url('img/slider4.jpg')">
				            <div class="carousel-caption d-md-block">
				              <h2 class="text-uppercase text-left">PROFILE</h2>
				              <p class="text-left">
								Profile dari Kemas Muhammad Rafli Azhary
				              </p>
				            </div>
				          </div>
			</section>
			<!-- End banner Area -->

            <!-- Start About Area -->
        <section class="About-area section-gap" id="about">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-lg-6 about-left">
							<h1>
								Kemas Muhammad <br>
								<h1 class="text-right">Rafli Azhary</h1>
							</h1><br>
                            <p style="text-align: justify;">
                        Lahir di Depok Tahun 2003.
                        Memang saya lebih muda 1 atau 2 tahun dari teman sekelas namun itu tidak memengaruhi semangat belajar saya.
                        <br>
						Saat ini saya bersekolah di SMK Taruna Bhakti, kelas 11 Jurusan Rekayasa Perangkat Lunak. Banyak hal yang saya dapat ketika bersekolah disini.
						Mulai dari ilmu, teman, dan masih banyak lagi. Saya tinggal di daerah Depok Timur, lebih tepatnya di Jalan Kayumanis 3.
							</p>
                        </div>
						<div class="col-lg-6 about-right">
							<img class="img-fluid" src="img/about-img.jpeg">
						</div>
					</div>
				</div>	
			</section>
            <!-- End About Area -->
            
        <!-- start footer Area -->		
        <footer class="footer-area">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright ©2019 All rights lets move out | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="http://github.com/KemasRafli" target="blank"><i class="fa fa-github"></i></a>
							<a href="http://kemasmrafli.space" target="blank"><i class="fa fa-safari"></i></a>
							<a href="https://instagram.com/kemasrafli/" target="blank"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/parallax.min.js"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script type="text/javascript" src="js/simple-lightbox.min.js"></script>
			<script src="js/main.js"></script>	
		</body>
  </html>