@extends('Cust/layout/nav')
@section('contain')
<main id = "main"class="main">

<<<<<<< HEAD
	<meta name="description" content="" />
	<meta name="keywords" content="bootstrap, bootstrap5" />
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<link rel="stylesheet" href="css/tiny-slider.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

	<title>Holidayz &mdash; </title>
</head>
<body>

	<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<a href="index.html" class="logo m-0 float-start">Holidayz</a>

					<ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
						<li><a href="home">Home</a></li>
						<li>
							<a href="tourpackages">Tour Packages</a>
						
						<li><a href="about">About</a></li>
						<li class="has-children">
						<a href="profile"><img src="../assets/images/1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
							<ul class="dropdown">
								<li><a href="Profile">Edit profile</a></li>
								<li><a href="">My order</a></li>
								<li><a href="">Logout</a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>

					<a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
						<span></span>
					</a>

				</div>
			</div>
		</div>
	</nav>
=======
>>>>>>> b803ac8cba32d2f26bb30f5648d19e143a91d059

	<div class="hero page-inner overlay" style="background-image: url('images/bromocont.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">Bali Tour Packages</h1>

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
<<<<<<< HEAD
                    <h2 class="mt-0 text-light"></h2>
                        <h2 class="mt-0 text-light">Booking Now</h2>
                        <hr class="divider" />
                        <p class="text-light mb-5"></p>
=======

>>>>>>> b803ac8cba32d2f26bb30f5648d19e143a91d059
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">


                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
					<div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Peserta 1
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
      <a href="#" class="btn btn-primary gap-2 col-5 mx-auto1">Tambah Peserta</a>
    </div>

      </div>
    </div>
  </div>
</div>
<a href="/pembayaran" class="btn btn-primary gap-2 col-5 mx-auto2">Pesan</a>
</main>
@endsection
