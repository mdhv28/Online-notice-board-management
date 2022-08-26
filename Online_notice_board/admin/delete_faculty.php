<?php 
include('../connection.php');
$nid=$_GET['id'];
$secid = $_GET['sec'];
$subid = $_GET['subcode'];

$q=mysqli_query($conn,"delete from facultydetails where sem='$nid' and sec='$secid' and subcode='$subid'");

header('location:index.php?page=display_faculty');

?>