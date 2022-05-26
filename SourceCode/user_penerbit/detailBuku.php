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
    <title>Detail Buku</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/googlePlayLogo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
    <!-- Jquery -->
    <script src="js/jquery-3.6.0.js"></script>
    <!-- Popper JS -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
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
                            <input class="form-control mr-sm-2" style="width: 700px;" type="search" placeholder="Telusuri" aria-label="Search">
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
                                            <a href="akun.html"><span>Kelola Akun Anda</span></a>
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
                        <a href="userpenerbit.php" aria-expanded="false">
                            <span class="nav-text ml-3">Terbitan Saya</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" aria-expanded="false">
                            <span class="nav-text ml-3">Toko</span>
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
                                            <a class="nav-link" href="index.php">Beranda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Rekomendasi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php">Yang Baru</a>
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
            <div class="container-fluid">
                <div class="row">

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
                    <!-- Detail Buku -->
                    <div class="col-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <img class="img-fluid" src="../user_pembeli/coverBuku/<?php echo $data['cover_buku'] ?>" alt="">
                                    </div>
                                    <div class="col-8">
                                        <h1 class="mt-2"><?php echo $data['judul'] ?></h1>
                                        <hr>
                                        <h3 class="mt-3"><?php echo $data['penerbit'] ?></h3>
                                        <br>
                                        <h5 class="mt-3">Kategori &nbsp; : <?php echo $data['kategori'] ?></h5>
                                        <h5 class="mt-3">Bahasa &nbsp; &nbsp; : <?php echo $data['bahasa'] ?></h5>
                                        <h5 class="mt-3">Halaman&nbsp; : <?php echo $data['jlh_halaman'] ?></h5>
                                        <h5 class="mt-3">Terbitan &nbsp;&nbsp;: <?php echo $data['tanggal_terbit'] ?></h5>

                                        <!-- Tombol Baca Buku -->
                                        <a class="text-white text-decoration-none" href="bacaBuku.php?noseri_buku=<?php echo $data['noseri_buku'] ?>" target="_blank">
                                            <button type="button" class="btn mb-1 btn-info mt-5">Baca Buku
                                                <span class="btn-icon-right"><i class="fa fa-book"></i></span>
                                            </button>
                                        </a>
                                    </div>
                                </div>

                                <div class="container">
                                    <hr>
                                    <div class="row mt-3">
                                        <p class="text-justify">
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <?php echo $data['sinopsis'] ?>
                                        </p>
                                        <hr>
                                    </div>
                                    <hr>
                                    
                                    <!-- Rating Review Buku -->
                                    <div class="container">
                                        <div class="card">
                                            <div class="card-header">Review Buku</div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6 text-center">
                                                        <h1 class="text-warning mt-4 mb-4">
                                                            <b><span id="average_rating">0.0</span> / 5</b>
                                                        </h1>
                                                        <div class="mb-3">
                                                            <i class="fa fa-star star-light mr-1 main_star"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"></i>
                                                            <i class="fa fa-star star-light mr-1 main_star"></i>
                                                        </div>
                                                        <h3><span id="total_review">0</span> Review</h3>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <p>
                                                            <div class="progress-label-left"><b>5</b> <i class="fa fa-star text-warning"></i></div>

                                                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                                                            </div>
                                                        </p>
                                                        <p>
                                                            <div class="progress-label-left"><b>4</b> <i class="fa fa-star text-warning"></i></div>
                                                            
                                                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                                                            </div>               
                                                        </p>
                                                        <p>
                                                            <div class="progress-label-left"><b>3</b> <i class="fa fa-star text-warning"></i></div>
                                                            
                                                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                                                            </div>               
                                                        </p>
                                                        <p>
                                                            <div class="progress-label-left"><b>2</b> <i class="fa fa-star text-warning"></i></div>
                                                            
                                                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                                                            </div>               
                                                        </p>
                                                        <p>
                                                            <div class="progress-label-left"><b>1</b> <i class="fa fa-star text-warning"></i></div>
                                                            
                                                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                                                            <div class="progress">
                                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                                                            </div>               
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-5" id="review_content"></div>
                                    </div>

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
                                    <?php 
                                        include '../includes/koneksi.php';

                                        $sql = "SELECT * FROM buku ORDER BY RAND() LIMIT 4";
                                        $sql_query = mysqli_query($koneksi, $sql);

                                        foreach ($sql_query as $data) {
                                    ?>
                                    <div class="col-6" <?php echo $data['noseri_buku'] ?>>
                                        <div class="card" style="height: 35rem;">
                                                <a href="detailBuku.php?noseri_buku=<?php echo $data['noseri_buku'] ?>">
                                                    <img class="img-fluid" src="../user_pembeli/coverBuku/<?php echo $data['cover_buku'] ?>" alt="">
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

    <!-- Styling Rating -->
    <style>
        .progress-label-left
        {
            float: left;
            margin-right: 0.5em;
            line-height: 1em;
        }
        .progress-label-right
        {
            float: right;
            margin-left: 0.3em;
            line-height: 1em;
        }
        .star-light
        {
            color:#e9ecef;
        }
    </style>

    <!-- Fungsi Rating -->
    <script>

        $(document).ready(function(){

            var rating_data = 0;

            $('#add_review').click(function(){
                $('#review_modal').modal('show');
            });

            $(document).on('mouseenter', '.submit_star', function(){
                var rating = $(this).data('rating');
                reset_background();

                for(var count = 1; count <= rating; count++)
                {
                    $('#submit_star_'+count).addClass('text-warning');
                }

            });

            function reset_background()
            {
                for(var count = 1; count <= 5; count++)
                {
                    $('#submit_star_'+count).addClass('star-light');
                    $('#submit_star_'+count).removeClass('text-warning');
                }
            }

            $(document).on('mouseleave', '.submit_star', function(){
                reset_background();

                for(var count = 1; count <= rating_data; count++)
                {
                    $('#submit_star_'+count).removeClass('star-light');
                    $('#submit_star_'+count).addClass('text-warning');
                }

            });

            $(document).on('click', '.submit_star', function(){
                rating_data = $(this).data('rating');
            });

            $('#save_review').click(function(){
                var id_user = $('#id_user').val();
                var username = $('#username').val();
                var judul = $('#judul').val();
                var ulasan = $('#ulasan').val();
                var noseri_buku = $('#noseri_buku').val();

                if(ulasan == '')
                {
                    alert("Tolong Isi Ulasan Anda");
                    return false;
                }
                else
                {
                    $.ajax({
                        url:"submit_rating.php",
                        method:"POST",
                        data:{rating_data:rating_data, id_user:id_user, username:username, judul:judul, ulasan:ulasan, noseri_buku:noseri_buku},
                        success:function(data)
                        {
                            $('#review_modal').modal('hide');
                            load_rating_data();
                            alert(data);
                        }
                    })
                }

            });

            load_rating_data();

            function load_rating_data()
            {
                $.ajax({
                    url:"submit_rating.php",
                    method:"POST",
                    data:{action:'load_data'},
                    dataType:"JSON",
                    success:function(data)
                    {
                        $('#average_rating').text(data.average_rating);
                        $('#total_review').text(data.total_review);

                        var count_star = 0;

                        $('.main_star').each(function(){
                            count_star++;
                            if(Math.ceil(data.average_rating) >= count_star)
                            {
                                $(this).addClass('text-warning');
                                $(this).addClass('star-light');
                            }
                        });

                        $('#total_five_star_review').text(data.five_star_review);
                        $('#total_four_star_review').text(data.four_star_review);
                        $('#total_three_star_review').text(data.three_star_review);
                        $('#total_two_star_review').text(data.two_star_review);
                        $('#total_one_star_review').text(data.one_star_review);
                        $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');
                        $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');
                        $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');
                        $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');
                        $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');
                        if(data.review_data.length > 0)
                        {
                            var html = '';
                            for(var count = 0; count < data.review_data.length; count++)
                            {
                                html += '<div class="row mb-3">';
                                html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].username.charAt(0)+'</h3></div></div>';
                                html += '<div class="col-sm-11">';
                                html += '<div class="card">';
                                html += '<div class="card-header"><h4>Reviewer : '+data.review_data[count].username+'</h4></div>';
                                html += '<div class="card-header"><h6>Judul Buku : '+data.review_data[count].judul+'</h6></div><hr>';
                                html += '<div class="card-body">';

                                for(var star = 1; star <= 5; star++)
                                {
                                    var class_name = '';

                                    if(data.review_data[count].rating >= star)
                                    {
                                        class_name = 'text-warning';
                                    }
                                    else
                                    {
                                        class_name = 'star-light';
                                    }

                                    html += '<i class="fa fa-star '+class_name+' mr-1"></i>';
                                }

                                html += '<br />';
                                html += data.review_data[count].ulasan;
                                html += '</div>';
                                html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';
                                html += '</div>';
                                html += '</div>';
                                html += '</div>';
                            }

                            $('#review_content').html(html);
                        }
                    }
                })
            }

        });

    </script>


