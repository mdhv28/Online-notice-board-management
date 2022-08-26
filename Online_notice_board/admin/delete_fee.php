<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from feestructure where year='$nid'");

header('location:index.php?page=display_fee');

?>