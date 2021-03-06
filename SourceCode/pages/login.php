
<!DOCTYPE html>
<html class="h-100" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../user_pembeli/images/googlePlayLogo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="../user_pembeli/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">


    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                                <img src="../user/images/google.png" alt=""width="70px"style="display:block; margin:auto;">
                                <a class="text-center"> <h4 class="mt-3">Login</h4></a>
                                    <?php
                                        if(isset($_GET['pesan'])) {
                                            if($_GET['pesan'] == "gagal") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                Username and password did not match or you do not have an account yet.
                                                </div>';
                                            } elseif ($_GET['pesan'] == "username") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                Username must be filled out.
                                                </div>';
                                            } elseif ($_GET['pesan'] == "password") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                Password must be filled out.
                                                </div>';
                                            } elseif ($_GET['pesan'] == "berhasil") {
                                                echo '<div class="alert alert-primary" role="alert">
                                                Registration successful, please login.
                                                </div>';
                                            }
                                        }
                                    ?>
                                <form action="cek_login.php" class="mt-5 mb-5 login-input" method="POST">
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
    <script src="../user_pembeli/plugins/common/common.min.js"></script>
    <script src="../user_pembeli/js/custom.min.js"></script>
    <script src="../user_pembeli/js/settings.js"></script>
    <script src="../user_pembeli/js/gleek.js"></script>
    <script src="../user_pembeli/js/styleSwitcher.js"></script>
</body>
</html>





