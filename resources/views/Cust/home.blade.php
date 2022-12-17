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
					<p><a href="tourpackages" target="_blank" class="btn btn-primary text-white py-3 px-4">View all destination</a></p>
				</div>
			</div>

            <div class="card-group">
                @foreach ($ptours as $ptours)
                <div class="card m-2"  border: 1px solid blue>
                  <img class="card-img-top"  width="200" src="{{ $ptours->img }}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="price mb-2" style="color: #005555"><span><b>Rp {{number_format($ptours->harga )}} /pax</b></h5>
                    <h5 class="card-title"><b>{{$ptours->nama}}</b></h5>
                    <p class="card-text">{{($ptours->hari)}} hari {{($ptours->malam)}} malam</p>
                    <a href="{{ url('detail')}}/{{ $ptours->id }}" class="btn btn-primary">See Details</a>
                  </div>
                </div>
                @endforeach
            </div>

            {{-- @foreach ($ptours as $p)
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $p->img }}" class="card-img-top" alt="...">
                        <div>
                        <div class="card-body">
                        <h5 class="price mb-2" style="color: #005555"><span><b>Rp {{number_format($p->harga )}} /pax</b></h5>
                          <h5 class="card-title"><b>{{$p->nama}}</b></h5>
                          <p class="card-text">{{($p->hari)}} hari {{($p->malam)}} malam</p>

                          <a href="{{ url('detail')}}/{{ $p->id }}" class="btn btn-primary">See Details</a>
                        </div>
                    </div>
            @endforeach --}}

		</div>
	</div>

	<!-- <div class="section sec-testimonials">
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
	</div> -->
</main>
@endsection
