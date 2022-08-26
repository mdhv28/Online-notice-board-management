<?php 
require('../connection.php');
extract($_POST);
if(isset($add))
{
	$imageName=$_FILES['img']['name'];
	$var = "TimeTableImages/";
	$images=$var.$imageName;
	if($sem=="" || $sec=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$admin=$_SESSION['admin'];

	$query="insert into  timetable values('$sem','$sec','$images','$admin')";
	mysqli_query($conn,$query);
		

move_uploaded_file($_FILES['img']['tmp_name'],"TimeTableImages/".$_FILES['img']['name']);
		$err="<font color='green'>TimeTable added Successfully</font>";	
	}
}

?>
<h2>Add New TimeTable</h2>
<form method="post" enctype="multipart/form-data">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Sem</div>
		<div class="col-sm-5">
		<input type="number" name="sem" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Section</div>
		<div class="col-sm-5">
		<input type="Text" name="sec" class="form-control"/></div>
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
		<input type="submit" value="Add New TimeTable" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	