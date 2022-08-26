<?php 
extract($_POST);
if(isset($add))
{

	if($usn=="" || $name=="" || $email=="" || $mobile=="" || $gender=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		$admin=$_SESSION['admin'];

mysqli_query($conn,"insert into users values('$usn','$name','$email','student','$mobile','$gender','$admin')");
		
		
		$err="<font color='green'>user added Successfully</font>";	
	}
}

?>
<h2>Add New Student</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter USN</div>
		<div class="col-sm-5">
		<input type="text" name="usn" class="form-control"/></div>
	</div>
	
	
		
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter name</div>
		<div class="col-sm-5">
		<input type="text" name="name" class="form-control"/></div>
	</div>
	
	
	

	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter email</div>
		<div class="col-sm-5">
		<input type="email" name="email" class="form-control"/></div>
	</div>
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter mobile</div>
		<div class="col-sm-5">
		<input type="tel" name="mobile" class="form-control"/></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter gender</div>
		<div class="col-sm-5">
		<input type="text" name="gender" class="form-control"/></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	</div>	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Add New Student" name="add" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	