<?php 
extract($_POST);
if(isset($add))
{

	if($sem=="" || $sec=="" || $subcode=="" || $sub=="" || $facultyname=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$admin=$_SESSION['admin'];
mysqli_query($conn,"insert into facultydetails values('$sem','$sec','$subcode','$sub','$facultyname','$link','$admin')");
		
		
		$err="<font color='green'>Faculty Details added Successfully</font>";	
	}
}

?>
<h2>Add New Faculty Details</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter sem</div>
		<div class="col-sm-5">
		<input type="number" name="sem" class="form-control"/></div>
	</div>
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter section</div>
		<div class="col-sm-5">
		<input type="text" name="sec" class="form-control"/></div>
	</div>
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter subject code</div>
		<div class="col-sm-5">
		<input type="text" name="subcode" class="form-control"/></div>
	</div>
	

	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter subject</div>
		<div class="col-sm-5">
		<input type="text" name="sub" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter faculty name</div>
		<div class="col-sm-5">
		<input type="text" name="facultyname" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Profile Link</div>
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
		<input type="submit" value="Add New Faculty Details" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	