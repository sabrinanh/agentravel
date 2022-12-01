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
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"><i class="fa fa-fw fa-file"></i>Pemesanan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pemesanan</a></li> -->
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">List Pemesanan </h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                <div class="dataTables _length" id="DataTables _Table_o_length">
                                <label>
                                    show
                                <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value ="15">15</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option></select>
                                    entries
                                    </label>
                                    </div>
                                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No. Pesanan</th>
                                                <th>Nama Paket Tour</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>TPH13311</td>
                                                <td>Malang Tour Package</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td>>Enable</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">Enable</button>
                                                <button class="btn btn-sm btn-danger" type="submit">Disable</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH13312</td>
                                                <td>Bali Tour Package</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td>Enable</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">Enable</button>
                                                <button class="btn btn-sm btn-danger" type="submit">Disable</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH13313</td>
                                                <td>Semarang Tour Package</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td>Disable</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">Enable</button>
                                                <button class="btn btn-sm btn-danger" type="submit">Disable</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH13314</td>
                                                <td>Bradley Greer</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td>Disable</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">Enable</button>
                                                <button class="btn btn-sm btn-danger" type="submit">Disable</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>PH13315</td>
                                                <td>Brenden Wagner</td>
                                                <td>12-12-21 10:30AM</td>
                                                <td>Enable</td>
                                                <td class="align-right">
                                                <button class="btn btn-sm btn-success" type="submit">Enable</button>
                                                <button class="btn btn-sm btn-danger" type="submit">Disable</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>


            </div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>