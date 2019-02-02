<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
		<title>Portofolio - KemasRafli</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
            <link rel="stylesheet" href="css/style.css">
            
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
		</head>
		<body>
			<!-- Start banner Area -->
			<section class="generic-banner relative">
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
				          <div class="carousel-item active" style="background-image: url('img/p2.jpg')">
				            <div class="carousel-caption d-md-block">
				              <h2 class="text-uppercase text-right">PORTOFOLIO</h2>
				              <p class="text-right">
								Portofolio dari Kemas Muhammad Rafli Azhary
				              </p>
				            </div>
				          </div>
			</section>
            <!-- End banner Area -->
            
            <!-- Start About Area -->
            <section class="About-area section-gap" id="about" style="background-color: white;">
				<div class="container">
					<div class="row d-flex align-items-center">
                    <div class="col-lg-6 about-left">
							<img class="img-fluid" src="img/depan-img.jpeg">
						</div>
						<div class="col-lg-6 about-right">
							<h1>
							Kemas Muhammad <br>
							<h1 class="text-right">Rafli Azhary</h1>
                            <p style="text-align: justify;">
                            Pendidikan Formal:
                            <ul class="text-left">SDN Bakti Jaya 04   = Tahun 2008 s/d Tahun 2014</ul>
                            <ul class="text-left">MTs Nur Al - Zahrah = Tahun 2014 s/d Tahun 2017</ul>
                            <ul class="text-left">SMK Taruna Bhakti   = Tahun 2017 s/d Sekarang</ul>
                            
                            <br><br>
                            <p class="text-left">Jurusan: RPL</p>
                            <ul style="text-align: justify;">Rekayasa perangkat lunak adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembanganan perangkat lunak dan manajemen kualitas.</ul>        
                            </p>
                        </div>
					</div>
				</div>	
            </section>
            <hr>
            <!-- End About Area -->
            	
			<!-- Start Generic Area -->
			<section class="about-generic-area pb-10 section-gap">
				<div class="container">
					<h2 class="about-title mb-30 mt-30">Hal - hal yang sudah dipelajari</h2>
					<div class="row">
						<div class="col-md-12">
                        <div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto">
                        <script>
                        Highcharts.chart('container', {
                            chart: {
                                plotBackgroundColor: null,
                                plotBorderWidth: null,
                                plotShadow: false,
                                type: 'pie'
                            },
                            title: {
                                text: 'Bahasa Pemrograman'
                            },
                            tooltip: {
                                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                            },
                            plotOptions: {
                                pie: {
                                    allowPointSelect: true,
                                    cursor: 'pointer',
                                    dataLabels: {
                                        enabled: false
                                    },
                                    showInLegend: true
                                }
                            },
                                series: [{
                                    name: 'Brands',
                                    colorByPoint: true,
                                    data: [{
                                        name: 'HTML',
                                        y: 61.41,
                                        sliced: true,
                                        selected: true
                                    }, {
                                        name: 'CSS',
                                        y: 20.84
                                    }, {
                                        name: 'Javascript',
                                        y: 6.85
                                    }, {
                                        name: 'PHP',
                                        y: 4.67
                                    }]
                                }]
                            });
                            </script>
                        </div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Generic Start -->		

			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white text-left">Copyright ©2019 All rights lets move out | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
						<div class="col-lg-4 col-sm-12 footer-social">
                        <a href="http://github.com/KemasRafli" target="blank"><i class="fa fa-github"></i></a>
						<a href="http://kemasmrafli.space" target="blank"><i class="fa fa-safari"></i></a>
						<a href="https://instagram.com/kemasrafli/" target="blank"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	
			
		</div>
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/main.js"></script>
	</body>
</html>