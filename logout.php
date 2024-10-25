<?php 

session_start();
unset($_SESSION['nik']);
header("Location: login");
 
?>