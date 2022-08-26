<?php 
extract($_POST);
if(isset($update))
{
mysqli_query($conn,"update facultydetails set sem='$sem',sec='$sec',subcode='$subcode',sub='$sub',facultyname='$facultyname',profileLink='$link' where sem='".$_GET['sem']."' and sec='".$_GET['sec']."' and subcode='".$_GET['subcode']."' ");
$err="<font color='blue'>Faculty Details updated </font>";
header("Location: http://localhost/online_notice_board/admin/index.php?page=display_faculty");
}

//select old notice 

$q=mysqli_query($conn,"select * from facultydetails where sem='".$_GET['sem']."' and sec='".$_GET['sec']."' and subcode='".$_GET['subcode']."'");
$res=mysqli_fetch_array($q);

?>
<h2>Update Faculty Details</h2>
<form method="post">
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row">
		<div class="col-sm-4">Enter sem</div>
		<div class="col-sm-5">
		<input type="text" name="sem" value="<?php echo $res['sem']; ?>" class="form-control"/></div>
	</div>
	
	
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter section</div>
		<div class="col-sm-5">
		<input type="text" name="sec" value="<?php echo $res['sec']; ?>" class="form-control"/></div>
	</div>
	
		
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter subject code</div>
		<div class="col-sm-5">
		<input type="text" name="subcode" value="<?php echo $res['subcode']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter subject name</div>
		<div class="col-sm-5">
		<input type="text" name="sub" value="<?php echo $res['sub']; ?>" class="form-control"/></div>
	</div>	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter faculty name</div>
		<div class="col-sm-5">
		<input type="text" name="facultyname" value="<?php echo $res['facultyname']; ?>" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter link</div>
		<div class="col-sm-5">
		<input type="url" name="link" value="<?php echo $res['profileLink']; ?>" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
	
	</div>
	
		
		<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-4">
		<input type="submit" value="Update Faculty Details" name="update" class="btn btn-success"/>
		<input type="reset" class="btn btn-success"/>
		</div>
	</div>
</form>	