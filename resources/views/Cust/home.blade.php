@extends('Cust/layout/nav')
@section('contain')
<main id = "main"class="main">
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
					<p><a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">View all destination</a></p>
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
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="detailbaliA" class="btn btn-primary py-2 px-3">See details</a>
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
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="detaillombok" class="btn btn-primary py-2 px-3">See details</a>
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
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="detailbandung" class="btn btn-primary py-2 px-3">See details</a>
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
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="detailmalangA" class="btn btn-primary py-2 px-3">See details</a>
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
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="detaildieng" class="btn btn-primary py-2 px-3">See details</a>
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
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="detailkarimun" class="btn btn-primary py-2 px-3">See details</a>
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
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
											</span>
										</div>

										<a href="detailsemarangA" class="btn btn-primary py-2 px-3">See details</a>
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
												<span class="caption">2 beds</span>
											</span>
											<span class="d-block d-flex align-items-center">
												<span class="icon-bath me-2"></span>
												<span class="caption">2 baths</span>
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

										<a href="detailrajaampat" class="btn btn-primary py-2 px-3">See details</a>
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

	<div class="section sec-testimonials">
		<div class="container">
			<div class="row mb-5 align-items-center">
				<div class="col-md-6">
					<h2 class="font-weight-bold heading text-primary mb-4 mb-md-0">Customer Says</h2>
				</div>
				<div class="col-md-6 text-md-end">
					<div id="testimonial-nav">
						<span class="prev" data-controls="prev">Prev</span>

						<span class="next" data-controls="next">Next</span>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">

				</div>
			</div>
			<div class="testimonial-slider-wrap">
				<div class="testimonial-slider">
					<div class="item">
						<div class="testimonial">
							<img src="images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">James Smith</h3>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Designer, Co-founder</p>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">Mike Houston</h3>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Designer, Co-founder</p>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">Cameron Webster</h3>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Designer, Co-founder</p>
						</div>
					</div>

					<div class="item">
						<div class="testimonial">
							<img src="images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4">
							<div class="rate">
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
								<span class="icon-star text-warning"></span>
							</div>
							<h3 class="h5 text-primary mb-4">Dave Smith</h3>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
							<p class="text-black-50">Designer, Co-founder</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>
@endsection
