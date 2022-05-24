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
                            <input class="form-control mr-sm-2" style="width: 700px;" type="search" placeholder="Telusuri" aria-label="Search">
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
                                            <a href="../login.php"><span>Logout</span></a>
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
                            <h4 class="card-title">Daftar Pembelian</h4>
                        </div>

                        <?php
                            require("../includes/koneksi.php");
                            $query = "SELECT * FROM metode_pembayaran JOIN buku ON metode_pembayaran.noseri_buku= buku.noseri_buku";
                            $hasil = mysqli_query($koneksi,$query);

                            echo "<table class ='table table-bordered'>";
                            echo "<tr><th>Username</th><th>No Seri Buku</th><th>Metode Pembayaran</th><th>Judul Buku</th>
                            </th><th>Harga Buku</th><tr>";

                            foreach ($hasil as $data){
                                echo "<tr>";
                                echo "<td>$data[username]";
                                echo "<td>$data[noseri_buku]";
                                echo "<td>$data[method_payment]";
                                echo "<td>$data[judul]";
                                echo "<td>$data[harga_buku]";

                                // tombol konfirmasi
                                // input hidden = nampak id nya
                                echo "<td><form onsubmit=\"return confirm ('Setujui Pembayaran Ini?');\"method='POST'>";
                                echo "<input hidden type='text'name='id_method' value=$data[id_method]>";
                                echo "<button type='submit' name='btnUbah'class='btn btn-success btn-sm'>
                                <i class= 'fa fa-check' title='konfirmasi'></i></button>";
                                echo "</form></td>";

                                // tombol delete
                                echo "<td><form onsubmit=\"return confirm ('Hapus Pembayaran ini?');\"method='POST'>";
                                echo "<input hidden type='text'name='id_method' value=$data[id_method]>";
                                echo "<button type='submit' name='btnHapus'class='btn btn-danger btn-sm'><i class='fa fa-trash' title='hapus'></i></button>";
                                echo "</form></td>";
                                echo "</tr>";
                            }
                            echo "</table>";

                        ?>

                            <?php
                                if(isset($_POST['btnUbah'])){
                                    $id = $_POST['id_method'];
                                    
                                    if($koneksi) {
                                        $sql = "UPDATE FROM metode_pembayaran WHERE id_method=$id";
                                        mysqli_query($koneksi, $sql);
                                        echo "<p class='alert alert-success text-center'><b> Pembayaran Disetujui ! <a href='admin.php' class='btn btn-primary'>Kembali</a></b></p>";
                                    } elseif ($koneksi->connect_error){
                                        echo "<p class='alert alert-danger text-center><b> Data gagal dihapus. Terjadi kesalahan: ";
                                        echo $koneksi->connect_error . "</b></p>";
                                    }

                                }
                            ?>

                            <?php
                                if(isset($_POST['btnHapus'])){
                                    $id = $_POST['id_method'];
                                    
                                    if($koneksi) {
                                        $sql = "DELETE FROM metode_pembayaran WHERE id_method=$id";
                                        mysqli_query($koneksi, $sql);
                                        echo "<p class='alert alert-success text-center'><b>Pembayaran berhasil dihapus.<a href='payment.php' class='btn btn-primary'>Kembali</a></b></p>";
                                    } elseif ($koneksi->connect_error){
                                        echo "<p class='alert alert-danger text-center><b>Pembayaran gagal dihapus. Terjadi kesalahan: ";
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