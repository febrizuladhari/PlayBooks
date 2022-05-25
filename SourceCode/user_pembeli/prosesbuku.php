<?php
    require_once'../includes/koneksi.php';


    if(isset($_POST['addtoraks'])){
    $id_sbuku = trim(mysqli_real_escape_string($koneksi,$_POST['idbukutmb']));
    $id_raktm = trim(mysqli_real_escape_string($koneksi,$_POST['rakt']));
    $sql = "INSERT INTO tampung_rakbuku (id_rak, noseri_buku) VALUES ('$id_raktm','$id_sbuku')";
        
    if($koneksi->query($sql)===TRUE){
    echo "<script>setTimeout(\"location.href = 'rakSaya.php';\",1500);</script>";
    } else {
    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
    }

    }
?>