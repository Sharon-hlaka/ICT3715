<?php
session_start();
unset($_SESSION['email']); // unset session variable
session_destroy(); // destroy session
header("location:../login.php");
?>