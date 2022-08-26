<?php 
extract($_POST);
if(isset($add))
{

	if($details=="" || $event=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
	$admin=$_SESSION['admin'];
mysqli_query($conn,"insert into events(event_id,event_name,event_desc,date,admin) values('','$event','$details','$dates','$admin')");
		
		
		$err="<font color='green'>Event added Successfully</font>";	
	}
}

?>
<h2>Add New Event</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Event</div>
		<div class="col-sm-5">
		<input type="text" name="event" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"></textarea></div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter date</div>
		<div class="col-sm-5">
		<input type="date" name="dates" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Event" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	