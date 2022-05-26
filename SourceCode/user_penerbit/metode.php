<?php
session_start();
    if(empty($_SESSION['level'])) {
        echo "<script>alert('Maaf, Anda Tidak Bisa Akses Halaman Ini !'); document.location='../pages/login.php'</script>";
    }
?>

<?php 
    include "../includes/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Metode Pembayaran</title>
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
                <a href="index.php">
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
                            <input class="form-control mr-sm-2" style= "width: 750px" type="search" placeholder="Telusuri" aria-label="Search">
                            <button class="btn btn-info my-2 my-sm-0" type="submit"><i class="fa fa-search fa-lg"></i></button>
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
                    <li>
                        <a href="index.php" aria-expanded="true">
                            <span class="nav-text ml-3">Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="bukuSaya.php" aria-expanded="false">
                            <span class="nav-text ml-3">Buku Saya</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" aria-expanded="false">
                            <span class="nav-text ml-3">Toko</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="akun.html" aria-expanded="false">
                            <span class="nav-text">Akun</span>
                        </a>
                    </li>
                    <li>
                        <a href="metode.php" aria-expanded="false">
                            <span class="nav-text">Metode Pembayaran</span>
                        </a>
                    </li>
                    <li>
                        <a href="playPoints.html" aria-expanded="false">
                            <span class="nav-text">Play Points</span>
                        </a>
                    </li>
                    <li>
                        <a href="langganan.html" aria-expanded="false">
                            <span class="nav-text">Langganan saya</span>
                        </a>
                    </li>
                    <li>
                        <a href="tukarkan.html" aria-expanded="false">
                            <span class="nav-text">Tukarkan</span>
                        </a>
                    </li>
                    <li>
                        <a href="beliKartu.html" aria-expanded="false">
                            <span class="nav-text">Beli kartu hadiah</span>
                        </a>
                    </li>
                    <li>
                        <a href="wishlist.html" aria-expanded="false">
                            <span class="nav-text">Wishlish saya</span>
                        </a>
                    </li>
                    <li>
                        <a href="aktivitas.html" aria-expanded="false">
                            <span class="nav-text">Aktivitas Play saya</span>
                        </a>
                    </li>
                    <li>
                        <a href="panduanOrang.html" aria-expanded="false">
                            <span class="nav-text">Panduan Orang Tua</span>
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">

                                        <?php 
                                            function input($data) {
                                                $data = trim($data);
                                                $data = stripslashes($data);
                                                $data = htmlspecialchars($data);
                                                return $data;
                                            }

                                            include '../includes/koneksi.php';

                                            $noseri_buku = input($_GET['noseri_buku']);
                                            $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE noseri_buku='".$noseri_buku."' LIMIT 1");
                                            $data = mysqli_fetch_array($query);
                                        ?>

                                        <form class="mt-4 mb-5 "method="POST">
                                            <div class="row">
                                                <div class="col-12">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="total-amount">Total amount</h5>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h7 class="total-amount">Pilih Metode Pembayaran</h7>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center form-check mt-4">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <label class="radio-inline mr-3">
                                                            <input type="radio" value="transfer_bank" name="method_payment" required> Transfer Bank <img src="images/transfer.png" style="width:15%;" alt=""></label>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="radio-inline mr-3">
                                                            <input type="radio" value="gopay" name="method_payment" required> Gopay <img src="images/gopay.png" style="width:15%;" alt=""></label>
                                                        </div>
                                                        <div class="col-4">
                                                            <label class="radio-inline">
                                                            <input type="radio" value="shopeepay"  name="method_payment" required> Shopeepay <img src="images/shopeepay.png" style="width:15%;" alt=""></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>  
                                                <input type="hidden" value="<?=$_SESSION['id_user']?>" id="id_user"  name="id_user" class="form-control credit-card-number" placeholder="ID User">
                                            </div>
                                            <div class="pt-4"> 
                                                <label class="d-flex justify-content-between"> 
                                                    <span class="label-text label-text-cc-number">Username</span>
                                                </label>
                                            <div>  
                                                <input type="text" value="<?=$_SESSION['username']?>" id="username" name="username" class="form-control credit-card-number" placeholder="username" required>
                                            </div>
                                            <div>  
                                                <input type="hidden" value="<?php echo $data['noseri_buku'] ?>" id="noseri_buku" name="noseri_buku" class="form-control credit-card-number" placeholder="No Seri Buku">
                                            </div>
                                            <div class="mt-3">  
                                                <label><span class="label-text">Judul Buku</span></label> 
                                                <input type="text" value="<?php echo $data['judul'] ?>" id="judul" name="judul" class="form-control expiry-class" placeholder="Judul Buku" required> 
                                            </div>
                                            <div class="mt-3">  
                                                <label><span class="label-text">Harga Buku</span></label> 
                                                <input type="text" value="<?php echo $data['harga_buku'] ?>" id="harga_buku" name="harga_buku" class="form-control cvv-class" placeholder="Harga Buku" required> 
                                            </div>
                                            <div class="d-flex justify-content-between pt-5 align-items-center"> 
                                            <div class="mt-3">

                                                <button class="btn mb-1 btn-rounded btn-outline-danger"><a class="text-decoration-none text-black" href="index.php">Cancel</a></button>
                                                <button name="beli" type="submit" class="btn mb-1 btn-rounded btn-outline-success">Make Payment</button>
                                            </div>

                                                <?php
                                                    include '../includes/koneksi.php';
                                                    
                                                    if(isset($_POST['beli'])){

                                                    $id_user = $_POST['id_user'];
                                                    $method_payment = $_POST['method_payment'];
                                                    $username = $_POST['username'];
                                                    $noseri_buku = $_POST['noseri_buku'];
                                                    $judul = $_POST['judul'];
                                                    $harga_buku = $_POST['harga_buku'];
                                                    
                                                    $sql = "INSERT INTO metode_pembayaran (id_user,noseri_buku,method_payment,username,judul,harga_buku) VALUES ('$id_user','$noseri_buku','$method_payment','$username','$judul','$harga_buku')";
                                                
                                                        if($koneksi->query($sql)===TRUE){
                                                            echo "<script>
                                                            alert('Pembayaran Anda Berhasil, Tunggu Konfirmasi dari Kami !');
                                                            setTimeout(\"location.href = 'index.php';\",300);
                                                            </script> ";
                                                        } else {
                                                        echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                                                        }   
                                                    }		

                                                    // $koneksi->close();
                                                ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- #/ container -->
        </div>
        </div>
        </div>
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