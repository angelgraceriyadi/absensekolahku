<?php

    include "../layouts/sidemenu.php";
    include "../config/koneksi.php"
?>
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Laporan</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../barang/data-barang.php">Data Semua Barang</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
            <!-- Isi -->
            <div class="container-fluid">
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Laporan Data Semua Barang</h4>
                                <h6 class="card-subtitle">Informasi data barang tersedia pada tabel berikut</h6>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead class="bg-info text-white">
                                            <tr>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Kondisi</th>
                                                <th>Ruangan</th>
                                                <th>Gedung</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Syntax php -->
                                            <?php
                                            // Syntax SQL atau Query 
                                            $query = mysqli_query($koneksi, "SELECT barang.nama_barang, barang.jumlah, barang.kondisi, ruangan.nama_ruangan, gedung.nama_gedung
                                            FROM barang
                                            JOIN ruangan ON barang.id_ruangan=ruangan.id_ruangan
                                            JOIN gedung ON ruangan.id_gedung=gedung.id_gedung");
                                            while ($data = mysqli_fetch_assoc($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $data['nama_barang'];?></td>
                                                    <td><?php echo $data['jumlah'];?></td>
                                                    <td><?php echo $data['kondisi'];?></td>
                                                    <td><?php echo $data['nama_ruangan'];?></td>
                                                    <td><?php echo $data['nama_gedung'];?></td>
                                                </tr>

                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
            Copyright by <a
                    href="https://wrappixel.com">Angel Grace Riyadi</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>
    <!--This page plugins -->
    <script src="../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>

</html>