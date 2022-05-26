<?php
session_start();
unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['first_name']);
unset($_SESSION['last_name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['level']);

session_destroy();
echo "<script>alert('Anda Berhasil Logout, Terima Kasih !');document.location='login.php'</script>"

?>