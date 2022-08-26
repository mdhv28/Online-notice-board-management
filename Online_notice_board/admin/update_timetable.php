<?php 
extract($_POST);
if(isset($update))
{
	$imageName=$_FILES['img']['name'];
	$var = "TimeTableImages/";
	$images=$var.$imageName;
mysqli_query($conn,"update timetable set sem='$sem',sec='$sec',image='$images' where sem='".$_GET['sem']."' and sec='".$_GET['sec']."' ");
move_uploaded_file($_FILES['img']['tmp_name'],"TimeTableImages/".$_FILES['img']['name']);

$err="<font color='blue'>TimeTable updated </font>";
header("Location: http://localhost/online_notice_board/admin/index.php?page=timetable");
}

//select old notice 

$q=mysqli_query($conn,"select * from timetable where sem='".$_GET['sem']."' and sec='".$_GET['sec']."' ");
$res=mysqli_fetch_array($q);

?>
<h2>Update TimeTable</h2>
<form method="post" enctype="multipart/form-data" >
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter sem</div>
		<div class="col-sm-5">
		<input type="number" name="sem" value="<?php echo $res['sem']; ?>" class="form-control"/></div>
	</div>
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter section</div>
		<div class="col-sm-5">
		<input type="text" name="sec" value="<?php echo $res['sec']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Upload Image</div>
		<div class="col-sm-5">
		<input type="file" name="img" class="form-control" required/></div>
	</div>
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	
	</div>
	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update TimeTable" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	