<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Untree.co">
	<link rel="shortcut icon" href="favicon.png">

	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

	<title>Holidayz &mdash; </title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<a href="home" class="logo m-0 float-start">Holidayz</a>

					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li class="active"><a href="homeguest">Home</a></li>
						<li>
						<a href="tourpackguest">Tour Packages</a>
						<li><a href="aboutguest">About</a></li>
						<li><a class="btn btn-success btn-sm" href="signIn" role="button">Sign In</a></li>
					</ul>

					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav>

	<div class="hero">


		<div class="hero-slide">
			<div class="img overlay" style="background-image: url('images/Bromo1.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/Bromo2.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/Lombok.jpg')"></div>
			<div class="img overlay" style="background-image: url('images/LaboanBajo.jpg')"></div>
		</div>

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center">
					<h1 class="heading" data-aos="fade-up">Easiest way to find your tour</h1>
					<form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up" data-aos-delay="200">
						<input type="text" class="form-control px-4" placeholder="Your ZIP code or City. e.g. New York">
						<button type="submit" class="btn btn-primary">Search</button>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-lg-6">
					<h2 class="font-weight-bold text-primary heading">Popular Destination</h2>
				</div>
				<div class="col-lg-6 text-lg-end">
					<!-- <p><a href="tourpackages" target="_blank" class="btn btn-primary text-white py-3 px-4">View all destination</a></p> -->
				</div>
			</div>
			<div class="row">

				<div class="col-12">


					<div class="property-slider-wrap">



						<div class="property-slider">

							<div class="property-item">

								<a href="detailbali" class="img">
									<img src="images/Bali2.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>Rp 950.000 /pax</span></div>
									<div>
										<span class="d-block mb-2 text-black-50"></span>
										<span class="city d-block mb-3">Bali A</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">3 Hari</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 Malam</span>
											</span>
										</div>

										<a href="detbaliA" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="detaillombok" class="img">
									<img src="images/lombok2.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>Rp 1.500.000 /pax</span></div>
									<div>
										<span class="d-block mb-2 text-black-50"></span>
										<span class="city d-block mb-3">Lombok</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">3 Hari</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 Malam</span>
											</span>
										</div>

										<a href="detlombok" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="detailbandung" class="img">
									<img src="images/bandung.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>Rp 750.000 /pax</span></div>
									<div>
										<span class="d-block mb-2 text-black-50"></span>
										<span class="city d-block mb-3">Bandung</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 Hari</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">1 Malam</span>
											</span>
										</div>

										<a href="detbandung" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="detailmalang" class="img">
									<img src="images/malang.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>Rp 450.000 /pax</span></div>
									<div>
										<span class="d-block mb-2 text-black-50"></span>
										<span class="city d-block mb-3">Malang A</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 Hari</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">1 Malam</span>
											</span>
										</div>

										<a href="detmalangA" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="detaildieng" class="img">
									<img src="images/Dieng.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>Rp 699.000 /pax</span></div>
									<div>
										<span class="d-block mb-2 text-black-50"></span>
										<span class="city d-block mb-3">Dieng</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 Hari</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">1 Malam</span>
											</span>
										</div>

										<a href="detdieng" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="detailkarimun" class="img">
									<img src="images/karimun.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>Rp 850.000 /pax</span></div>
									<div>
										<span class="d-block mb-2 text-black-50"></span>
										<span class="city d-block mb-3">Karimun Jawa</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">3 Hari</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 Malam</span>
											</span>
										</div>

										<a href="detkarimun" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="detailsemarang" class="img">
									<img src="images/semarang.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>Rp 700.000 /pax</span></div>
									<div>
										<span class="d-block mb-2 text-black-50"></span>
										<span class="city d-block mb-3">Semarang A</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 Hari</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">1 Malam</span>
											</span>
										</div>

										<a href="detsemarangA" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="detaillabuan" class="img">
									<img src="images/laboanbajo2.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>Rp 750.000 /pax</span></div>
									<div>
										<span class="d-block mb-2 text-black-50"></span>
										<span class="city d-block mb-3">Labuan Bajo</span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">2 Hari</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">1 Malam</span>
											</span>
										</div>

										<a href="detaillabuan" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->

							<div class="property-item">

								<a href="" class="img">
									<img src="images/rajaampat.jpg" alt="Image" class="img-fluid">
								</a>

								<div class="property-content">
									<div class="price mb-2"><span>Rp 3.999.999 /pax </span></div>
									<div>
										<span class="d-block mb-2 text-black-50"></span>
										<span class="city d-block mb-3">Raja Ampat</span>
										<span class="city d-block mb-3"></span>

										<div class="specs d-flex mb-4">
											<span class="d-block d-flex align-items-center me-3">
												<span class="icon-bed me-2"></span>
												<span class="caption">3 Hari</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 Malam</span>
											</span>
										</div>

										<a href="detrajaampat" class="btn btn-primary py-2 px-3">See details</a>
									</div>
								</div>
							</div> <!-- .item -->


						</div>


						<div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
							<span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
							<span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	






    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/navbar.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>
  </body>
  </html>
