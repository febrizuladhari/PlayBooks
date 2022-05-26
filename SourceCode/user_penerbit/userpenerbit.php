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
    <title>Terbitan Saya</title>
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
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Buku</a>
                                            </li>
                                            <li class="nav-item ">
                                                <a class="nav-link"  href="#"><i class="fa fa-cog fa-lg"></i></a>
                                            </li>
                                            <button class="btn btn-info mx-2 my-2 my-sm-0" type="button" data-toggle="modal" data-target="#uploadbukuModal">Upload Buku</button>                        
                                            <!-- Modal Upload Buku -->
                                            <div class="modal fade" id="uploadbukuModal" tabindex="-1" role="dialog" aria-labelledby="uploadbukuModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="uploadbukuModalLabel">Upload File</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <input class="form-control" name="id_user" value="<?=$_SESSION['id_user']?>" type="hidden" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">No Seri Buku</span>
                                                                    <input class="form-control" name="noSeri" type="number" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Judul</span>
                                                                    <input class="form-control" name="judul" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Kategori</span>
                                                                    <input class="form-control" name="kategori" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Sinopsis</span>
                                                                    <input class="form-control" name="sinopsis" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Harga</span>
                                                                    <input class="form-control" name="harga" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Halaman</span>
                                                                    <input class="form-control" name="halaman" type="number">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Bahasa</span>
                                                                    <input class="form-control" name="bahasa" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Penerbit</span>
                                                                    <input class="form-control" name="penerbit" type="text">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Tanggal</span>
                                                                    <input class="form-control" name="tanggal" type="date">
                                                                </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Contain Buku</span>
                                                                    <div class="input-group ">
                                                                        <input type="file" class="form-control" style="height:auto" id="inputGroupFile02" name="filePDF"> 
                                                                    </div>            </div>
                                                                <div class="form-group">
                                                                    <span class="form-label">Cover</span>
                                                                    <div class="input-group ">
                                                                        <input type="file" class="form-control" style="height:auto" id="inputGroupFile01" name="namafile"> 
                                                                    </div>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary btn-lg" name="buttonins">Upload</button>
                                                            
                                                                <button type="reset" class="btn btn-danger btn-lg" name="buttoncnc">Reset</button>
                                                                    
                                                                </div>
                                                                
                                                                <?php
                                                                    include '../includes/koneksi.php';
                                                                
                                                                    if(isset($_POST['buttonins'])) {
                                                                        $noseri_buku = $_POST['noSeri'];
                                                                        $judul = $_POST['judul'];
                                                                        $kategori = $_POST['kategori'];
                                                                        $sinopsis = $_POST['sinopsis'];
                                                                        $harga_buku = $_POST['harga'];
                                                                        $jlh_halaman = $_POST['halaman'];
                                                                        $bahasa = $_POST['bahasa'];
                                                                        $penerbit = $_POST['penerbit'];
                                                                        $tanggal_terbit = $_POST['tanggal'];

                                                                        // Uplaod PDF
                                                                        $tujuan = "../user_pembeli/pdfBuku/";
                                                                        $nama_file = $_FILES['filePDF']['name'];
                                                                        move_uploaded_file($_FILES['filePDF']['tmp_name'],$tujuan.$nama_file);

                                                                        // Upload Gambar
                                                                        $direktori = "../user_pembeli/coverBuku/";
                                                                        $file_name = $_FILES['namafile']['name'];
                                                                        move_uploaded_file($_FILES['namafile']['tmp_name'],$direktori.$file_name);
                                                                        $sql = "INSERT INTO buku (noseri_buku, judul, kategori, sinopsis, harga_buku, jlh_halaman, bahasa, penerbit, tanggal_terbit, contain_buku, cover_buku) VALUES ('$noseri_buku','$judul','$kategori','$sinopsis','$harga_buku','$jlh_halaman','$bahasa','$penerbit','$tanggal_terbit','$nama_file','$file_name')";
                                                                        $q = mysqli_multi_query($koneksi, $sql);
                                                                        if($q===TRUE){
                                                                            echo "<script>setTimeout(\"location.href = 'userpenerbit.php';\",1500);</script>";
                                                                        } else {
                                                                        echo "Terjadi kesalahan:".$q."<br/>".$koneksi->error;
                                                                        }
                                                                    }
                                                                ?>

                                                                <?php
                                                                    include '../includes/koneksi.php';

                                                                    if(isset($_POST['buttonins'])) {
                                                                        $noseri_buku = $_POST['noSeri'];
                                                                        $judul = $_POST['judul'];
                                                                        $kategori = $_POST['kategori'];
                                                                        $sinopsis = $_POST['sinopsis'];
                                                                        $harga_buku = $_POST['harga'];
                                                                        $jlh_halaman = $_POST['halaman'];
                                                                        $bahasa = $_POST['bahasa'];
                                                                        $penerbit = $_POST['penerbit'];
                                                                        $tanggal_terbit = $_POST['tanggal'];
                                                                        $id_user = $_POST['id_user'];

                                                                        // Uplaod PDF
                                                                        $tujuan = "../user_pembeli/pdfBuku/";
                                                                        $nama_file = $_FILES['filePDF']['name'];
                                                                        move_uploaded_file($_FILES['filePDF']['tmp_name'],$tujuan.$nama_file);

                                                                        // Upload Gambar
                                                                        $direktori = "../user_pembeli/coverBuku/";
                                                                        $file_name = $_FILES['namafile']['name'];
                                                                        move_uploaded_file($_FILES['namafile']['tmp_name'],$direktori.$file_name);
                                                                        $sql = "INSERT INTO terbitansaya (id_user, noseri_buku, judul, kategori, sinopsis, harga_buku, jlh_halaman, bahasa, penerbit, tanggal_terbit, contain_buku, cover_buku) VALUES ('$id_user','$noseri_buku','$judul','$kategori','$sinopsis','$harga_buku','$jlh_halaman','$bahasa','$penerbit','$tanggal_terbit','$nama_file','$file_name')";
                                                                        $q = mysqli_multi_query($koneksi, $sql);
                                                                        if($q===TRUE){
                                                                            echo "<script>setTimeout(\"location.href = 'userpenerbit.php';\",1500);</script>";
                                                                        } else {
                                                                        echo "Terjadi kesalahan:".$q."<br/>".$koneksi->error;
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6 text-left ml-2">
                                        <h3 class="card-title">Buku Terbitan Saya</h3>
                                    </div>
                                        <div class="row">
                                        <?php 
                                        function input($data) {
                                            $data = trim($data);
                                            $data = stripslashes($data);
                                            $data = htmlspecialchars($data);
                                            return $data;
                                        }
                                            include '../includes/koneksi.php';

                                            $id_user = $_SESSION['id_user'];
                                            $sql = "SELECT * FROM terbitansaya WHERE id_user = '".$id_user."'";
                                            $sql_query = mysqli_query($koneksi, $sql);

                                            foreach ($sql_query as $data) {
                                        ?>
                                        <!-- Perulangan Buku -->
                                        <div class="col-2" <?php echo $data['noseri_buku'] ?>>
                                            <div class="card" style="height: 35rem;">
                                                <a href="bacaBukuup.php?noseri_buku=<?php echo $data['noseri_buku'] ?>">
                                                    <img class="img-fluid" src="../user_pembeli/coverBuku/<?php echo $data['cover_buku'] ?>" alt="">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $data['judul'] ?></h5>
                                                    <p class="card-text"><?php echo $data['penerbit'] ?></p>
                                                    <p class="card-text"><?php echo $data['kategori'] ?></p>
                                                </div>
                                                <div class="btn-group dropright mb-3 ml-2" aria-expanded="false">
                                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-isi-modal-lg">Action</button>
                                                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown"></button>
                                                    <div class="dropdown-menu"><a class="dropdown-item" data-toggle="modal" data-target="#editbukuModal<?php echo $data['noseri_buku'] ?>">Edit</a>
                                                    <a class="dropdown-item" data-toggle="modal" data-target="#deletebukuModal<?php echo $data['noseri_buku'] ?>">Hapus</a>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <h5 class="text-info float-right"><?php echo $data['harga_buku'] ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Update Buku -->
                                        <div class="modal fade" id="editbukuModal<?php echo $data['noseri_buku'] ?>" tabindex="-1" role="dialog" aria-labelledby="editbukuModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editbukuModalLabel">Update My Book</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form method="POST" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <span class="form-label">ID User</span>
                                                            <input class="form-control" value="<?=$_SESSION['id_user']?>" name="id_user" type="number" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">No Seri Buku</span>
                                                            <input class="form-control" value="<?php echo $data['noseri_buku'] ?>" name="noSeri" type="number" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Judul</span>
                                                            <input class="form-control" value="<?php echo $data['judul']?>" name="judul" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Kategori</span>
                                                            <input class="form-control" value="<?php echo $data['kategori']?>" name="kategori" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Sinopsis</span>
                                                            <input class="form-control" value="<?php echo $data['sinopsis']?>" name="sinopsis" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Harga</span>
                                                            <input class="form-control" value="<?php echo $data['harga_buku']?>" name="harga" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Halaman</span>
                                                            <input class="form-control" value="<?php echo $data['jlh_halaman']?>" name="halaman" type="number">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Bahasa</span>
                                                            <input class="form-control" value="<?php echo $data['bahasa']?>" name="bahasa" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Penerbit</span>
                                                            <input class="form-control" value="<?php echo $data['penerbit']?>" name="penerbit" type="text">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Tanggal</span>
                                                            <input class="form-control" value="<?php echo $data['tanggal_terbit']?>" name="tanggal" type="date">
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Contain Buku</span>
                                                            <div class="input-group ">
                                                                <input type="file" class="form-control" style="height:auto" id="inputGroupFile02" value="<?php echo $data['contain_buku']?>" name="filePDF"> 
                                                            </div>            
                                                        </div>
                                                        <div class="form-group">
                                                            <span class="form-label">Cover</span>
                                                            <div class="input-group ">
                                                                <input type="file" class="form-control" style="height:auto" id="inputGroupFile01" value="<?php echo $data['cover_buku']?>" name="cover"> 
                                                            </div>
                                                        </div>  
                                                            <input type ="hidden" name='noSeri' value="<?php echo $data['noseri_buku']?>">
                                                            <button type="submit" class="btn btn-primary btn-lg" name="buttonupdt">Update Book</button>
                                                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">Cancel</button>
                                                            
                                                    </form>
                                                    <?php
                                                            require_once'../includes/koneksi.php';
                                                            if (isset($_POST['buttonupdt'])){
                                                                $noseri_buku = $_POST['noSeri'];
                                                                $judul = $_POST['judul'];
                                                                $kategori = $_POST['kategori'];
                                                                $sinopsis = $_POST['sinopsis'];
                                                                $harga_buku = $_POST['harga'];
                                                                $jlh_halaman = $_POST['halaman'];
                                                                $bahasa = $_POST['bahasa'];
                                                                $penerbit = $_POST['penerbit'];
                                                                $tanggal_terbit = $_POST['tanggal'];
                                                                // Uplaod PDF
                                                                $tujuan = "../user_pembeli/pdfBuku/";
                                                                $name_file = $_FILES['filePDF']['name'];
                                                                move_uploaded_file($_FILES['filePDF']['tmp_name'],$tujuan.$nama_file);

                                                                // Upload Gambar
                                                                $direktori = "../user_pembeli/coverBuku/";
                                                                $file_name = $_FILES['cover']['name'];
                                                                move_uploaded_file($_FILES['cover']['tmp_name'],$direktori.$file_name);
                                                                
                                                                if ($koneksi){
                                                                $update = "UPDATE buku SET noseri_buku='$noseri_buku', judul='$judul', kategori='$kategori', sinopsis='$sinopsis', harga_buku='$harga_buku', jlh_halaman='$jlh_halaman', bahasa='$bahasa', penerbit='$penerbit', tanggal_terbit='$tanggal_terbit', contain_buku='$name_file', cover_buku='$file_name' WHERE noseri_buku=$noseri_buku";
                                                                mysqli_query($koneksi,$update);
                                                                echo "<script>setTimeout(\"location.href = 'userpenerbit.php';\",1500);</script>";
                                                        
                                                                } else {
                                                                    echo 'Gagal';
                                                                    header('userpenerbit.php');
                                                                }
                                                            }
                                                        ?>
                                                        <?php
                                                            require_once'../includes/koneksi.php';
                                                            if (isset($_POST['buttonupdt'])){
                                                                $noseri_buku = $_POST['noSeri'];
                                                                $judul = $_POST['judul'];
                                                                $kategori = $_POST['kategori'];
                                                                $sinopsis = $_POST['sinopsis'];
                                                                $harga_buku = $_POST['harga'];
                                                                $jlh_halaman = $_POST['halaman'];
                                                                $bahasa = $_POST['bahasa'];
                                                                $penerbit = $_POST['penerbit'];
                                                                $tanggal_terbit = $_POST['tanggal'];
                                                                
                                                                // Uplaod PDF
                                                                $tujuan = "../user_pembeli/pdfBuku/";
                                                                $name_file = $_FILES['filePDF']['name'];
                                                                move_uploaded_file($_FILES['filePDF']['tmp_name'],$tujuan.$nama_file);

                                                                // Upload Gambar
                                                                $direktori = "../user_pembeli/coverBuku/";
                                                                $file_name = $_FILES['cover']['name'];
                                                                move_uploaded_file($_FILES['cover']['tmp_name'],$direktori.$file_name);
                                                                
                                                                if ($koneksi){
                                                                $update = "UPDATE terbitansaya SET noseri_buku='$noseri_buku', judul='$judul', kategori='$kategori', sinopsis='$sinopsis', harga_buku='$harga_buku', jlh_halaman='$jlh_halaman', bahasa='$bahasa', penerbit='$penerbit', tanggal_terbit='$tanggal_terbit', contain_buku='$name_file', cover_buku='$file_name' WHERE noseri_buku=$noseri_buku";
                                                                mysqli_query($koneksi,$update);
                                                                echo "<script>setTimeout(\"location.href = 'userpenerbit.php';\",1500);</script>";
                                                        
                                                                } else {
                                                                    echo 'Gagal';
                                                                    header('userpenerbit.php');
                                                                }
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal Delete Buku -->
                                        <div class="modal fade" id="deletebukuModal<?php echo $data['noseri_buku'] ?>" tabindex="-1" role="dialog" aria-labelledby="deletebukuModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="deletebukuModalLabel">HapusBuku ?</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form method="POST">
                                                    <div class="modal-body">
                                                        Apakah Anda Yakin Ingin Menghapus <?php echo $data['judul'] ?>?
                                                    </div>
                                                        <button type="submit" class="btn btn-secondary ml-3 mb-3" data-dismiss="modal">Batal</button>
                                                        <input hidden type="text" name="idbuku" value="<?php echo $data['noseri_buku'] ?>">
                                                        <button type="submit" name="btnhapus" class="btn btn-danger ml-1 mb-3" action>Hapus Buku</button>
                                                        <?php
                                                        require_once'../includes/koneksi.php';
                                                        if (isset($_POST['btnhapus'])){
                                                
                                                            $id_buku = $_POST['idbuku'];
                                                            $hapus = mysqli_query($koneksi, "DELETE FROM buku WHERE noseri_buku='$id_buku'");
                                                            if ($hapus){
                                                            echo "<script>setTimeout(\"location.href = 'tesTerbit.php';\",1500);</script>";
                                                    
                                                            } elseif($koneksi->connect_error){
                                                                echo 'Gagal';
                                                                header('tesTerbit.php');
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