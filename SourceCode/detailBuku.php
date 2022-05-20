<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Detail Buku</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="user/images/googlePlayLogo.png">
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
                <a href="index.html">
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
                            <input class="form-control mr-sm-2" type="search" placeholder="Telusuri" aria-label="Search">
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
                    <?php 
                        include 'includes/koneksi.php';

                        
                    ?>
                    <!-- Detail Buku -->
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="img-fluid" src="user/images/coverBuku/img1.jpg" alt="">
                                    </div>
                                    <div class="col-8">
                                        <h2 class="mt-2">Judul Buku</h2>
                                        <hr>
                                        <h3 class="mt-3">Penulis</h3>
                                        <h4 class="mt-3">Tanggal Terbit</h4>
                                        <h4 class="mt-3">Kepustakaan</h4>
                                        
                                        <button type="button" class="btn mb-1 btn-info mt-5">Beli | Harga <span class="btn-icon-right"><i class="fa fa-shopping-cart"></i></span>
                                        </button>
                                        <button type="button" class="btn mb-1 btn-info mt-5">Tambah ke Wishlish <span class="btn-icon-right"><i class="fa fa-bookmark"></i></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="container">
                                    <hr>
                                    <div class="row mt-3">
                                        <p class="text-justify">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur ullam amet esse accusantium libero nulla voluptatem laborum quasi veniam mollitia tempore deleniti in hic vero eaque, et commodi corporis vel.
                                            Voluptatem, nostrum optio? Labore voluptate, et obcaecati quod beatae voluptas quos a odit harum eveniet, aliquam numquam, ipsum assumenda ratione commodi sequi nobis. Ut, repellat voluptatum. Nesciunt, quisquam impedit! Aliquam.
                                            Mollitia magni neque, iure assumenda odit ea, veniam, placeat tenetur ad aut eius deserunt natus ullam temporibus omnis eveniet nulla deleniti distinctio quaerat hic totam quisquam dolorem. Vero, quia sapiente.
                                            Vel eaque reiciendis est? Natus dicta quia corporis nam recusandae minima, incidunt dolor molestiae iste quod laboriosam ratione, aliquam provident ipsam culpa. Culpa non dolor excepturi deleniti debitis! Quod, voluptate?
                                            Quo provident consequuntur earum, magnam aperiam sint eveniet, sunt distinctio quasi corrupti sapiente iste perferendis, ex rem possimus modi corporis voluptatum! Quaerat laudantium nihil suscipit ratione, illum debitis eum quam?
                                            Consequatur fuga vel iusto sequi veniam, nostrum quo voluptatum inventore sunt neque possimus dolorum repudiandae dignissimos aliquid nesciunt excepturi facilis laborum? Cumque excepturi atque ad maxime qui ipsum labore aliquam.
                                            Illum nulla, ducimus quod vitae maiores quos? Iusto, nesciunt illum, neque non at sed inventore impedit reiciendis natus quos tenetur ipsa cum fugiat quo veritatis alias aliquid aspernatur quaerat animi.
                                            Aperiam itaque nulla ex cupiditate modi praesentium placeat ducimus consequatur ipsum dolore error nesciunt voluptatem excepturi, optio fuga labore consequuntur voluptates repellat iste nisi totam nam eum dicta earum. Expedita?
                                            Obcaecati deleniti natus nulla dolor fuga. Reiciendis eligendi quasi, est nulla deserunt, enim alias voluptates magnam repellat fugiat quidem nam dolore quia dolores iusto temporibus? Impedit molestias nesciunt eveniet voluptatem.
                                            Sunt ea excepturi reiciendis veniam natus aut cupiditate fugiat voluptatibus, deleniti enim vel autem nihil asperiores facere distinctio porro hic, aliquam voluptatem quam culpa? Consequuntur magnam quis quam sint error!
                                        </p>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Rekomendasi -->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="col-12 text-left">
                                    <h4 class="card-title">Rekomendasi</h4>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <img class="img-fluid" src="user/images/coverBuku/img1.jpg" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Judul Buku 1</h5>
                                                <p class="card-text">Penulis 1</p>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-text d-inline"><small class="text-muted">Bintang</small>
                                                </p><a href="#" class="card-link float-right"><small>Rp 100.000</small></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <img class="img-fluid" src="user/images/coverBuku/img1.jpg" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Judul Buku 1</h5>
                                                <p class="card-text">Penulis 1</p>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-text d-inline"><small class="text-muted">Bintang</small>
                                                </p><a href="#" class="card-link float-right"><small>Rp 100.000</small></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <img class="img-fluid" src="user/images/coverBuku/img1.jpg" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Judul Buku 1</h5>
                                                <p class="card-text">Penulis 1</p>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-text d-inline"><small class="text-muted">Bintang</small>
                                                </p><a href="#" class="card-link float-right"><small>Rp 100.000</small></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <img class="img-fluid" src="user/images/coverBuku/img1.jpg" alt="">
                                            <div class="card-body">
                                                <h5 class="card-title">Judul Buku 1</h5>
                                                <p class="card-text">Penulis 1</p>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-text d-inline"><small class="text-muted">Bintang</small>
                                                </p><a href="#" class="card-link float-right"><small>Rp 100.000</small></a>
                                            </div>
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