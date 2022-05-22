<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Google Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="user/images/image/png" sizes="16x16" href="user/images/googlePlayLogo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="user/icons/font-awesome/css/font-awesome.min.css">
    <!-- Custom Stylesheet -->
    <link href="user/css/style.css" rel="stylesheet">

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
                <a href="index.php">
                    <b class="logo-abbr"><img src="user/images/googlePlayLogo.png" alt=""> </b>
                    <span class="logo-compact mx-auto"><img src="user/images/googlePlay.png" alt=""></span>
                    <span class="brand-title">
                        <img src="user/images/googlePlay.png" alt="" width="100%">
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
                                <img src="user/images/profile.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="#"><span>Kelola Akun Anda</span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li>
                                            <a href="login.php"><span>Logout</span></a>
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

            <!-- Daftar Buku -->
            <div class="container-fluid">
                <div class="row" id="populer">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Paling Populer -->
                                    <div class="col-6 text-left">
                                        <h4 class="card-title">User Management</h4>
                                    </div>
                                    <?php
                                    require("includes/koneksi.php");
                                     $query = "SELECT * FROM user";
                                     $hasil = mysqli_query($koneksi,$query);
                                     echo "<table class ='table table-bordered'>";
                                     echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th>
                                    </th><th>Email</th><th>Level</th><tr>";
                                     foreach ($hasil as $data){
                                         echo "<tr>";
                                         echo "<td>$data[username]";
                                         echo "<td>$data[first_name]";
                                         echo "<td>$data[last_name]";
                                         echo "<td>$data[email]";
                                         echo "<td>$data[level]";

                                         // tombol update
                                         // input hidden = nampak id nya
                                         echo "<td><form method='POST'action='ubah.php'>";
                                         echo "<input hidden type='text'name='id' value=$data[id_user]>";
                                         echo "<button type='submit' name='btnUpdate'class='btn btn-success'>Update</button>";
                                         echo "</form></td>";

                                         // tombol delete
                                         echo "<td><form onsubmit=\"return confirm ('Anda yakin mau menghapus data?');\"method='POST'>";
                                         echo "<input hidden type='text'name='id_user' value=$data[id_user]>";
                                         echo "<button type='submit' name='btnHapus'class='btn btn-danger'><i class='far fa-trash-alt'></i> Delete</button>";
                                         echo "</form></td>";

                                         // tomboh tambah

                                         echo "</tr>";
                                     }
                                     echo "</table>";
                                     ?>
                                     <?php
                                        if(isset($_POST['btnHapus'])){
                                            $id = $_POST['id_user'];
                                            
                                            if($koneksi) {
                                                $sql = "DELETE FROM user WHERE id_user=$id";
                                                mysqli_query($koneksi, $sql);
                                                echo "<p class='alert alert-success text-center'><b> Data Akun berhasil dihapus.</b></p>";
                                            } elseif ($koneksi->connect_error){
                                                echo "<p class='alert alert-danger text-center><b> Data gagal dihapus. Terjadi kesalahan: ";
                                                echo $koneksi->connect_error . "</b></p>";
                                            }

                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="user/plugins/common/common.min.js"></script>
    <script src="user/js/custom.min.js"></script>
    <script src="user/js/settings.js"></script>
    <script src="user/js/gleek.js"></script>
    <script src="user/js/styleSwitcher.js"></script>
    <script src="user/js/dashboard/dashboard-1.js"></script>

</body>
</html>