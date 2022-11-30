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
                    <div class="accordion accordion-flush accordion-margin" id="accordionFlushExample">
                        <div class="accordion-item mb-3">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Harga Total
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Bali Tour Package 2x</p>
                                <p>Biaya Layanan</p>
                                <p>Kode Unik</p>
                            </div>
                            <a href="pembayarantf" class="btn btn-primary gap-2 col-10 mx-auto4">Bayar dengan transfer BCA</a>
                        </div>
                        </div>
                        <div class="accordion-item">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
@endsection
