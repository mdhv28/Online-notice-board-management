<?php 
session_start();
unset($_SESSION['hod']);
header('location:../index.php');
?>