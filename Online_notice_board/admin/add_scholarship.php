<?php 
extract($_POST);
if(isset($add))
{

	if($sname=="" || $startdate=="" || $enddate=="" || $eligibility=="" || $link=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$admin=$_SESSION['admin'];

mysqli_query($conn,"insert into scholarship values('$sname','$startdate','$enddate','$eligibility','$link','$admin')");
		
		
		$err="<font color='green'>Scholarship details added Successfully</font>";	
	}
}

?>
<h2>Add New Scholarship details</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter scholarship name</div>
		<div class="col-sm-5">
		<input type="text" name="sname" class="form-control"/></div>
	</div>
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter start date</div>
		<div class="col-sm-5">
		<input type="date" name="startdate" class="form-control"/></div>
	</div>
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter end date</div>
		<div class="col-sm-5">
		<input type="date" name="enddate" class="form-control"/></div>
	</div>
	

	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter eligibility</div>
		<div class="col-sm-5">
		<textarea name="eligibility" class="form-control"></textarea></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter link</div>
		<div class="col-sm-5">
		<input type="url" name="link" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Scholarship Details" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	