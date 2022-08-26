<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<?php
include('../connection.php');
$sem=$_GET['sem'];
$sec=$_GET['sec'];
$q=mysqli_query($conn,"select image from timetable where sem='$sem' and sec='$sec'");
$k = mysqli_fetch_assoc($q);
$image = $k['image'];

?>
<div style="width:100%;margin-top:20px;margin-left:4em">
<img src="<?php echo $image ?>" style="width:800px;"  height=500px alt="timetable">
</div>
</body>
</html>
