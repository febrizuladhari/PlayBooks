<?php

    if($_SESSION['level']!="Admin")
    {
        echo "<script>
            alert('Anda Bukan Admin, Silakan Keluar !');
            setTimeout(\"location.href = '../pages/login.php';\",300);
        </script> ";
    }

?>