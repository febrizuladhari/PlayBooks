<?php
    require_once'../SourceCode/includes/koneksi.php';


    if(isset($_POST['addtorak'])){
    $id_filer = trim(mysqli_real_escape_string($koneksi,$_POST['idfiletmb']));
    $id_raktm = trim(mysqli_real_escape_string($koneksi,$_POST['rakt']));
    $sql = "INSERT INTO tampung_rak (id_rak, id_file) VALUES ('$id_raktm','$id_filer')";
        
    if($koneksi->query($sql)===TRUE){
    echo "<script>setTimeout(\"location.href = 'rakSaya.php';\",1500);</script>";
    } else {
    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
    }

    }
?>