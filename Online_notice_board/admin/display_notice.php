<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_notice.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from notice order by Date");
$rr=mysqli_num_rows($q);
if(!$rr)
{
?>
<h2 style="color:#00FFCC">All Notice</h2> 

<table class="table table-bordered" style="text-align:center;">
	<tr>
		<th colspan="7"><a href="index.php?page=add_notice">Add New notice</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">Sr.No</th>
		<th style="text-align:center;">Subject</th>
		<th style="text-align:center;">Details</th>
		<th style="text-align:center;">USN</th>
		<th style="text-align:center;">Date</th>
		<th style="text-align:center;">Delete</th>
		<th style="text-align:center;">Update</th>
	</Tr>
	<tr>
		<th colspan="7" style="text-align:center">No Details</th>
	</tr>

<?php }
else
{
?>
<h2 style="color:#00FFCC">All Notice</h2>

<table class="table table-bordered"style="text-align:center;" >
	<tr>
		<th colspan="7"><a href="index.php?page=add_notice">Add New notice</a></th>
	</tr>
	<Tr class="success">
		<th >Sr.No</th>
		<th style="text-align:center;">Subject</th>
		<th style="text-align:center;">Details</th>
		<th style="text-align:center;">USN</th>
		<th style="text-align:center;">Date</th>
		<th style="text-align:center;">Delete</th>
		<th style="text-align:center;">Update</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['usn']."</td>";
echo "<td>".$row['Date']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['notice_id']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_notice&notice_id=".$row['notice_id']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>