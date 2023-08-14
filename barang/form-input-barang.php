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
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Form Input Data</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../barang/form-input-barang.php">Data Barang</a>
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
                                <h4 class="card-title">Input Data Barang</h4>
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-6">

                                            <?php
                                                $sql = "SELECT MAX(id_barang)+1 id_barang FROM barang";
                                                $hasil = mysqli_query($koneksi, $sql);
                                                $id_barang = mysqli_fetch_array($hasil, MYSQLI_ASSOC);
                                            ?>
                                                <div class="form-group">
                                                    <label>ID - Barang</label>
                                                    <input type="text" class="form-control" name="a" value="<?php echo $id_barang['id_barang'] ?>" readonly>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nama Ruangan</label>
                                                    <select name="b" id="InlineFormCustomSelect" class="custom-select mr-sm-2">
                                                        <option selected>Pilih</option>
                                                        <?php
                                                            
                                                            $query = mysqli_query($koneksi, "SELECT * FROM ruangan");
                                                            while ($data = mysqli_fetch_assoc($query)) { ?>
                                                                <option value="<?php echo $data['id_ruangan']; ?>"> <?php echo $data['nama_ruangan']; ?> </option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Kode Barang</label>
                                                    <input type="text" autocomplete="off" class="form-control" name="c">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label>Nama Barang</label>
                                                    <input type="text" autocomplete="off" class="form-control" name="d">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tahun Pengadaan</label>
                                                    <input type="text" autocomplete="off" class="form-control" name="e">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Jumlah</label>
                                                    <input type="text" autocomplete="off" class="form-control" name="f">
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Kondisi</label>
                                                    <input type="text" autocomplete="off" class="form-control" name="g">
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
                                        $id_barang = $_POST['a'];
                                        $id_ruang = $_POST['b'];
                                        $kode_barang = $_POST['c'];
                                        $nama_barang = $_POST['d'];
                                        $thn_pengadaan = $_POST['e'];
                                        $jumlah = $_POST['f'];
                                        $kondisi = $_POST['g'];
                            

                                        $sql = "INSERT INTO barang (id_barang, id_ruangan, kode_barang, nama_barang, thn_pengadaan, jumlah, kondisi)
                                            VALUES ('$id_barang', '$id_ruang', '$kode_barang', '$nama_barang', '$thn_pengadaan', '$jumlah', '$kondisi')";
                                        $insert = mysqli_query($koneksi, $sql);
                                        if($insert) {
                                            echo '<script type="text/javascript">alert("Berhasil input data Barang");
                                            window.location.replace("../barang/data-barang.php");</script>';
                                        } else {
                                            echo '<script type="text/javascript">alert("Gagal, coba ulangi!");
                                            window.location.replace("../barang/data-barang.php");</script>';
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