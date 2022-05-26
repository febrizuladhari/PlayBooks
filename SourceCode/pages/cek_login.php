<?php
session_start();

include('../includes/koneksi.php');

if (isset($_POST['submit'])) {

$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = $_POST['password'];

    if (empty($username)) {
        header("location:login.php?pesan=username");
    } elseif (empty($password)) {
        header("location:login.php?pesan=password");
    } else {
        $query = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
        $cek = mysqli_num_rows($query);
        if ($cek > 0) {
            $row = mysqli_fetch_array($query);
            $password_hash = $row['password'];
            if (password_verify($password, $password_hash)) {
                $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");
                $multi = mysqli_fetch_assoc($data);
                $id_user = $multi['id_user'];
                $username = $multi['username'];
                $first_name = $multi['first_name'];
                $last_name = $multi['last_name'];
                $cekuser = $multi['level'];
                $email = $row['email'];
                $nama = $multi['nama'];

                if($cekuser == "admin") {
                    $_SESSION['id_user'] = $id_user;
                    $_SESSION['username'] = $username;
                    $_SESSION['first_name'] = $first_name;
                    $_SESSION['last_name'] = $last_name;
                    $_SESSION['email'] = $email;
                    $_SESSION['level'] = "Admin";
                    header("location:../admin/admin.php");

                } elseif ($cekuser == "user_pembeli") {
                    $_SESSION['id_user'] = $id_user;
                    $_SESSION['username'] = $username;
                    $_SESSION['first_name'] = $first_name;
                    $_SESSION['last_name'] = $last_name;
                    $_SESSION['email'] = $email;
                    $_SESSION['level'] = "Pembeli";
                    header("location:../user_pembeli/index.php");

                } elseif ($cekuser == "user_penerbit") {
                    $_SESSION['id_user'] = $id_user;
                    $_SESSION['username'] = $username;
                    $_SESSION['first_name'] = $first_name;
                    $_SESSION['last_name'] = $last_name;
                    $_SESSION['email'] = $email;
                    $_SESSION['level'] = "Penerbit";
                    header("location:../user_penerbit/index.php");

                } else {
                    header("location:login.php?pesan=gagal");
                }
            
            } else {
                header("location:login.php?pesan=gagal");
            }
        } else {
            header("location:login.php?pesan=gagal");
        }
    }
}

?>