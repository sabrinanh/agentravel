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
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <i><i class="bi bi-credit-card-fill"></i></i>Transfer
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="mb-4">
                                    <a href="formpesanBaliA" type="text" class="form-control" id="formGroupExampleInput"><img src="../assets/images/bca1.jpg">  Transfer BCA</a>
                                  </div>
                                <div class="mb-4">
                                    <a href="formpesanBaliA" type="text" class="form-control" id="formGroupExampleInput"><img src="../assets/images/bri.jpg">  Transfer BRI</a>
                                 </div>
                                 <div class="mb-4">
                                    <a href="formpesanBaliA" type="text" class="form-control" id="formGroupExampleInput"><img src="../assets/images/bni.jpg">  Transfer BNI</a>
                                  </div>
                                  <div class="mb-4">
                                    <a href="formpesanBaliA" type="text" class="form-control" id="formGroupExampleInput"><img src="../assets/images/mandiri.jpg">  Transfer Mandiri</a>
                                  </div>
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <i><i class="bi bi-calendar-fill"></i></i>Cicilan
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="mb-4">
                                    <a href="formpesanBaliA" type="text" class="form-control" id="formGroupExampleInput">Transfer BCA</a>
                                  </div>
                                <div class="mb-4">
                                    <a href="formpesanBaliA" type="text" class="form-control" id="formGroupExampleInput"><img src="../assets/images/bca1.jpg">  Transfer BCA</a>
                                  </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
@endsection
