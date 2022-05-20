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
                <input class="form-control" name="ulasan" type="number" required="">
            </div>
            <div class="form-group">
                <span class="form-label">Judul</span>
                <input class="form-control" name="judul" type="text">
            </div>
            <div class="form-group">
                <span class="form-label">Sinopsis</span>
                <input class="form-control" name="sinopsis" type="text">
            </div>
            <div class="form-group">
                <span class="form-label">Contoh gratis</span>
                <input class="form-control" name="contoh" type="text">
            </div>
            <div class="form-group">
                <span class="form-label">Rating</span>
                <input class="form-control" name="rating" type="text">
            </div>
            <div class="form-group">
                <span class="form-label">Harga</span>
                <input class="form-control" name="harga" type="text">
            </div>
            <div class="form-group">
                <span class="form-label">Halaman</span>
                <input class="form-control" name="halaman" type="number">
            </div>
            <div class="form-group">
                <span class="form-label">Bahasa</span>
                <input class="form-control" name="bahasa" type="text">
            </div>
            <div class="form-group">
                <span class="form-label">Penerbit</span>
                <input class="form-control" name="penerbit" type="text">
            </div>
            <div class="form-group">
                <span class="form-label">Tanggal</span>
                <input class="form-control" name="tanggal" type="date">
            </div>
            <div class="form-group">
                <span class="form-label">Contain Buku</span>
                <div class="input-group ">
                    <input type="file" class="form-control" style="height:auto" id="inputGroupFile02" name="filePDF"> 
                </div>            </div>
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
                    $judul = $_POST['judul'];
                    $sinopsis = $_POST['sinopsis'];
                    $contoh_gratis = $_POST['contoh'];
                    $rating = $_POST['rating'];
                    $harga_buku = $_POST['harga'];
                    $jlh_halaman = $_POST['halaman'];
                    $bahasa = $_POST['bahasa'];
                    $penerbit = $_POST['penerbit'];
                    $tanggal_terbit = $_POST['tanggal'];

                    // Uplaod PDF
                    $tujuan = "pdfBuku/";
                    $nama_file = $_FILES['filePDF']['name'];
                    move_uploaded_file($_FILES['filePDF']['tmp_name'],$tujuan.$nama_file);

                    // Upload Gambar
                    $direktori = "coverBuku/";
                    $file_name = $_FILES['namafile']['name'];
                    move_uploaded_file($_FILES['namafile']['tmp_name'],$direktori.$file_name);
                    $sql = "INSERT INTO buku (noseri_buku, id_ulasan, judul, sinopsis, contoh_gratis, rating, harga_buku, jlh_halaman, bahasa, penerbit, tanggal_terbit, contain_buku, cover_buku) VALUES ('$noseri_buku','$id_ulasan','$judul','$sinopsis','$contoh_gratis','$rating','$harga_buku','$jlh_halaman','$bahasa','$penerbit','$tanggal_terbit','$nama_file','$file_name')";
                        
                    if($koneksi->query($sql)===TRUE){
                        echo "<script>setTimeout(\"location.href = '';\",1500);</script>";
                    } else {
                    echo "Terjadi kesalahan:".$sql."<br/>".$koneksi->error;
                    }

                    
                }
            ?>
        </form>





    </div>

</body>
</html>
