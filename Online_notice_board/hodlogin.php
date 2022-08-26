<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{
		

$sql=mysqli_query($conn,"select * from hod where username='$e' and pass='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['hod']=$e;
header('location:hod');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<h2>HOD Login Form</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter your username</div>
		<div class="col-sm-5">
		<input type="text" name="e" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter your password</div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<input type="submit" value="Login" name="save" class="btn btn-success"/>
		
		</div>
	</div>
</form>	