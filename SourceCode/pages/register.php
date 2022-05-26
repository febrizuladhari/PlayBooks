<?php

	require_once'../includes/koneksi.php';
	if (isset($_POST['submit'])){
		$username = ($_POST['username']);
		$first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$password = password_hash($pass, PASSWORD_BCRYPT);
        $level = $_POST['level'];
		$usernamecheck = (mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'")));
		$msg = "";

		if (empty($username)) {
			header("location:register.php?pesan=nousername");
		} elseif (empty($first_name)) {
			header("location:register.php?pesan=nofirst_name");
		} elseif (empty($last_name)) {
			header("location:register.php?pesan=nolast_name");
		} elseif (empty($email)) {
			header("location:register.php?pesan=noemail");
		} elseif (empty($pass)) {
			header("location:register.php?pesan=nopass");
		} elseif ($usernamecheck > 0) {
			header("location:register.php?pesan=check");
		} else {
			$sql = "INSERT INTO user (username,first_name,last_name,email,password,level) VALUES ('$username','$first_name','$last_name','$email','$password','$level')";
																			
			if($koneksi->query($sql)===TRUE){
				header("location:login.php?pesan=berhasil");
			} else {
				echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
			}
		}
	}
									
	$koneksi->close();
?>


<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../user/images/googlePlayLogo.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="../user_pembeli/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">


    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-8">
                    <div class="form-input-content">
                        <div class="card login-form mb-0 my-5">
                            <div class="card-body pt-5">
                                    <img src="../user/images/google.png" alt=""width="70px">
                                    <h5 class="mt-3"sizes="">Buat Akun Google</h5>
                                    <?php
                                        if(isset($_GET['pesan'])) {
                                            if($_GET['pesan'] == "nousername") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                Username must be filled out.
                                                </div>';
                                            } elseif ($_GET['pesan'] == "nofirst_name") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                First Name must be filled out.
                                                </div>';
                                            } elseif ($_GET['pesan'] == "nolast_name") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                Last Name must be filled out.
                                                </div>';
                                            } elseif ($_GET['pesan'] == "noemail") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                Email must be filled out.
                                                </div>';
                                            } elseif ($_GET['pesan'] == "nopass") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                Password must be filled out.
                                                </div>';
                                            } elseif ($_GET['pesan'] == "match") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                Password did not match.
                                                </div>';
                                            } elseif ($_GET['pesan'] == "check") {
                                                echo '<div class="alert alert-warning" role="alert">
                                                Username already exists.
                                                </div>';
                                            }
                                        }
                                    ?>
                                <form class="mt-4 mb-5" method="POST">
                                    <div class="row">
                                        <div class="col-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" required>
                                        </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Last Name" name="last_name" required>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="E-mail Address" name="email" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="level" >
                                            <option value="#">Level User</option>
                                            <option value="user_penerbit" name="level">Penerbit</option>
                                            <option value="user_pembeli" name="level">Pembeli</option>
                                        </select>
                                    </div>
                                    <button class="btn login-form__btn submit w-100" type="submit" name="submit">Sign up</button>
                                </form>
                                    <p class="mt-5 login-form__footer">Have account <a href="login.php" class="text-primary">Sign in </a> now</p>
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
    <script src="../user_pembeli/plugins/common/common.min.js"></script>
    <script src="../user_pembeli/js/custom.min.js"></script>
    <script src="../user_pembeli/js/settings.js"></script>
    <script src="../user_pembeli/js/gleek.js"></script>
    <script src="../user_pembeli/js/styleSwitcher.js"></script>
</body>
</html>





