<?php
session_start();
    if(empty($_SESSION['level'])) {
        echo "<script>alert('Maaf, Anda Tidak Bisa Akses Halaman Ini !'); document.location='../pages/login.php'</script>";
    }
?>

<?php 
    include "../pages/cek_admin.php";
    include "../includes/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin - Pembelian</title>
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
                <a href="payment.php">
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
                        <!-- Form Search Data -->
                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" class="form-inline">
                        <?php
                            $kata_kunci="";
                            if (isset($_POST['kata_kunci'])) {
                                $kata_kunci = $_POST['kata_kunci'];
                            }
                        ?>    
                        <input name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control mr-sm-2" style="width: 750px;" type="text" placeholder="Telusuri" aria-label="Search">
                            <button name="cari" value="cari" class="btn btn-info my-2 my-sm-0" type="submit"><i class="fa fa-search fa-lg"></i></button>
                        </form>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <h5 class="mx-3"><?=$_SESSION['first_name']?> <?=$_SESSION['last_name']?></h5>
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
                                            <a href="../pages/login.php"><span>Logout</span></a>
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


<div class="container-fluid">
    <div class="row" id="populer">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Pembelian User -->
                        <div class="col-6 text-left">
                            <h4 class="card-title">Daftar Pembelian</h4>
                        </div>

                        <table class ='table table-bordered text-center'>
                            <thead>
                                <tr>
                                    <th>ID Pembelian</th>
                                    <th>ID User</th>
                                    <th>Username</th>
                                    <th>No Seri Buku</th>
                                    <th>Metode Pembayaran</th>
                                    <th>Judul Buku</th>
                                    <th>Harga Buku</th>
                                    <th colspan='2'>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- Fungsi Search Data -->
                                <?php
                                    require("../includes/koneksi.php");

                                    if(isset($_POST['kata_kunci'])) {
                                        $kata_kunci = trim($_POST['kata_kunci']);
                                        $sql = "SELECT * FROM metode_pembayaran JOIN buku ON metode_pembayaran.noseri_buku = buku.noseri_buku WHERE method_payment LIKE '%".$kata_kunci."%' or username LIKE '%".$kata_kunci."%'";
                                        $sql_query = mysqli_query($koneksi, $sql);
                                    } else {
                                        $sql = "SELECT * FROM metode_pembayaran JOIN buku ON metode_pembayaran.noseri_buku = buku.noseri_buku";
                                        $sql_query = mysqli_query($koneksi, $sql);
                                    }

                                    foreach ($sql_query as $data) {
                                ?>

                                <?php
                                    // require("../includes/koneksi.php");
                                    // $query = "SELECT * FROM metode_pembayaran JOIN buku ON metode_pembayaran.noseri_buku = buku.noseri_buku";
                                    // $hasil = mysqli_query($koneksi,$query);

                                    // foreach ($hasil as $data){
                                    
                                ?>

                                <tr>
                                    <td><?= $data['id_method'] ?></td>
                                    <td><?= $data['id_user'] ?></td>
                                    <td><?= $data['username'] ?></td>
                                    <td><?= $data['noseri_buku'] ?></td>
                                    <td><?= $data['method_payment'] ?></td>
                                    <td><?= $data['judul'] ?></td>
                                    <td><?= $data['harga_buku'] ?></td>
                                    <td>
                                        <button type='button' name='konfirmasi' class='btn btn-outline-success btn-sm' data-toggle='modal' data-target='#konfirmasi<?= $data['id_method'] ?>'>
                                        Konfirmasi <i class='fa fa-check'></i> 
                                        </button>
                                    </td>
                                    <td>
                                        <button type='button' name='delete' class='btn btn-outline-danger btn-sm' data-toggle='modal' data-target='#delete<?= $data['id_method'] ?>'>
                                        Tolak <i class='fa fa-trash'></i> 
                                        </button>
                                    </td>
                                </tr>
                                </tr>

                                <!-- Konfirmasi Modal -->
                                <div class="modal fade" id="konfirmasi<?= $data['id_method'] ?>" tabindex="-1" role="dialog" aria-labelledby="konfirmasi" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Konfirmasi Buku</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                            <div class="modal-body">
                                            <form method="POST">
                                                <div class="form-group">
                                                    <label for="id_method" class="col-form-label">ID Pembelian :</label>
                                                    <input type="text" name="id_method" value="<?= $data['id_method'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="id_user" class="col-form-label">ID User :</label>
                                                    <input type="text" name="id_user" value="<?= $data['id_user'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="method_payment" class="col-form-label">Metode Pembayaran :</label>
                                                    <input type="text" name="method_payment" value="<?= $data['method_payment'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="username" class="col-form-label">Username :</label>
                                                    <input type="text" name="username" value="<?= $data['username'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="noseri_buku" class="col-form-label">No Seri Buku :</label>
                                                    <input type="text" name="noseri_buku" value="<?= $data['noseri_buku'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="judul" class="col-form-label">Judul Buku :</label>
                                                    <input type="text" name="judul" value="<?= $data['judul'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="harga_buku" class="col-form-label">Harga Buku :</label>
                                                    <input type="text" name="harga_buku" value="<?= $data['harga_buku'] ?>" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="contain_buku" class="col-form-label">Contain Buku :</label>
                                                    <input type="text" name="contain_buku" value="<?= $data['contain_buku'] ?>" class="form-control" required>
                                                </div>
                                                <div class="modal-footer"> 
                                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <input hidden type="text" name="id_pembelian" value="<?= $data['id_method'] ?>">
                                                    <button type="submit" name="btnKonfirmasi" class="btn btn-primary">Konfirmasi</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="delete<?= $data['id_method'] ?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title">Hapus History Ini ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="POST">
                                                <div class="modal-body">
                                                    Apakah Anda Yakin Ingin Menghapus History Pembelian dengan Kode : <?= $data['id_method'] ?> 
                                                <div class="modal-footer"> 
                                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                    <input hidden type="text" name="id_method" value="<?= $data['id_method'] ?>">
                                                    <button type="submit" name="btnHapus" class="btn btn-danger" action>Tolak</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <?php 
                                    }
                                ?>
                            </tbody>
                        </table>

                            <!-- Fungsi Konfirmasi Pembelian -->
                            <?php
                                if(isset($_POST['btnKonfirmasi'])){

                                    include '../includes/koneksi.php';

                                        $id_method = $_POST['id_method'];
                                        $id_user = $_POST['id_user'];
                                        $method_payment = $_POST['method_payment'];
                                        $username = $_POST['username'];
                                        $noseri_buku = $_POST['noseri_buku'];
                                        $judul = $_POST['judul'];
                                        $harga_buku = $_POST['harga_buku'];
                                        $contain_buku = $_POST['contain_buku'];

                                        $SQL_masuk = "INSERT INTO pembelian (id_user,method_payment,noseri_buku,username,judul,harga_buku,contain_buku) VALUES ('$id_user','$method_payment','$noseri_buku','$username','$judul','$harga_buku','$contain_buku')";
                                        $selesaiKonfirmasi = mysqli_query($koneksi, "DELETE FROM metode_pembayaran WHERE id_method = '$id_method'");

                                    if($koneksi->query($SQL_masuk)===TRUE && $selesaiKonfirmasi){
                                        echo "<script>
                                                alert('Konfirmasi Pembelian Buku Berhasil !');
                                                setTimeout(\"location.href = 'payment.php';\",300);
                                            </script> ";
                                    } else {
                                        echo "Terjadi kesalahan:".$SQL_masuk."<br/>".$koneksi->error;
                                    }   
                                } 		
                            ?>

                            <!-- Fungsi Delete Pembelian -->
                            <?php
                                if(isset($_POST['btnHapus'])){
                                    $id = $_POST['id_method'];
                                    $hapus = mysqli_query($koneksi, "DELETE FROM metode_pembayaran WHERE id_method='$id'");

                                    if($hapus) {
                                        echo "<script>
                                                alert('Pembelian Buku Berhasil Ditolak !');
                                                setTimeout(\"location.href = 'prosesKonfirmasi.php';\",500);
                                            </script> ";
                                    } else {
                                        echo "Terjadi kesalahan";
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