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
    <title>Pembelian Saya</title>
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
                            <span class="nav-text ml-3" style="font-size: large;">Buku</span>
                        </a>
                    </li>
                    <li>
                        <a href="bukuSaya.php" aria-expanded="false">
                            <span class="nav-text ml-3" style="font-size: large;">Buku Saya</span>
                        </a>
                    </li>
                    <li>
                        <a href="index.php" aria-expanded="false">
                            <span class="nav-text ml-3" style="font-size: large;">Toko</span>
                        </a>
                    </li>
                </ul>
                <hr>
                <ul class="metismenu" id="menu">
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
                                                                    $file_name=$_FILES['namafile']['name'];
                                                                    $id_user = $_POST['id_user'];
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
                                        <h3 class="card-title">Pembelian</h3>
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
                                        $SQL = "SELECT * FROM pembelian 
                                        JOIN buku ON pembelian.noseri_buku = buku.noseri_buku WHERE id_user = '".$id_user."'";
                                        $SQL_QUERY = mysqli_query($koneksi, $SQL);

                                        while ($data = mysqli_fetch_array($SQL_QUERY)){
                                            $noseri_buku=$data['noseri_buku'];
                                            $judul=$data['judul'];
                                            $contain_buku=$data['contain_buku'];
                                    ?>
                                    <!-- Perulangan Buku -->
                                    <div class="col-md-6 col-lg-3" <?=$noseri_buku;?>>
                                            <div class="card" style="height: 35rem;">
                                                    <img class="img-fluid" src="coverBuku/<?php echo $data['cover_buku'] ?>" alt="">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $data['judul'] ?></h5>
                                                    <p class="card-text"><?php echo $data['penerbit'] ?></p>
                                                    <p class="card-text"><?php echo $data['kategori'] ?></p>
                                                </div>
                                                <div class="btn-group dropright mb-3 ml-2" aria-expanded="false">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-isi-modal-lg">Action</button>
                                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" style="width:60px"></button>
                                                    <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="bacabukusaya.php?noseri_buku=<?php echo $data['noseri_buku'] ?>">Detail</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#addrakbukuModal<?=$noseri_buku;?>">Tambah ke Rak</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#alreadybukuModal<?=$noseri_buku;?>">Tandai Sudah di Baca</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#deletebukuModal<?=$noseri_buku;?>">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- Modal Add to Rak -->
                                    <div class="modal fade" id="addrakbukuModal<?=$noseri_buku;?>">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Tambah ke Rak</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="prosesbuku.php">
                                                <div class="modal-body">Tambahkan Buku <?php echo $data['judul'] ?> ke Rak : 
                                                </div>
                                                    <div class="form-group ml-3">
                                                        <?php
                                                        require_once'../includes/koneksi.php';

                                                        $id_user = $_SESSION['id_user'];
                                                        $SQLrb = "SELECT * FROM rak WHERE id_user = '".$id_user."'";
                                                        $SQL_QUERYrb = mysqli_query($koneksi, $SQLrb);

                                                        while ($data = mysqli_fetch_array($SQL_QUERYrb)){
                                                            $id_raktb=$data['id_rak'];
                                                            $nama_rak=$data['nama_rak'];
                                                        ?>
                                                        <div class="form-group">
                                                            <label class="form-check-label ml-3">
                                                                <input type="radio" class="form-check-input" name="rakt" value="<?=$id_raktb;?>"><?=$nama_rak;?></label>
                                                        </div>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <input hidden type="text" name="idbukutmb" value="<?=$noseri_buku;?>">
                                                    <button type="submit" class="btn btn-primary" name="addtoraks" action>Save changes</button>
                                                </div>
                                                </form>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add to Selesai -->
                                    <div class="modal fade" id="alreadybukuModal<?=$noseri_buku;?>" tabindex="-1" role="dialog" aria-labelledby="alreadyModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="alreadyModalLabel">Selesai di Baca</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST">
                                                <div class="modal-body">
                                                    Apakah Anda Telah Selesai Baca <?=$judul;?>?
                                                </div>
                                                    <button type="submit" class="btn btn-secondary ml-3 mb-3" data-dismiss="modal">Batal</button>
                                                    <input hidden type="hidden" name="id_user" value="<?=$_SESSION['id_user']?>">
                                                    <input hidden type="text" name="seribuku" value="<?=$noseri_buku;?>">
                                                    <input hidden type="text" name="isi" value="<?=$judul;?>">
                                                    <button type="submit" name="btnselesai" class="btn btn-info ml-1 mb-3" action>Tambah ke Selesai</button>
                                                        <?php
                                                                require_once'../includes/koneksi.php';
                                                                
                                                                
                                                                if(isset($_POST['btnselesai'])){
                                                                    $id_user = $_POST['id_user'];
                                                                    $noseri_buku = $_POST['seribuku'];
                                                                    $contain = $_POST['isi'];
                                                                    $sql = "INSERT INTO selesaibuku (id_user, id_selesai, contain_selesai) VALUES ('$id_user', '$noseri_buku','$contain')";
                                                                                        
                                                                    if($koneksi->query($sql)===TRUE){
                                                                    echo "<script>setTimeout(\"location.href = 'selesai.php';\",1500);</script>";
                                                                    } else {
                                                                    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                                                                    }

                                                                    
                                                                }
                                                        ?>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Delete Buku -->
                                    <div class="modal fade" id="deletebukuModal<?=$noseri_buku;?>" tabindex="-1" role="dialog" aria-labelledby="deletebukuModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title" id="deletebukuModalLabel">Hapus Buku ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST">
                                                <div class="modal-body">
                                                    Apakah Anda Yakin Ingin Menghapus <?=$judul;?>?
                                                </div>
                                                    <button type="submit" class="btn btn-secondary ml-3 mb-3" data-dismiss="modal">Batal</button>
                                                    <input hidden type="text" name="idbuku" value="<?=$noseri_buku;?>">
                                                    <button type="submit" name="btnhapus" class="btn btn-danger ml-1 mb-3" action>Hapus Buku</button>
                                                    <?php
                                                    require_once'../includes/koneksi.php';
                                                    if (isset($_POST['btnhapus'])){
                                            
                                                        $id_buku = $_POST['idbuku'];
                                                        $hapus = mysqli_query($koneksi, "DELETE FROM pembelian WHERE noseri_buku='$id_buku'");
                                                        if ($hapus){
                                                        echo "<script>setTimeout(\"location.href = 'bukuSaya.php';\",1500);</script>";
                                                
                                                        } elseif($koneksi->connect_error){
                                                            echo 'Gagal';
                                                            header('bukuSaya.php');
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