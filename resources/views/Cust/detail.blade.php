@extends('Cust/layout/nav')
@section('contain')
<main id = "main"class="main">


	<div class="hero page-inner overlay" style="background-image: url('{{ asset($ptours->img) }}')">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">{{$ptours->nama }}</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="home">Home</a></li>
							<li class="breadcrumb-item "><a href="tourpackages">Tour Packages</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">{{$ptours->nama }}</li>
						</ol>
					</nav>


				</div>
			</div>


		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-6">
					<div class="img-property-slide-wrap">
						<div class="img-property-slide">
							<img src="{{ asset("$ptours->img") }}" alt="Image" class="img-fluid">
							<img src="{{ asset("$ptours->img") }}" alt="Image" class="img-fluid">
							<img src="{{ asset("$ptours->img") }}" alt="Image" class="img-fluid">
						</div>
					</div>
				</div>

				<div class="col-lg-5">
					<h2 class="heading text-primary">Rp {{number_format($ptours->harga )}} /pax</h2>
					<p class="meta">{{($ptours->hari)}} hari {{($ptours->malam)}} malam</p>
					<h5 class="heading text-primary">Destinasi Wisata:</h5>
					<p class="text-black-30">{{($ptours->destinasi)}}</p>

					<h5 class="heading text-primary">Fasilitas Tour:</h5>
					<p class="text-black-30">{{($ptours->fasilitas)}}</p>

					<a href="{{ url('info')}}/{{ $ptours->id }}" class="btn btn-primary py-2 px-3">Pesan</a>


					<!-- <div class="d-block agent-box p-5">
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
	</div> -->

	<!-- <div class="site-footer">
		<div class="container"> -->

			<!-- <div class="row">
				<div class="col-lg-4">
					<div class="widget">
						<h3>Contact</h3>
						<address>43 Raymouth Rd. Baltemoer, London 3910</address>
						<ul class="list-unstyled links">
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
						</ul> -->
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
				<!-- <div class="col-lg-4">
					<div class="widget">
						<h3>Sources</h3>
						<ul class="list-unstyled float-start links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Vision</a></li>
							<li><a href="#">Mission</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul> -->
						<!-- <ul class="list-unstyled float-start links">
							<li><a href="#">Partners</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="#">Creative</a></li>
						</ul>
					</div>  /.widget -->
				</div> <!-- /.col-lg-4 -->
				<!-- <div class="col-lg-4">
					<div class="widget">
						<h3>Links</h3>
						<ul class="list-unstyled links">
							<li><a href="#">Our Vision</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Contact us</a></li>
						</ul> -->

						<!-- <ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul> --> -->
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-4 -->
			</div> <!-- /.row -->

        </main>
@endsection
