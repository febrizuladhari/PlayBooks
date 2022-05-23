<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['first_name']);
unset($_SESSION['last_name']);
unset($_SESSION['level']);

session_destroy();
echo "<script>alert('Anda Berhasil Logout, Terima Kasih !');document.location='login.php'</script>"

?>