<!doctype html>
<html lang="en">

<?php include 'marketing/includes/header.php' ?>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

    <?php include 'marketing/includes/navbar.php' ?>
    <?php include 'marketing/includes/sidebar.php' ?>

        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-finance">
                <div class="container-fluid dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h3 class="mb-2">Dashboard </h3>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item" aria-current="page">Home</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                     <!-- check box dropdown -->

                     <!-- Large button groups (default and split) -->
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Checkout example · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">




    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">

<div class="container">
  <main>
    <div class="py-5 text-center">
        <td><img src="images/Bali2.jpg" alt="" style="width: 200px; height: 190px;"></td>
      <p class="lead"></p>

      <form>
        <div class="mt-2">
          <button class="btn btn-primary" type="button">
            <i class="fa fa-fw fa-camera"></i>
            <span>Change Photo</span>
            <div class="form-floating mb-0.9">
                <input type="file" class="form-control" id="file">
            </div>
          </button>
          </form>
        </div>
      </div>
      <div class="text-center text-sm-right">


    </div>

<div class="form-group row">
    <label for="namatour" class="col-sm-2 col-form-label">Nama Tour</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="" value="" required="">
    </div>
    </div>
    <div class="form-group row">
        <label for="hargatour" class="col-sm-2 col-form-label">Harga Tour</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" placeholder="" value="" required="">
    </div>
    </div>
    <div class="form-group row">
        <label for="tanggal" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="date" class="form-control">
          </div>
    </div>
    <div class="form-group row">
        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan Tour</label>
        <div class="col-sm-10">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </div>

    {{-- coba --}}
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Select2 Form</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>

  <body>
      <div class="container">
      </div>
      <div class="form-group row">
          <label for="tujuan" class="col-sm-2 col-form-label">Tujuan Tour</label>
          <div class="col-sm-10">
          <form class='mt-2'>
              <div class='mb-2'>
                  <label> Provinsi</label>
                  <select id="selectProv" class="form-select" aria-label="Default select example">

                  </select>
              </div>

              <div class='mb-2'>
                  <label> Regencies</label>
                  <select id="selectRegenc" class="form-select" aria-label="Default select example">

                  </select>
              </div>

          </form>
      </div>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
          integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
      </script>

<script>
  $(document).ready(function(){

      $("#selectProv").select2({
        placeholder:'Pilih Provinsi',
        ajax: {
        url: "{{route('provinsi')}}",
                    processResults: function({data}){
                        return {
                            results: $.map(data, function(item){
                                return {
                                    id: item.id,
                                    text: item.name
                                }
                            })
                        }
                    }
                }
            });
            $("#selectProv").change(function(){
                let id = $('#selectProv').val();
                $("#selectRegenc").select2({
                placeholder:'Pilih Wilayah',
                ajax: {
                    url: "{{url('selectRegenc')}}/"+ id,
                    processResults: function({data}){
                        return {
                            results: $.map(data, function(item){
                                return {
                                    id: item.id,
                                    text: item.name
                                }
                            })
                        }
                    }
                }
            });
            });
        });
  </script>





            </form>
            <div class="col-12">
            <div class="form-group">
            </div>
                <label for="restaurant"class="font-weight-bold">Restaurant</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    The Amora Bali Restaurant
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    The Loft Restaurant
                </label>
              </div>
              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Sauce Tree Restaurant
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Finns Beach Restaurant
                </label>
                 </div>
                 <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                 <label class="form-check-label" for="defaultCheck2">
                    Milu By Nook Restaurant
                </label>
            </div>
           </form>
       </div>
   </form>
            <div class="col-12">
            <div class="form-group">
            </div>
                <label for="hotel"class="font-weight-bold">Hotel</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Four Seasons Resort Bali, Sayan
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Ritz-Carlton Bali
                </label>
              </div>
              <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Padma Resort Ubud
                </label>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Bali Dynasty Resort
                </label>
                 </div>
                 <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                 <label class="form-check-label" for="defaultCheck2">
                    The Westin Resort Nusa Dua
                </label>
                 </div>
                </form>
            </div>
        </form>
        <div class="col-12">
            <div class="form-group">
                <label for="Transportasion" class="font-weight-bold">Transportasion</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Big Bus
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                <label class="form-check-label" for="defaultCheck2">
                    Medium Bus
                </label>
              </div>
            </div>
            <td><a class="btn-group">
           <a href="#" class="btn btn-primary " aria-current="page">Submit</a>
          <a href="#" class="btn btn-secondary">Cancel</a><td>
          </div>





  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1"></p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#"></a></li>
      <li class="list-inline-item"><a href="#"></a></li>
      <li class="list-inline-item"><a href="#"></a></li>
    </ul>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>




{{-- // blom diedit //
<div class="btn-group">
  <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
   Hotel
  </button>
  <ul class="dropdown-menu">
    ...
  </ul>
</div>
    <div class="list-group">
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    First checkbox
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    Second checkbox
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    Third checkbox
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    Fourth checkbox
  </label>
  <label class="list-group-item">
    <input class="form-check-input me-1" type="checkbox" value="">
    Fifth checkbox
  </label>
</div>



<?php include 'marketing/includes/footer.php' ?>
</body>
</html>



 --}}


    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>

</body>

</html>

