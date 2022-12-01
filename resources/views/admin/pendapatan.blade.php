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
                            <h2 class="pageheader-title"><i class="fa fa-fw fa-folder"></i>Pendapatan</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <!-- <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pemesanan</a></li>
                                    </ol> -->
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
                            <h5 class="card-header">Data Pendapatan</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                <div class="dataTables _length" id="DataTables _Table_o_length">
                                <label>
                                    show
                                <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option></select>
                                    entries
                                    </label>
                                    </div>
                                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No. Nota</th>
                                                <th>No. Pesanan</th>
                                                <th>Tanggal</th>
                                                <th>Total</th>
                                                <th>Diskon</th>
                                                <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>NH12251</td>
                                                <td>PH13311</td>
                                                <td>10-11-2021</td>
                                                <td>Rp.1.911.000</td>
                                                <td>Rp.191.000</td>
                                                <td>Rp.1.720.000</td>
                                            </tr>
                                            <tr>
                                                <td>NH12252</td>
                                                <td>PH13312</td>
                                                <td>15-11-2021</td>
                                                <td>Rp.700.000</td>
                                                <td>Rp.20.000</td>
                                                <td>Rp.680.000</td>
                                            </tr>
                                            <tr>
                                                <td>NH12253</td>
                                                <td>PH13313</td>
                                                <td>8-12-2021</td>
                                                <td>Rp.825.000</td>
                                                <td>Rp.51.000</td>
                                                <td>Rp.744.000</td>
                                            </tr>
                                            <tr>
                                                <td>NH12254</td>
                                                <td>PH13314</td>
                                                <td>13-12-2021</td>
                                                <td>Rp.500.000</td>
                                                <td>Rp.60.000</td>
                                                <td>Rp.440.000</td>
                                            </tr>
                                            <tr>
                                                <td>NH12255</td>
                                                <td>PH13315</td>
                                                <td>21-12-2021</td>
                                                <td>Rp.1.911.000</td>
                                                <td>Rp.191.000</td>
                                                <td>Rp.1.720.000</td>
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