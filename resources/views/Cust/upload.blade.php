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
                        <h5 class="card-title"><b>Upload Bukti Bayar</b></h5>
                    </div>
                    <div class="card-header no-border">
                  <div class="col-sm-10">
                    <input class="form-control4" type="file" id="formFile">
                  </div>
                    </div>
                    <a href="upload" class="btn btn-primary gap-2 col-10 mx-auto5"><b>Upload Bukti Bayar</b></a>
                </div>
            </div>

            </div>
        </div>
    </div>


</main>
@endsection
