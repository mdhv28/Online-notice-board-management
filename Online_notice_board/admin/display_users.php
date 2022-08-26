<?php 
$q=mysqli_query($conn,"select usn,name,email,mobile,gender from users order by usn");
$rr=mysqli_num_rows($q);
if(!$rr)
{
	?>
	<h2 style="color:#00FFCC">All Students</h2>

<table class="table table-bordered" style="text-align:center;">
		<tr>
		<th colspan="8"><a href="index.php?page=add_user">Add New Student</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">USN</th>
		<th style="text-align:center;">NAME</th>
		<th style="text-align:center;">EMAIL</th>
		<th style="text-align:center;">MOBILE</th>
		<th style="text-align:center;">GENDER</th>
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
<script>
	function DeleteUser(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
<h2 style="color:#00FFCC">All Students</h2>

<table class="table table-bordered" style="text-align:center;">
		<tr>
		<th colspan="8"><a href="index.php?page=add_user">Add New Student</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">USN</th>
		<th style="text-align:center;">NAME</th>
		<th style="text-align:center;">EMAIL</th>
		<th style="text-align:center;">MOBILE</th>
		<th style="text-align:center;">GENDER</th>
		<th style="text-align:center;">DELETE</th>
		<th style="text-align:center;">UPDATE</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['usn']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['mobile']."</td>";
echo "<td>".$row['gender']."</td>";
?>

<Td><a href="javascript:DeleteUser('<?php echo $row['usn']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>

<?php
echo "<Td><a href='index.php?page=update_user&usn=".$row['usn']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";

$i++;
}
		?>
		
</table>
<?php }?>