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
    <title>Admin - Management User</title>
    <!-- Favicon icon -->
    <link rel="icon" type="images/image/png" sizes="16x16" href="images/googlePlayLogo.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
    <!-- Custom Stylesheet -->
    <link href= "css/style.css" rel="stylesheet">

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
                <a href="admin.php">
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
                        <input name="kata_kunci" value="<?php echo $kata_kunci;?>" class="form-control mr-sm-2" style="width: 700px;" type="text" placeholder="Telusuri" aria-label="Search">
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
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            
            <div class="container-fluid">
                <div class="row" id="populer">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Management User -->
                                    <div class="col-6 text-left">
                                        <h4 class="card-title">User Management</h4>
                                    </div>

                                    <table class ='table table-bordered text-center'>
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                                <th colspan='2'>Action</th>
                                            <tr>
                                        </thead>
                                        <tbody>

                                            <!-- Fungsi Search Data -->
                                            <?php
                                                require("../includes/koneksi.php");

                                                if(isset($_POST['kata_kunci'])) {
                                                    $kata_kunci = trim($_POST['kata_kunci']);
                                                    $sql = "SELECT * FROM user WHERE username LIKE '%".$kata_kunci."%' or first_name LIKE '%".$kata_kunci."%' or last_name LIKE '%".$kata_kunci."%' or level LIKE '%".$kata_kunci."%'";
                                                    $sql_query = mysqli_query($koneksi, $sql);
                                                } else {
                                                    $sql = "SELECT * FROM user";
                                                    $sql_query = mysqli_query($koneksi, $sql);
                                                }

                                                foreach ($sql_query as $data) {
                                            ?>

                                                <tr>
                                                    <td><?= $data['username'] ?></td>
                                                    <td><?= $data['first_name'] ?></td>
                                                    <td><?= $data['last_name'] ?></td>
                                                    <td><?= $data['email'] ?></td>
                                                    <td><?= $data['level'] ?></td>
                                                    
                                                    <td>
                                                        <form method='POST'action='ubah.php'>
                                                            <input hidden type='text'name='id_user' value='<?= $data['id_user'] ?>'>
                                                            <button type='submit' name='btnUpdate'class='btn btn-success'>Update</button>
                                                        </form>
                                                    </td>

                                                    <td>
                                                        <button type='button' name='delete' class='btn btn-danger' data-toggle='modal' data-target='#delete<?= $data['id_user'] ?>'>
                                                        Hapus
                                                        </button>
                                                    </td>

                                                </tr>
                                                    <!-- Delete Modal -->
                                                    <div class="modal fade" id="delete<?= $data['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
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
                                                                        Apakah Anda Yakin Ingin Menghapus User dengan Kode : <?= $data['id_user'] ?> 
                                                                    <div class="modal-footer"> 
                                                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                                        <input hidden type="text" name="id_user" value="<?= $data['id_user'] ?>">
                                                                        <button type="submit" name="btnHapus" class="btn btn-danger" action>Hapus</button>
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
                                    

                                    <?php
                                        if(isset($_POST['btnHapus'])){
                                            $id = $_POST['id_user'];
                                            
                                            if($koneksi) {
                                                $sql = "DELETE FROM user WHERE id_user = $id";
                                                mysqli_query($koneksi, $sql);
                                                echo "<script>
                                                    alert('User Berhasil Dihapus !');
                                                    setTimeout(\"location.href = 'admin.php';\",300);
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