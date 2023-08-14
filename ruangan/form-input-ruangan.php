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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Input Ruangan</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../ruangan/data-ruangan.php">Data Ruangan</a>
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
            <div class="container-fluid">
               


            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Input Data Ruangan</h4>
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">

                                            <?php
                                                $sql = "SELECT MAX(id_ruangan)+1 id_ruangan FROM ruangan";
                                                $hasil = mysqli_query($koneksi, $sql);
                                                $id_ruangan = mysqli_fetch_array($hasil, MYSQLI_ASSOC);
                                            ?>
                                                <div class="form-group">
                                                    <label>ID - Ruangan</label>
                                                    <input type="text" class="form-control" name="a" value="<?php echo $id_ruangan['id_ruangan'] ?>" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nama Gedung</label>
                                                    <select name="b" id="InlineFormCustomSelect" class="custom-select mr-sm-2">
                                                        <option selected>Pilih</option>
                                                        <?php
                                                            
                                                            $query = mysqli_query($koneksi, "SELECT * FROM gedung");
                                                            while ($data = mysqli_fetch_assoc($query)) { ?>
                                                                <option value="<?php echo $data['id_gedung']; ?>"> <?php echo $data['nama_gedung']; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nama Ruangan</label>
                                                    <input type="text" autocomplete="off" class="form-control" name="c">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info" name="submit">Simpan</button>
                                        </div>
                                    </div>
                                </form>

                                <!-- Script PHP -->
                                <?php

                                    if(isset($_POST['submit'])) 
                                    {
                                        $id_ruangan = $_POST['a'];
                                        $id_gedung = $_POST['b'];
                                        $nama_ruangan = $_POST['c'];

                                        $sql = "INSERT INTO ruangan (id_ruangan, id_gedung, nama_ruangan)
                                            VALUES ('$id_ruangan', '$id_gedung', '$nama_ruangan')";
                                        $insert = mysqli_query($koneksi, $sql);
                                        if($insert) {
                                            echo '<script type="text/javascript">alert("Berhasil input data Ruangan");
                                            window.location.replace("../ruangan/data-ruangan.php");</script>';
                                        } else {
                                            echo '<script type="text/javascript">alert("Gagal, coba ulangi!");
                                            window.location.replace("../ruangan/data-ruangan.php");</script>';
                                        }
                                    }
                                ?>

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
</body>

</html>