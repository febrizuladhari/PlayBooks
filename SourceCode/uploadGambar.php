<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="user/icons/font-awesome/css/font-awesome.min.css">
    <!-- Custom Stylesheet -->
    <link href="user/css/style.css" rel="stylesheet">
    <script src="user/plugins/jquery/jquery-3.6.0.js"></script>
</head>
<body>

    <div class="container mt-5 mb-5">
        

        <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <span class="form-label">No Seri Buku</span>
                <input class="form-control" name="noSeri" type="number" required="">
            </div>
            <div class="form-group">
                <span class="form-label">ID Ulasan</span>
                <input class="form-control" name="ulasan" type="number"required="">
            </div>
            <div class="form-group">
                <span class="form-label">Contain Buku</span>
                <input class="form-control" name="contain" type="text"required="">
            </div>
            <div class="form-group">
                <span class="form-label">Judul</span>
                <input class="form-control" name="judul" type="text"required="">
            </div>
            <div class="form-group">
                <span class="form-label">Sinopsis</span>
                <input class="form-control" name="sinopsis" type="text" required="">
            </div>
            <div class="form-group">
                <span class="form-label">Contoh gratis</span>
                <input class="form-control" name="contoh" type="text" required="">
            </div>
            <div class="form-group">
                <span class="form-label">Rating</span>
                <input class="form-control" name="rating" type="text" required="">
            </div>
            <div class="form-group">
                <span class="form-label">Harga</span>
                <input class="form-control" name="harga" type="text" required="">
            </div>
            <div class="form-group">
                <span class="form-label">Halaman</span>
                <input class="form-control" name="halaman" type="number" required="">
            </div>
            <div class="form-group">
                <span class="form-label">Bahasa</span>
                <input class="form-control" name="bahasa" type="text" required="">
            </div>
            <div class="form-group">
                <span class="form-label">Penerbit</span>
                <input class="form-control" name="penerbit" type="text" required="">
            </div>
            <div class="form-group">
                <span class="form-label">Tanggal</span>
                <input class="form-control" name="tanggal" type="date" required="">
            </div>
            <div class="form-group">
                <span class="form-label">Cover</span>
                <div class="input-group ">
                    <input type="file" class="form-control" style="height:auto" id="inputGroupFile01" name="namafile"> 
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1">
                    <div class="form-btn">
                        <button type="submit" class="btn btn-primary btn-lg" name="buttonins">Upload</button>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-btn">
                        <button type="reset" class="btn btn-danger btn-lg" name="buttoncnc">Reset</button>
                    </div>
                </div>
            </div>

            <?php
                include 'includes/koneksi.php';
                
                
                if(isset($_POST['buttonins'])) {
                    $noseri_buku = $_POST['noSeri'];
                    $id_ulasan = $_POST['ulasan'];
                    $contain_buku = $_POST['contain'];
                    $judul = $_POST['judul'];
                    $sinopsis = $_POST['sinopsis'];
                    $contoh_gratis = $_POST['contoh'];
                    $rating = $_POST['rating'];
                    $harga_buku = $_POST['harga'];
                    $jlh_halaman = $_POST['halaman'];
                    $bahasa = $_POST['bahasa'];
                    $penerbit = $_POST['penerbit'];
                    $tanggal_terbit = $_POST['tanggal'];
                    $direktori = "coverBuku/";
                    $file_name = $_FILES['namafile']['name'];
                    move_uploaded_file($_FILES['namafile']['tmp_name'],$direktori.$file_name);
                    $sql = "INSERT INTO buku (noseri_buku, id_ulasan, contain_buku, judul, sinopsis, contoh_gratis, rating, harga_buku, jlh_halaman, bahasa, penerbit, tanggal_terbit, cover_buku) VALUES ('$noseri_buku','$id_ulasan','$contain_buku','$judul','$sinopsis','$contoh_gratis','$rating','$harga_buku','$jlh_halaman','$bahasa','$penerbit','$tanggal_terbit','$file_name')";
                        
                    if($koneksi->query($sql)===TRUE){
                        echo "<script>setTimeout(\"location.href = '';\",1500);</script>";
                    } else {
                    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                    }

                    
                }
            ?>
        </form>

        <!-- <form action="" method="post" enctype="multipart/form-data">
            <h2>File Upload</h2>
            <input type="file" name="NamaFile">
            <input type="submit" name="proses" value="Upload">
        </form> -->

        <?php 
        // include 'includes/koneksi.php';

        // if(isset($_POST['proses'])) {

        //     $direktori = "coverBuku/";
        //     $file_name = $_FILES['NamaFile']['name'];
        //     move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

        //     mysqli_query($koneksi, "INSERT into buku set cover_buku='$file_name'");

        //     echo "Berhasil";

        // }
        ?>




    </div>

</body>
</html>
