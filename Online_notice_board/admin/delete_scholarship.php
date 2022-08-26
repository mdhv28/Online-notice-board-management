<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from scholarship where sname='$nid'");

header('location:index.php?page=display_scholarship');

?>