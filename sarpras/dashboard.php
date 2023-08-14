<?php

    session_start();
?>

<?php

    include "../layouts/sidemenu-sarpras.php";
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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Selamat Datang, Sarpras </h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="lapdata.php">Data aset sekolah</a>
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
                                <!-- Row -->
                                <div class="row">
                    <div class="col-12">
                        <!-- Row -->
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/barang1.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <!-- Syntax php -->

                                        <?php

                                        include "../config/koneksi.php";
                                        $query = mysqli_query($koneksi, "SELECT * FROM barang") or die ('ada yang salah'.mysqli_error($koneksi));
                                        $count_barang = mysqli_num_rows($query);
                                
                                        ?>
                                        <h4 class="card-title">Jumlah Barang : <?php echo $count_barang ?></h4>
                                        <p class="card-text">Kamu dapat melihat detail dari data barang yang telah terdaftar di Sistem Informasi Aset Sekolah ini.</p>
                                        <a href="data-barang.php" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/ruang.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <!-- Syntax php -->

                                        <?php

                                        include "../config/koneksi.php";
                                        $query = mysqli_query($koneksi, "SELECT * FROM ruangan") or die ('ada yang salah'.mysqli_error($koneksi));
                                        $count_ruangan = mysqli_num_rows($query);
                                
                                        ?>
                                        <h4 class="card-title">Jumlah Ruangan : <?php echo $count_ruangan ?></h4>
                                        <p class="card-text">Kamu dapat melihat detail dari data ruangan yang telah terdaftar dalam Sistem Informasi Aset Sekolah ini.</p>
                                        <a href="data-ruangan.php" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                            <!-- column -->
                            <div class="col-lg-4 col-md-6">
                                <!-- Card -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../assets/images/big/gedung.jpg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <!-- Syntax php -->

                                        <?php

                                        include "../config/koneksi.php";
                                        $query = mysqli_query($koneksi, "SELECT * FROM gedung") or die ('ada yang salah'.mysqli_error($koneksi));
                                        $count_gedung = mysqli_num_rows($query);
                                
                                        ?>
                                        <h4 class="card-title">Jumlah Gedung : <?php echo $count_gedung ?></h4>
                                        <p class="card-text">Kamu dapat melihat detail dari data gedung yang telah terdaftar pada Sistem Informasi Aset Sekolah ini.</p>
                                        <a href="data-gedung.php" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                                <!-- Card -->
                            </div>
                            <!-- column -->
                        </div>
                        <!-- Row -->
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
            Copyright by <a
                    href="https://www.instagram.com/agracer_">Angel Grace Riyadi</a>.
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