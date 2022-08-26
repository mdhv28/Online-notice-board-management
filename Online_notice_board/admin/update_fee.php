<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update feestructure set year='$year',cetnormal='$cetnoraml',cetlateralentry='$cetlateral',cetsnq='$cetsnq',comedk='$comedk',management='$management' where year='".$_GET['year']."'");
$err="<font color='blue'>Fee updated </font>";
header("Location: http://localhost/online_notice_board/admin/index.php?page=display_fee");

}

//select old notice 

$q=mysqli_query($conn,"select * from feestructure where year='".$_GET['year']."'");
$res=mysqli_fetch_array($q);

?>
<h2>Update Fee Structure</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter year</div>
		<div class="col-sm-5">
		<input type="text" name="year" value="<?php echo $res['year']; ?>" class="form-control"/></div>
	</div>
	
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter cet-noraml fee</div>
		<div class="col-sm-5">
		<input type="text" name="cetnoraml" value="<?php echo $res['cetnormal']; ?>" class="form-control"/></div>
	</div>
	
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter cet-lateral entry fee</div>
		<div class="col-sm-5">
		<input type="text" name="cetlateral" value="<?php echo $res['cetlateralentry']; ?>" class="form-control"/></div>
	</div>

	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter cet-snq fee</div>
		<div class="col-sm-5">
		<input type="text" name="cetsnq" value="<?php echo $res['cetsnq']; ?>" class="form-control"/></div>
	</div>	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter comed-k fee</div>
		<div class="col-sm-5">
		<input type="text" name="comedk" value="<?php echo $res['comedk']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter management fee</div>
		<div class="col-sm-5">
		<input type="text" name="management" value="<?php echo $res['management']; ?>" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>
	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Fee Structure" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	