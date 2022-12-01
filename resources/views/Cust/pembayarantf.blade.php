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
                        <h6 class="card-title"><i><i class="bi bi-wallet-fill"></i></i><b>Mohon transfer ke</b></h6>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49 widget-49-meeting-points">
                                <p class="widget-49-meeting-item"><span><b>PT. Holidayz Sejahtera</b></span></p>
                                <div class="mb-4">
                                    <a class="form-control2" id="formGroupExampleInput">087 888 2211</a>
                                  </div>
                                <p class="widget-49-meeting-item"><span><b>Jumlah Bayar</b></span></p>
                                <div class="mb-4">
                                    <a class="form-control2" id="formGroupExampleInput">Rp979.116</a>
                                  </div>
                        </div>
                    </div>
                    <div class="text-center alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                        PENTING! Mohon transfer sesuai jumlah yang tertera (termasuk 3 digit terakhir)
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                </div>
            </div>

            <div class="col-lg-10" >
                <div class="card1 card-margin">
                    <div class="card-header no-border">
                        <h5 class="card-title"><b>Sudah Menyelesaikan Transaksi?</b></h5>
                    </div>
                    <a class="form-control3" id="formGroupExampleInput">Setelah pembayaran Anda dikonfirmasi, kami akan mengirim bukti pembelian kepada anda</a>
                    <a href="pembayarantf" class="btn btn-primary gap-2 col-10 mx-auto5"><b>Saya Sudah Bayar</b></a>
                    </div>

                </div>
            </div>
        </div>
    </div>


</main>
@endsection
