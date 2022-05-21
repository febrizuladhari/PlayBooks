<?php
    // include "config.php";

    // if(isset($_POST['submit'])){
    //     if(registrasi($_POST)){
    //         header("location : login.php");
    //         exit;
    //     }
    // }
    // function registrasi($datanya){
    //     global $koneksi;
    //     $username=stripslashes(stripslashes(htmlspecialchars($datanya['username'])));
    //     $first_name=stripslashes(stripslashes(htmlspecialchars($datanya['first_name'])));
    //     $last_name=stripslashes(stripslashes(htmlspecialchars($datanya['last_name'])));
    //     $email=stripslashes(stripslashes(htmlspecialchars($datanya['email'])));
    //     $email_verified=stripslashes(stripslashes(htmlspecialchars($datanya['email_verified'])));
    //     $password=stripslashes(stripslashes(htmlspecialchars($datanya['password'])));
    //     $level=stripslashes(stripslashes(htmlspecialchars($datanya['level'])));
        

    //     $query = "INSERT INTO user VALUES('','username','first_name','last_name','email','email_verified','password','level')";
    //     mysqli_query($koneksi,$query);
    //     return mysqli_affected_rows($koneksi);
    // }
    require 'config.php';

    if(isset($_POST["register"])){
        if(registrasi($_POST) > 0){
            echo "<script>
                    alert('user baru berhasil ditambahkan!');
            </script>";
        } else{
            echo mysqli_error($koneksi);
        }
    }

?>

<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/googlePlayLogo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">


    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-8">
                    <div class="form-input-content">
                        <div class="card login-form mb-0 my-5">
                            <div class="card-body pt-5 ">
                                    <img src="images/google.png" alt=""width="70px">
                                    <h5 class="mt-3"sizes="">Buat Akun Google</h5>
                                <form class="mt-4 mb-5 login-input" method="POST">
                                    <div class="row">
                                        <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="First Name" name="first_name" required>
                                    </div>
                                    </div>
                                        <div class="col-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Last Name" name="last_name" required>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="" class="form-control" placeholder="E-mail Address" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="" class="form-control" placeholder="Username" name="username" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    </div>
                                        <div class="col-6">
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Konfirmasi Password" name="konfirmasi_password" required>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="btn-group dropdown mb-1">
                                            <button type="button" class="btn btn-primary dropdown-toggle btn-lg btn-block" style="width: 672.5px;" data-toggle="dropdown">Level User</button>
                                            <div class="dropdown-menu" style="width: 672.5px; text-align: center;">
                                            <a class="dropdown-item" href="#" name="level" id="user_penerbit">Penerbit</a> 
                                            <a class="dropdown-item" href="#" name="level" id="user_pembeli">Pembeli</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" name="register" type="submit">Sign up</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="login.html" class="text-primary">Sign in </a> now</p>
                                    </p>
    
                                </div>
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
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





