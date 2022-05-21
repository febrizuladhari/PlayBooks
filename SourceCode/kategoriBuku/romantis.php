<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Romantis</title>
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
                            <input class="form-control mr-sm-2" style="width: 800px;" type="search" placeholder="Telusuri" aria-label="Search">
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
                                            <a href="akun.html"><span>Kelola Akun Anda</span></a>
                                        </li>
                                        <hr class="my-2">
                                        <li>
                                            <a href="login.html"><span>Logout</span></a>
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
                        <a href="index.html" aria-expanded="true">
                            <span class="nav-text ml-3">Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="bukuSaya.html" aria-expanded="false">
                            <span class="nav-text ml-3">Buku Saya</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.html" aria-expanded="false">
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
                        <a href="metode.html" aria-expanded="false">
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
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-expanded="false">Genre</a>
                                                <div class="dropdown-menu">
                                                <a class="dropdown-item" href="petualangan.php">Petualangan</a>
                                                    <a class="dropdown-item" href="biografi.php">Biografi & Memoar</a>
                                                    <a class="dropdown-item" href="bisnis.php">Bisnis & Investasi</a>
                                                    <a class="dropdown-item" href="anak.php">Buku Anak</a>
                                                    <a class="dropdown-item" href="kesehatan.php">Kesehatan</a>
                                                    <a class="dropdown-item" href="komputer.php">Komputer & Teknologi</a>
                                                    <a class="dropdown-item" href="masak.php">Masak, Makanan & Minuman</a>
                                                    <a class="dropdown-item" href="romantis.php">Romantis</a>
                                                    <a class="dropdown-item" href="sains.php">Sains dan Matematika</a>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <h2 style = "color :rgb(226, 226, 226);">|</h2>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../index.php">Beranda</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../#populer">Rekomendasi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="../#baru">Yang Baru</a>
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
                                    <!-- Paling Populer -->
                                    <div class="col-6 text-left mb-4">
                                        <h4 class="card-title">Romantis</h4>
                                    </div>
                                    <div class="row">
                                        
                                        <?php 
                                            include '../includes/koneksi.php';

                                            $sql = "SELECT * FROM buku WHERE kategori = 'Romantis'";
                                            $sql_query = mysqli_query($koneksi, $sql);

                                            foreach ($sql_query as $data) {
                                        ?>

                                        <!-- Perulangan Buku -->
                                        <div class="col-sm-6 col-md-4 col-lg-2" <?php echo $data['noseri_buku'] ?>>
                                            <div class="card" style="height: 35rem;">
                                                <a href="../detailBuku.php?noseri_buku=<?php echo $data['noseri_buku'] ?>">
                                                    <img class="img-fluid" src="../coverBuku/<?php echo $data['cover_buku'] ?>" alt="">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $data['judul'] ?></h5>
                                                    <p class="card-text"><?php echo $data['penerbit'] ?></p>
                                                    <p class="card-text"><?php echo $data['kategori'] ?></p>
                                                </div>
                                                <div class="card-footer">
                                                    <h5 class="text-info float-right"><?php echo $data['harga_buku'] ?></h5>
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