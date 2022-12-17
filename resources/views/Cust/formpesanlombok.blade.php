@extends('Cust/layout/nav')
@section('contain')
<main id = "main"class="main">


	<div class="hero page-inner overlay" style="background-image: url('images/bromocont.jpg');">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Lombok Tour Packages</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<li class="breadcrumb-item "><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active text-white-50" aria-current="page">Bali Tour Packages</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
  </section>

            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">


                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
					<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        <i><i class="bi bi-person-fill"></i></i>Peserta 1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
	  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Nama Lengkap</label>
  <input type="text" class="form-control" id="formGroupExampleInput">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">No.KTP</label>
  <input type="text" class="form-control" id="formGroupExampleInput2">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">No.Telp</label>
  <input type="text" class="form-control" id="formGroupExampleInput2">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Email</label>
  <input type="text" class="form-control" id="formGroupExampleInput2">
</div>
      </div>
      <a href="" class="btn btn-primary gap-2 col-5 mx-auto1">Tambah Peserta</a>
    </div>

      </div>
    </div>
  </div>
</div>
<a href="/pembayaran" class="btn btn-primary gap-2 col-5 mx-auto3">Pesan</a>
</main>
@endsection
