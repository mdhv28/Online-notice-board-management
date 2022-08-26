<?php
include('connection.php');
$sem=$_GET['sem'];
$sec=$_GET['sec'];
$q=mysqli_query($conn,"select image from timetable where sem='$sem' and sec='$sec'");
$k = mysqli_fetch_assoc($q);
$image = $k['image'];
$url="admin/".$image;
?>
<div style="width:100%;margin-top:25px;margin-left:13em">
<img src="<?php echo $url ?>" style="width:800px;"  height=500px alt="timetable">
</div>

