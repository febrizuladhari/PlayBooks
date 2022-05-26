<?php

    if($_SESSION['level']!="Pembeli")
    {
        echo "<script>
            alert('Anda Bukan Pembeli, Silakan Keluar !');
            setTimeout(\"location.href = '../pages/login.php';\",300);
        </script> ";
    }

?>