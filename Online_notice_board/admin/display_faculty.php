<script>
	function DeleteNotice(id,sec,subcode)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_faculty.php?id=" + id +"&sec=" + sec +"&subcode="+subcode;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from facultydetails");
$rr=mysqli_num_rows($q);
if(!$rr)
{
?>
<h2 style="color:#00FFCC">All Faculties</h2>
<table class="table table-bordered" style="text-align:center;">
	<tr>
		<th colspan="9"><a href="index.php?page=add_faculty">Add New Faculty Details</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">SEM</th>
		<th style="text-align:center;">SEC</th>
		<th style="text-align:center;">SUB-CODE</th>
		<th style="text-align:center;">SUBJECT NAME</th>
		<th style="text-align:center;">FACULTY NAME</th>
		<th style="text-align:center;">PROFILE LINK</th>
		<th style="text-align:center;">DELETE</th>
		<th style="text-align:center;">UPDATE</th>
	</Tr>
	<tr>
		<th colspan="9" style="text-align:center">No Details</th>
	</tr>
<?php }
else
{
?>
<h2 style="color:#00FFCC">All Faculties</h2>

<table class="table table-bordered" style="text-align:center;">
	<tr>
		<th colspan="9"><a href="index.php?page=add_faculty">Add New Faculty Details</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">SEM</th>
		<th style="text-align:center;">SEC</th>
		<th style="text-align:center;">SUB-CODE</th>
		<th style="text-align:center;">SUBJECT NAME</th>
		<th style="text-align:center;">FACULTY NAME</th>
		<th style="text-align:center;">PROFILE LINK</th>
		<th style="text-align:center;">DELETE</th>
		<th style="text-align:center;">UPDATE</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['sem']."</td>";
echo "<td>".$row['sec']."</td>";
echo "<td>".$row['subcode']."</td>";
echo "<td>".$row['sub']."</td>";
echo "<td>".$row['facultyname']."</td>";
echo "<td><a href='".$row['profileLink']."' target='_blank'>".$row['profileLink']."</a></td>";


?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['sem']?>','<?php echo $row['sec']?>','<?php echo $row['subcode']?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>




<?php 
echo "<Td><a href='index.php?page=update_faculty&sem=".$row['sem']."&sec=".$row['sec']."&subcode=".$row['subcode']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>