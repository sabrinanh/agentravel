@extends('Cust/layout/nav')
@section('contain')
<main id = "main"class="main">



	<div class="hero page-inner overlay" style="background-image: url('images/balibg.jpg');">

		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-9 text-center mt-5">
					<h1 class="heading" data-aos="fade-up">{{$ptours->nama}}</h1>

					<nav aria-label="breadcrumb" data-aos="fade-up" data-aos-delay="200">
						<ol class="breadcrumb text-center justify-content-center">
							<p class="breadcrumb-item "><a href="home">Home</a></p>
							<p class="breadcrumb-item "><a href="tourpackages">Tour Packages</a></p>
							<p class="breadcrumb-item active text-white-50" aria-current="page">{{$ptours->nama}}</p>
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
                        <h4 class="card-title"><b>{{$ptours->nama}}</b></h4>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49 widget-49-meeting-points">
                                <p class="widget-49-meeting-item"><i><i class="bi bi-calendar4"></i></i><span>  Tanggal keberangkatan <b>{{$ptours->tanggalb}} sampai {{$ptours->tanggalp}}</b></span></p>
                                <p class="widget-49-meeting-item" style="margin-top: 10px"><i><i class="bi bi-geo-alt-fill"></i></i><span>  Titik Kumpul <b>Holidayz Tour and Travel Office</b></span></p>
                                <p class="widget-49-meeting-item"><span><b>   Jl. Raya Prapen No.23 A, Prapen, Kec. Tenggilis Mejoyo, Kota SBY, Jawa Timur 60239</b></span></p>
                        </div>
                    </div>
                </div>
            </div>



<div class="container px-4 px-lg-5">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

            <div class="col-lg-10 " >
                <div class="card1 card-margin p-4">
                    <div class="card-header no-border">
                        <h5 class="card-title">Pack ({{$ptours->nama}})</h5>
                    </div>
                    <div class="card-body pt-0">
                        <div class="widget-49">
                                <p class="widget-49-meeting-item"><span><b>Rp {{number_format($ptours->harga )}}</b></span></p>

                        </div>
                    </div>
                <form action="/formpesan" method="post">
                @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Jumlah Pesan</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="jumlah pesan" name="jumlah">
                          <input type="hidden" name="ptours" value="{{ request('id') }}">
                        </div>
                    </div>
                    <button  class="btn btn-primary  col-11 mx-auto2">Pesan</button>
                </form>
                    {{-- <p class="widget-49-meeting-item">Jumlah Pesan</p>
                    <input type="text" name="jumlah" class="form-control">
                    <a href="formpesanBaliA" class="btn btn-primary gap-2 col-10 mx-auto2">Pesan</a> --}}
                </div>

            </div>

        </div>
    </div>
</div>

</main>
@endsection

