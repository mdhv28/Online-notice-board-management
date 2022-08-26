<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"delete from users where usn='$nid'");

header('location:index.php?page=manage_users');

?>