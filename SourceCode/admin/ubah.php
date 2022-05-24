<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Google Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="images/image/png" sizes="16x16" href="images/googlePlayLogo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="../index.php">
                    <b class="logo-abbr"><img src="images/googlePlayLogo.png" alt=""> </b>
                    <span class="logo-compact mx-auto"><img src="images/googlePlay.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/googlePlay.png" alt="" width="100%">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header"> 
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon">	
                            <i class="fa fa-bars"></i>
                        </span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" style="width: 750px;" type="search" placeholder="Telusuri" aria-label="Search">
                            <button class="btn btn-info my-2 my-sm-0" type="submit"><i class="fa fa-search fa-lg"></i></button>
                        </form>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <i class="fa fa-th fa-lg mr-3"></i>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/profile.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#"><span>Kelola Akun Anda</span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li>
                                            <a href="SourceCode/login.php"><span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
           <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <hr>
                    <li>
                        <a href="admin.php" aria-expanded="true">
                            <span class="nav-text ml-3">Management User</span>
                        </a>
                    </li>
                    <li>
                        <a href="payment.php" aria-expanded="false">
                            <span class="nav-text ml-3">Payment</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
              <!-- Begin Page Content -->
              <div class="container-fluid">

<!-- Content Row -->
<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-10 col-lg-8">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Update Akun</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
            <?php 
            require("../includes/koneksi.php");
            $id = $_POST['id_user'];
            $query = "SELECT * FROM user WHERE id_user=$id";
            $hasil = mysqli_query($koneksi,$query);
            foreach ($hasil as $data) {
            }
            ?>
        <form method="POST" class="my-login-validation">
            <input hidden type="number"name="id_user" value="<?php echo $data['id_user']; ?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input value="<?php echo $data ['username']; ?>" id="Username" type="text" class="form-control" name="username" required autofocus>
                <div class="invalid-feedback">
                    What's your username?
                </div>
            </div>
            <div class="form-group">
                <label for="username">First Name</label>
                <input value="<?php echo $data ['first_name']; ?>" id="first_name" type="text" class="form-control" name="first_name" required autofocus>
                <div class="invalid-feedback">
                    What's your first name?
                </div>
            </div>
            <div class="form-group">
                <label for="username">Last Name</label>
                <input value="<?php echo $data ['last_name']; ?>" id="last_name" type="text" class="form-control" name="last_name" required autofocus>
                <div class="invalid-feedback">
                    What's your last name?
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input value="<?php echo $data ['password']; ?>" id="password" type="password" class="form-control" name="password" required data-eye>
                <div class="invalid-feedback">
                    Password is required
                </div>
            </div>
            <div class="form-group">
                <label for="email">E-Mail Address</label>
                <input value="<?php echo $data ['email']; ?>" id="email" type="email" class="form-control" name="email" required>
                <div class="invalid-feedback">
                    Your email is invalid
                </div>
            </div>

            <div class="form-group m-0">
                <button name="btnUbah" type="submit" class="btn btn-primary btn-block">
                    Update Akun
                </button>
            </div>
        </form>
        <?php 
        if (isset($_POST['btnUbah'])){
           $no = $_POST['id_user'];
           $user = $_POST['username'];
           $first_name = $_POST['first_name'];
           $last_name = $_POST['last_name'];
           $pass = $_POST['password'];
           $email = $_POST['email'];

           if ($koneksi){
            $sql = "UPDATE user SET username='$user',first_name='$first_name', last_name='$last_name', password='$pass',email='$email' WHERE id_user=$no";
            mysqli_query($koneksi,$sql);
            echo "<p class='alert alert-success text-center'><b>Perubahan Akun Berhasil Disimpan. <a href='admin.php' class='btn btn-primary'>Kembali</a></b></p>";
          } elseif ($koneksi->connect_error) {
                echo "<p class='alert alert-danger text-center><b>Terjadi kesalahan: $error</b></p>";
          }      
        }
        ?>
    </div>
        </div>
    </div>

</div>



</div>
<!-- /.container-fluid -->

</div>
 <!-- #/ container -->
 </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>
                    &copy; 2022 Google
                    <a href="#">Persyaratan Layanan Situs</a>
                    <a href="#">Privasi</a>
                    <a href="#">Developer</a>
                    <a href="#">Tentang Google Play</a>
                    | Lokasi : Indonesia Bahasa : Indonesia
                </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="js/dashboard/dashboard-1.js"></script>

</body>
</html>