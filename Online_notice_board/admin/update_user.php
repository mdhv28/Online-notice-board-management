<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update users set usn='$usn',name='$name',email='$email',mobile='$mobile',gender='$gender' where usn='".$_GET['usn']."' ");
$err="<font color='blue'>Student Details updated </font>";
header("Location: http://localhost/online_notice_board/admin/index.php?page=manage_users");
}

//select old notice 

$q=mysqli_query($conn,"select * from users where usn='".$_GET['usn']."' ");
$res=mysqli_fetch_array($q);

?>
<h2>Update Student Details</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
	<div class="col-sm-4">Enter USN</div>
		<div class="col-sm-5">
		<input type="text" name="usn" value="<?php echo $res['usn']; ?>" class="form-control"/></div>
	</div>
	
	
	
	
	
	<div class="row" style="margin-top:10px">
	<div class="col-sm-4">Enter name</div>
		<div class="col-sm-5">
		<input type="text" name="name" value="<?php echo $res['name']; ?>" class="form-control"/></div>
	</div>
	
		
	
	
	<div class="row" style="margin-top:10px">
	<div class="col-sm-4">Enter email</div>
		<div class="col-sm-5">
		<input type="text" name="email" value="<?php echo $res['email']; ?>" class="form-control"/></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
	<div class="col-sm-4">Enter mobile</div>
		<div class="col-sm-5">
		<input type="text" name="mobile" value="<?php echo $res['mobile']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
	<div class="col-sm-4">Enter gender</div>
		<div class="col-sm-5">
		<input type="text" name="gender" value="<?php echo $res['gender']; ?>" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	
	</div>
	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Student Details" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	