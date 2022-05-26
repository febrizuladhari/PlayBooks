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
    <title>Selesai Dibaca</title>
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
                                            <a href="akun.php"><span>Kelola Akun Anda</span></a>
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
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Buku</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link"  href="#"><i class="fa fa-cog fa-lg"></i></a>
                                            </li>
                                            <button class="btn btn-info mx-2 my-2 my-sm-0" type="button" data-toggle="modal" data-target="#uploadModal">Upload File</button>                                       
                                            <!-- Modal Upload File -->
                                            <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="uploadModalLabel">Upload File</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form method="POST" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="message-text" class="col-form-label">Input File:</label>
                                                                <div class="input-group ">
                                                                    <input type="hidden" class="form-control" value="<?=$_SESSION['id_user']?>" style="height:auto" id="id_user" name="id_user">
                                                                    <input type="file" class="form-control" style="height:auto" id="inputGroupFile01" name="namafile"> 
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" name="buttonup">Upload File</button>
                                                            <?php
                                                                require_once'../includes/koneksi.php';
                                                                
                                                                
                                                                if(isset($_POST['buttonup'])){
                                                                    $direktori = "../user_pembeli/file/";
                                                                    $id_user = $_POST['id_user'];
                                                                    $file_name=$_FILES['namafile']['name'];
                                                                    move_uploaded_file($_FILES['namafile']['tmp_name'],$direktori.$file_name);
                                                                    $sql = "INSERT INTO file (id_user, contain) VALUES ('$id_user', '$file_name')";
                                                                                        
                                                                    if($koneksi->query($sql)===TRUE){
                                                                    echo "<script>setTimeout(\"location.href = 'upload.php';\",1500);</script>";
                                                                    } else {
                                                                    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                                                                    }

                                                                    
                                                                }
                                                            ?>
                                                        </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-info mx-2 my-2 my-sm-0" type="button" data-toggle="modal" data-target="#rakModal">Buat Rak</button>                                      
                                            <!-- Modal Buat Rak -->
                                            <div class="modal fade" id="rakModal" tabindex="-1" role="dialog" aria-labelledby="rakModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="rakModalLabel">Create Rak</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form method="POST" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Masukkan Nama untuk Rak Ini :</label>
                                                                <input type="hidden" class="form-control" value="<?=$_SESSION['id_user']?>" id="id_user" name="id_user">
                                                                <input type="text" class="form-control" id="recipient-name" name="rak">
                                                            </div>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary" name="buttonrak">Buat Rak</button>
                                                            <?php
                                                                require_once'../includes/koneksi.php';
                                                                
                                                                if(isset($_POST['buttonrak'])){
                                                                    $id_user = $_POST['id_user'];
                                                                    $nama_rak = $_POST['rak'];
                                                                    $sql = "INSERT INTO rak (id_user, nama_rak) VALUES ('$id_user', '$nama_rak')";
                                                                                        
                                                                    if($koneksi->query($sql)===TRUE){
                                                                    echo "<script>setTimeout(\"location.href = 'rakSaya.php';\",1500);</script>";
                                                                    } else {
                                                                    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                                                                    }

                                                                    
                                                                }
                                                            ?>
                                                        </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="row">
                                    <div class="col-6 text-left ml-2">
                                        <h3 class="card-title">Selesai</h3>
                                    </div>
                                    <div class="row">
                                    <?php
                                        function input($data) {
                                            $data = trim($data);
                                            $data = stripslashes($data);
                                            $data = htmlspecialchars($data);
                                            return $data;
                                        }
                                        require_once'../includes/koneksi.php';

                                        $id_user = $_SESSION['id_user'];
                                        $SQL = "SELECT * FROM selesai WHERE id_user = '".$id_user."'";
                                        $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                        while ($data = mysqli_fetch_array($SQL_QUERY)){
                                            $id_selesai=$data['id_selesai'];
                                            $contain=$data['contain_selesai'];
                                    ?>
                                    <div class="col-2" <?=$id_selesai;?>>
                                        <div class="card">
                                        </div> 
                                        <img class="img-fluid" src="images/file.png"  alt="">
                                            <div class="card-body">
                                            <div class="btn-group dropright mb-1" aria-expanded="false">
                                            <p class="card-text"><?=$contain;?></p>
                                            </div>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" style="width:90px"></button>
                                            <div class="dropdown-menu"><a class="dropdown-item"  href="bacafile.php?id_file=<?php echo $data['id_selesai'] ?>">Detail</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#deleteslsModal<?=$id_selesai;?>">Tandai Belum di Baca</a>
                                            </div>
                                            </div>
                                    </div>
                                    <!-- Add to Belum Selesai -->
                                    <div class="modal fade" id="deleteslsModal<?=$id_selesai;?>" tabindex="-1" role="dialog" aria-labelledby="deleteslsModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="deleteslsModalLabel">Belum Selesai ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST">
                                                <div class="modal-body">
                                                    Apakah Tandai <?=$contain;?> Belum Selesai di Baca ?
                                                </div>
                                                    <button type="submit" class="btn btn-secondary ml-3 mb-3" data-dismiss="modal">Batal</button>
                                                    <input hidden type="text" name="id_selesai" value="<?=$id_selesai;?>">
                                                    <button type="submit" name="btnhapussls" class="btn btn-warning ml-1 mb-3" action>Tandai Belum di Baca</button>
                                                    <?php
                                                    require_once'../includes/koneksi.php';
                                                    if (isset($_POST['btnhapussls'])){
                                            
                                                        $id_selesai = $_POST['id_selesai'];
                                                        $hapussls = mysqli_query($koneksi, "DELETE FROM selesai WHERE id_selesai='$id_selesai'");
                                                        if ($hapussls){
                                                        echo "<script>setTimeout(\"location.href = 'selesai.php';\",1500);</script>";
                                                
                                                        } elseif($koneksi->connect_error){
                                                            echo 'Gagal';
                                                            header('selesai.php');
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
                                    <?php
                                        require_once'../includes/koneksi.php';

                                        $id_user = $_SESSION['id_user'];
                                        $SQL = "SELECT * FROM selesaibuku WHERE id_user = '".$id_user."'";
                                        $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                        while ($data = mysqli_fetch_array($SQL_QUERY)){
                                            $id_selesaib=$data['id_selesai'];
                                            $containb=$data['contain_selesai'];
                                    ?>
                                    <div class="col-2" <?=$id_selesaib;?>>
                                        <div class="card">
                                        </div> 
                                        <img class="img-fluid" src="images/buku.png"  alt="">
                                            <div class="card-body">
                                            <div class="btn-group dropright mb-1" aria-expanded="false">
                                            <p class="card-text"><?=$containb;?></p>
                                            </div>
                                            <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" style="width:90px"></button>
                                            <div class="dropdown-menu"><a class="dropdown-item"  href="bacabukusaya.php?noseri_buku=<?php echo $data['id_selesai'] ?>">Detail</a>
                                            <a class="dropdown-item" data-toggle="modal" data-target="#deleteslsbModal<?=$id_selesaib;?>">Tandai Belum di Baca</a>
                                            </div>
                                            </div>
                                    </div>
                                    <!-- Add to Belum Selesai Buku -->
                                    <div class="modal fade" id="deleteslsbModal<?=$id_selesaib;?>" tabindex="-1" role="dialog" aria-labelledby="deleteslsbModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="deleteslsbModalLabel">Belum Selesai ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST">
                                                <div class="modal-body">
                                                    Apakah Tandai <?=$containb;?> Belum Selesai di Baca ?
                                                </div>
                                                    <button type="submit" class="btn btn-secondary ml-3 mb-3" data-dismiss="modal">Batal</button>
                                                    <input hidden type="text" name="id_selesaib" value="<?=$id_selesaib;?>">
                                                    <button type="submit" name="btnhapusslsb" class="btn btn-warning ml-1 mb-3" action>Tandai Belum di Baca</button>
                                                    <?php
                                                    require_once'../includes/koneksi.php';
                                                    if (isset($_POST['btnhapusslsb'])){
                                            
                                                        $id_selesaib = $_POST['id_selesaib'];
                                                        $hapusslsb = mysqli_query($koneksi, "DELETE FROM selesaibuku WHERE id_selesai='$id_selesaib'");
                                                        if ($hapusslsb){
                                                        echo "<script>setTimeout(\"location.href = 'selesai.php';\",1500);</script>";
                                                
                                                        } elseif ($koneksi->connect_error){
                                                            echo 'Gagal';
                                                            header('selesai.php');
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