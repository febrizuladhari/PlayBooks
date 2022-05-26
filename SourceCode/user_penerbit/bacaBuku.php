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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca Buku</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/googlePlayLogo.png">
</head>
<body>
    <?php 

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    include '../includes/koneksi.php';

    $noseri_buku = input($_GET['noseri_buku']);
    $query = mysqli_query($koneksi, "SELECT * FROM buku WHERE noseri_buku='".$noseri_buku."' LIMIT 1");
    $data = mysqli_fetch_array($query);

    ?>
    
    <div class="container">
        <div class="col">
            <div class='panel panel-primary'>
                <div class='panel-heading'>
                    <h1 class="text-center">
                        <?php echo $data['judul'] ?>
                    </h1>
                    <br>
                </div>
                <div class='panel-body'>
                    <div>
                        <embed src="../user_pembeli/pdfBuku/<?php echo $data['contain_buku']; ?>" width='100%' height='1000px'>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>