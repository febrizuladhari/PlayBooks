<?php
if(!isset($_SESSION)){
    session_start();
}
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = "playbooks";

    $koneksi = mysqli_connect($host, $user, $pass, $database);

    if(!$koneksi){
    die ("Koneksi Gagal: ".mysqli_connect_errno().
        " - ".mysqli_connect_error());
    }

    function registrasi($datanya){
        global $koneksi;
        $username=stripslashes(stripslashes(htmlspecialchars($datanya["username"])));
        $first_name=stripslashes(stripslashes(htmlspecialchars($datanya["first_name"])));
        $last_name=stripslashes(stripslashes(htmlspecialchars($datanya["last_name"])));
        $email=stripslashes(stripslashes(htmlspecialchars($datanya["email"])));
        // $email_verified=stripslashes(stripslashes(htmlspecialchars($datanya["email_verified"])));
        $password=mysqli_real_escape_string($koneksi, $datanya["password"]);
        //$password2=mysqli_real_escape_string($koneksi, $datanya["password2"]);
        $level=stripslashes(stripslashes(htmlspecialchars($datanya["level"])));
    
        $password = password_hash($password, PASSWORD_DEFAULT);

        // var_dump($password);die;
        mysqli_query($koneksi, "INSERT INTO user VALUES('', '$username', '$first_name', '$last_name', '$email', '$password', '$level')");
        return mysqli_affected_rows($koneksi);
        // $query = "INSERT INTO user VALUES('','username','first_name','last_name','email','email_verified','password','level')";
        // mysqli_query($koneksi,$query);
        // return mysqli_affected_rows($koneksi);
    }


?>
