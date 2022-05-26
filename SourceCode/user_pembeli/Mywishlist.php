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
    <title>Wishlist Saya</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/googlePlayLogo.png">
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
                            <input class="form-control mr-sm-2" style="width: 600px;" type="search" placeholder="Telusuri" aria-label="Search">
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
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
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
                                            <a href="../pages/logout.php"><span>Logout</span></a>
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
                        <a href="Mywishlist.php" aria-expanded="false">
                            <span class="nav-text ml-3">Wishlist</span>
                        </a>
                    </li>
                    <li>
                        <a href="upload.php" aria-expanded="false">
                            <span class="nav-text ml-3">Upload</span>
                        </a>
                    </li>
                    <li>
                        <a href="rakSaya.php" aria-expanded="false">
                            <span class="nav-text ml-3">Rak Saya</span>
                        </a>
                    </li>
                    <li>
                        <a href="pembelian.php" aria-expanded="false">
                            <span class="nav-text ml-3">Pembelian</span>
                        </a>
                    </li>
                    <li>
                        <a href="selesai.php" aria-expanded="false">
                            <span class="nav-text ml-3">Selesai</span>
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
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Genre</a>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="kategoriBuku/petualangan.php">Petualangan</a>
                                                    <a class="dropdown-item" href="kategoriBuku/biografi.php">Biografi & Memoar</a>
                                                    <a class="dropdown-item" href="kategoriBuku/bisnis.php">Bisnis & Investasi</a>
                                                    <a class="dropdown-item" href="kategoriBuku/anak.php">Buku Anak</a>
                                                    <a class="dropdown-item" href="kategoriBuku/kesehatan.php">Kesehatan</a>
                                                    <a class="dropdown-item" href="kategoriBuku/komputer.php">Komputer & Teknologi</a>
                                                    <a class="dropdown-item" href="kategoriBuku/masak.php">Masak, Makanan & Minuman</a>
                                                    <a class="dropdown-item" href="kategoriBuku/romantis.php">Romantis</a>
                                                    <a class="dropdown-item" href="kategoriBuku/sains.php">Sains dan Matematika</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h2 style = "color :rgb(226, 226, 226);">|</h2>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Beranda</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#rekomendasi">Rekomendasi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#baru">Yang Baru</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-question-circle fa-lg"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#"><i class="fa fa-cog fa-lg"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Daftar Buku -->
            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Yang Baru -->
                                    <div class="col-6 text-left ml-3">
                                        <h4 class="card-title">My Wishlist</h4>
                                    </div>
                                    <div class="row">
                                        
                                        <?php 
                                            include '../includes/koneksi.php';

                                            $id_user = $_SESSION['id_user'];
                                            $sql = "SELECT * FROM wishlist WHERE id_user = '".$id_user."'";
                                            $SQL_QUERY = mysqli_query($koneksi, $sql);

                                        while ($data = mysqli_fetch_array($SQL_QUERY)){
                                            $noseri_buku = $data['noseri_buku'];
                                            $cover_buku = $data['cover_buku'];
                                            $judul = $data['judul'];
                                            $penerbit = $data['penerbit'];
                                            $kategori = $data['kategori'];
                                            $harga_buku = $data['harga_buku'];

                                        ?>

                                        <!-- Perulangan Buku -->
                                        <div class="col-md-6 col-lg-3" <?=$noseri_buku;?>>
                                            <div class="card">
                                                <div class="card-body">
                                                <img class="img-fluid" src="coverBuku/<?=$cover_buku;?>" width="100%" alt="">
                                                <br> <br>
                                                    <h5 class="card-title"><?=$judul;?></h5>
                                                    <h7 class="card-title"><?=$penerbit;?></h7>
                                                    <p class="card-text"><?=$kategori;?></p>
                                                    <p class="card-text"><?=$harga_buku;?></p>
                                                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#deletewlModal<?=$noseri_buku;?>" style="width:80px">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Delete Mywishlist -->
                                        <div class="modal fade" id="deletewlModal<?=$noseri_buku;?>" tabindex="-1" role="dialog" aria-labelledby="deletewlModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="deletewlModalLabel">Hapus dari My Wishlist</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST">
                                                    <div class="modal-body">
                                                        Apakah Anda Yakin Ingin Menghapus <?=$judul;?> dari My Wishlist?
                                                    </div>
                                                        <button type="submit" class="btn btn-secondary ml-3 mb-3" data-dismiss="modal">Batal</button>
                                                        <input hidden type="text" name="idwl" value="<?=$noseri_buku;?>">
                                                        <button type="submit" name="btnhapuswl" class="btn btn-danger ml-1 mb-3" action>Hapus dari Wishlist Saya</button>
                                                        <?php
                                                        require_once'../includes/koneksi.php';
                                                        if (isset($_POST['btnhapuswl'])){
                                                
                                                            $noseri_buku = $_POST['idwl'];
                                                            $hapuswl = mysqli_query($koneksi, "DELETE FROM wishlist WHERE noseri_buku='$noseri_buku'");
                                                            if ($hapuswl){
                                                            echo "<script>setTimeout(\"location.href = 'Mywishlist.php';\",1500);</script>";
                                                    
                                                            } elseif($koneksi->connect_error){
                                                                echo 'Gagal';
                                                                header('Mywishlist.php');
                                                            }
                                                        }
                                                        ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
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
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
    <script src="js/dashboard/dashboard-1.js"></script>


</body>

</html>