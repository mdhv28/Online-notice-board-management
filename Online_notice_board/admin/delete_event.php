<?php 
include('../connection.php');
$nid=$_GET['id'];

$q=mysqli_query($conn,"update events set status='Cancelled' where event_id='$nid'");

header('location:index.php?page=notification');

?>