<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update events set status='Pending by HOD',event_name='$sub',event_desc='$details',Date='$dates' where event_id='".$_GET['event_id']."'");
$err="<font color='blue'>event updated </font>";
header("Location: http://localhost/online_notice_board/admin/index.php?page=notification");

}

//select old notice 

$q=mysqli_query($conn,"select * from events where event_id='".$_GET['event_id']."'");
$res=mysqli_fetch_array($q);

?>
<h2>Update Event</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4"  >Enter Subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" value="<?php echo $res['event_name']; ?>" class="form-control"/></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4" >Enter Details</div>
		<div class="col-sm-5">
		<textarea name="details" class="form-control"><?php echo $res['event_desc']; ?></textarea></div>
	</div>
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4" >Enter date</div>
		<div class="col-sm-5">
		<input type="date" name="dates" value="<?php echo $res['Date']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Event" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	