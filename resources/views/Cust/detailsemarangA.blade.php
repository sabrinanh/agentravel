@extends('Cust/layout/nav')
@section('contain')
<main id = "main"class="main">

	<div class="hero page-inner overlay" style="background-image: url('images/hero_bg_3.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Semarang Tour Package</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="home">Home</a></li>
							<li class="breadcrumb-item "><a href="properties.html">Properties</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">Semarang Tour Package</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-7">
					<div class="img-property-slide-wrap">
						<div class="img-property-slide">
							<img src="images/img_1.jpg" alt="Image" class="img-fluid">
							<img src="images/img_2.jpg" alt="Image" class="img-fluid">
							<img src="images/img_3.jpg" alt="Image" class="img-fluid">
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<h2 class="heading text-primary">Rp. 700.000 /pax</h2>
					<p class="meta">California, United States</p>
					<h5 class="heading text-primary">Destinasi Wisata:</h5>
					<p class="text-black-30">1. Masiid Agung</p>
					<p class="text-black-30">2. Sam Poo Kong</p>
					<p class="text-black-30">3. Kota Lama</p>
					<p class="text-black-30">4. Lawang Sewu</p>
					<p class="text-black-30">5. Firdaus Fatima</p>
					<p class="text-black-30">6. Kp. Semarang</p>

					<h5 class="heading text-primary">Fasilitas Tour:</h5>
					<p class="text-black-30">1. Transportasi Bus Pariwisata</p>
					<p class="text-black-30">2. BIG BUS seat 2-2 / 48</p>
					<p class="text-black-30">3. Hotel 1 malam (1 kamar isi 3 orang)</p>
					<p class="text-black-30">4. Tiket Masuk Wisata</p>
					<p class="text-black-30">5. Makan 1x prasmanan</p>
					<p class="text-black-30">6. Snack 1x</p>
					<p class="text-black-30">7. Air Mineral botol</p>
					<p class="text-black-30">8. Free Dokumentasi softcopy</p>
					<p class="text-black-30">9. Free Tol Parkir</p>
					<p class="text-black-30">10. Tour Leader & Tour Guide Lokal</p>


					<div class="d-block agent-box p-5">
						<div class="img mb-4">
							<img src="images/person_2-min.jpg" alt="Image" class="img-fluid">
						</div>
						<div class="text">
							<h3 class="mb-0">Alicia Huston</h3>
							<div class="meta mb-3">Real Estate</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione laborum quo quos omnis sed magnam id ducimus saepe</p>
							<ul class="list-unstyled social dark-hover d-flex">
								<li class="me-1"><a href="#"><span class="icon-instagram"></span></a></li>
								<li class="me-1"><a href="#"><span class="icon-twitter"></span></a></li>
								<li class="me-1"><a href="#"><span class="icon-facebook"></span></a></li>
								<li class="me-1"><a href="#"><span class="icon-linkedin"></span></a></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
