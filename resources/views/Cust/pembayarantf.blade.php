@extends('Cust/layout/nav')
@section('contain')
<main id = "main"class="main">



	<div class="hero page-inner overlay" style="background-image: url('images/balibg.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Bali Tour Package</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<p class="breadcrumb-item "><a href="home">Home</a></p>
							<p class="breadcrumb-item "><a href="tourpackages">Tour Packages</a></p>
							<p class="breadcrumb-item active text-white-50" aria-current="page">Bali Tour Package</p>
						</ol>
					</nav>

				</div>
            </div>
		</div>
	</div>

    <div class="container">
        <div class="row">
            <div class="col-lg-10" >
                <div class="card1 card-margin">
                    <div class="card-header no-border">
                        <h6 class="card-title"><b>Mohon transfer ke</b></h6>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49 widget-49-meeting-points">
                                <p class="widget-49-meeting-item"><i><i class="bi bi-calendar4"></i></i><span>  Tanggal keberangkatan <b>10 Jan 2023 - 13 Jan 2023</b></span></p>
                                <p class="widget-49-meeting-item" style="margin-top: 10px"><i><i class="bi bi-geo-alt-fill"></i></i><span>  Titik Kumpul <b>Holidayz Tour and Travel Office</b></span></p>
                                <p class="widget-49-meeting-item"><span><b>   Jl. Raya Prapen No.23 A, Prapen, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur 60239</b></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
@endsection
