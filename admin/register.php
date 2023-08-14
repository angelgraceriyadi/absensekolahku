<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Register</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center position-relative" style="background:url(../assets/images/big/auth-bg.jpg) no-repeat center center;">
            <div class="col-lg-4 col-md-4 bg-white">
                <div class="p-3">
                    <h2 class="mt-3 text-center">Register</h2>
                    <form class="mt-4" method="POST" onsubmit="return validateForm()" name="formlogin">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="uname">Username</label>
                                    <input class="form-control" id="uname" type="text" autocomplete="off" placeholder="Masukkan username" name="username">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark" for="pwd">Password</label>
                                    <input class="form-control" id="pwd" type="password" autocomplete="off" placeholder="Masukkan password" name="password">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="text-dark">Role</label> &nbsp
                                    <select name="role" class="form-control" id="role" aria-label="Default select example">
                                        <option value="" selected>Pilih</option>
                                        <option value="admin">admin</option>
                                        <option value="sarpras">sarpras</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <button type="submit" class="btn btn-block btn-warning" name="register">Register</button>
                            </div>
                            <div class="col-lg-12 text-center" style="padding-top: 10px;">
                                <a href="../admin/login.php" style="color: #1C2D41;">Login</a>
                            </div>
                        </div>
                    </form>

                    <!-- Syntax PHP -->
                    <?php

                    include "../config/koneksi.php";
                    if (isset($_POST['register'])) {
                        $user = $_POST['username'];
                        $pass = md5($_POST['password']);
                        $role = $_POST['role'];

                        $sql = mysqli_query($koneksi, "INSERT INTO pengguna (username, password, role) VALUES ('$user', '$pass', '$role')");

                        if ($sql) {
                            echo '<script type="text/javascript">alert("Register berhasil");
                                    window.location.replace("../admin/login.php");</script>';;
                        } else {
                            echo '<script type="text/javascript">alert("Gagal register");
                                    window.location.replace("../admin/register.php");</script>';
                        }
                    }
                    ?>

                    <!-- Syntax JS -->
                    <script>
                        function validateForm() {
                            let x = document.forms["formlogin"]["username"].value;
                            if (x == "") {
                                alert("username must be filled out");
                                return false;
                            }

                            let y = document.forms["formlogin"]["password"].value
                            if (y == "") {
                                alert("password must be filled out");
                                return false;
                            }

                            let z = document.forms["formlogin"]["role"].value
                            if (z == "") {
                                alert("role must be filled out");
                                return false;
                            }
                        }
                    </script>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js "></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js "></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js "></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        $(".preloader ").fadeOut();
    </script>
</body>

</html>