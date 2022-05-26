<?php

    if($_SESSION['level']!="Penerbit")
    {
        echo "<script>
            alert('Anda Bukan Penerbit, Silakan Keluar !');
            setTimeout(\"location.href = '../pages/login.php';\",300);
        </script> ";
    }

?>