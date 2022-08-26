<?php 
extract($_POST);
if(isset($add))
{

	if($year=="" || $cetnormal=="" || $cetlateral=="" || $cetsnq=="" || $comedk=="" || $management=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$admin=$_SESSION['admin'];
mysqli_query($conn,"insert into feestructure values('$year','$cetnormal','$cetlateral','$cetsnq','$comedk','$management','$admin')");
		
		
		$err="<font color='green'>fee added Successfully</font>";	
	}
}

?>
<h2>Add New Fee Structure</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter year</div>
		<div class="col-sm-5">
		<input type="text" name="year" class="form-control"/></div>
	</div>
	
	
		
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Cet-normal fee</div>
		<div class="col-sm-5">
		<input type="text" name="cetnormal" class="form-control"/></div>
	</div>
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Cet-lateral entry fee</div>
		<div class="col-sm-5">
		<input type="text" name="cetlateral" class="form-control"/></div>
	</div>
	

		
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Cet-snq fee</div>
		<div class="col-sm-5">
		<input type="text" name="cetsnq" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter comed-k fee</div>
		<div class="col-sm-5">
		<input type="text" name="comedk" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter management fee</div>
		<div class="col-sm-5">
		<input type="text" name="management" class="form-control"/></div>
	</div>

	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Fee Structure" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	