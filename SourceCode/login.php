<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
require_once 'config.php';

// menangkap data yang dikirim dari form login

// menyeleksi data user dengan username dan password yang sesuai

if(isset($_POST['submit'])){
    $username = mysqli_escape_string($koneksi, $_POST['username']);
    $password = $_POST['password'];
    $login = mysqli_query($koneksi,"SELECT * from user where username='$username'");
    // menghitung jumlah data yang ditemukan    
    $cek = mysqli_num_rows($login);
    if($cek > 0){
    
        $data = mysqli_fetch_assoc($login);
    
        // cek jika user login sebagai admin
        if($data['level']=="admin"){
    
            // buat session login dan username
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Admin";
            // alihkan ke halaman admin
            header("location:admin.php");
    
        // cek jika user login sebagai penerboit
        }else if($data['level']=="user_penerbit"){
            // buat session login dan email
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['first_name'] = $data['first_name'];
            $_SESSION['last_name'] = $data['last_name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Penerbit";
            // alihkan ke halaman  user_penerbit
            header("location:index.php");
    
        // cek jika user login sebagai pembeli
        }else if($data['level']=="user_pembeli"){
            // buat session login dan email
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['first_name'] = $data['first_name'];
            $_SESSION['last_name'] = $data['last_name'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['username'] = $username;
            $_SESSION['level'] = "Pembeli";
            // alihkan ke halaman dashboard user_pembeli
            header("location:index.php");
        }
    }
}
// cek apakah email dan password di temukan pada database

?>
<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="user/images/image/png" sizes="16x16" href="user/images/googlePlayLogo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="user/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">


    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <img src="user/images/google.png" alt=""width="70px"style="display:block; margin:auto;">
                                <a class="text-center"> <h4 class="mt-3">Login</h4></a>
                                <form class="mt-5 mb-5 login-input" method="POST">
                                    <div class="form-group">
                                        <input type="username" class="form-control" placeholder="Username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit" name="submit">Sign In</button>
                                </form>
                                <p class="mt-5 login-form__footer">Dont have account? <a href="register.php" class="text-primary">Sign Up</a> now</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="user/plugins/common/common.min.js"></script>
    <script src="user/js/custom.min.js"></script>
    <script src="user/js/settings.js"></script>
    <script src="user/js/gleek.js"></script>
    <script src="user/js/styleSwitcher.js"></script>
</body>
</html>





