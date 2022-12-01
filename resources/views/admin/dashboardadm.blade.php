<!doctype html>
<html lang="en">

<?php include 'marketing/includes/headeradm.php' ?>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        
    <?php include 'marketing/includes/navbaradm.php' ?>
    <?php include 'marketing/includes/sidebaradm.php' ?>
        
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
                                <h3 class="mb-2"><i class="fa fa-fw fa-user"></i>Karyawan</h3>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->

  <form>
  <div class="row mb-3">
    <label for="inputnama" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputnama">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputemail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputemail">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputpassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputpassword">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputnomor" class="col-sm-2 col-form-label">No.Telp</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputnomor">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputalamat">
    </div>
  <!-- </div>
  <div class="row mb-3">
    <label for="inputjabatan" class="col-sm-2 col-form-label-select">Jabatan</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputjabatan">
    </div> -->
    </div>
  <button type="submit-middle" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#simpan">Simpan</button>
  <div class="modal" tabindex="-1"id="simpan">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
 
                    


        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    
<?php include 'marketing/includes/footer.php' ?>
</body>
</html>
