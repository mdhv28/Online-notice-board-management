<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update scholarship set sname='$sname',startdate='$startdate',enddate='$enddate',eligibility='$eligibility',link='$link' where sname='".$_GET['sname']."'");
$err="<font color='blue'>Scholarship Details updated </font>";
header("Location: http://localhost/online_notice_board/admin/index.php?page=display_scholarship");

}

//select old notice 

$q=mysqli_query($conn,"select * from scholarship where sname='".$_GET['sname']."'");
$res=mysqli_fetch_array($q);

?>
<h2>Update Scholarship Details</h2>
<form method="post">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter Scholarship Name</div>
		<div class="col-sm-5">
		<input type="text" name="sname" value="<?php echo $res['sname']; ?>" class="form-control"/></div>
	</div>
	
	

	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter start date</div>
		<div class="col-sm-5">
		<input type="date" name="startdate" value="<?php echo $res['startdate']; ?>" class="form-control"/></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter end date</div>
		<div class="col-sm-5">
		<input type="date" name="enddate" value="<?php echo $res['enddate']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter eligibility</div>
		<div class="col-sm-5">
		<textarea name="eligibility" class="form-control"><?php echo $res['eligibility']; ?></textarea></div>
	</div>	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter link</div>
		<div class="col-sm-5">
		<input type="url" name="link" value="<?php echo $res['link']; ?>" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	
	</div>
	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Scholarship Details" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	