<?php 
include('../connection.php');
$sem=$_GET['sem'];
$sec=$_GET['sec'];


$q=mysqli_query($conn,"delete from timetable where sem='$sem' and sec='$sec'");

header('location:index.php?page=timetable');

?>