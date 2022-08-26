<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_scholarship.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from scholarship");
$rr=mysqli_num_rows($q);
if(!$rr)
{
	?>
	<h2 style="color:#00FFCC">All Scholarship Details</h2>

<table class="table table-bordered" style="text-align:center;">
	<tr>
		<th colspan="8"><a href="index.php?page=add_scholarship">Add New Scholarship</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">SCHOLARSHIP NAME</th>
		<th style="text-align:center;">START DATE</th>
		<th style="text-align:center;">END DATE</th>
		<th style="text-align:center;">ELIGIBILITY</th>
		<th style="text-align:center;">LINK</th>
		<th style="text-align:center;">DELETE</th>
		<th style="text-align:center;">UPDATE</th>
	</Tr>
	<tr>
		<th colspan="8" style="text-align:center">No Details</th>
	</tr>

<?php }
else
{
?>
<h2 style="color:#00FFCC">All Scholarship Details</h2>

<table class="table table-bordered" style="text-align:center;">
	<tr>
		<th colspan="8"><a href="index.php?page=add_scholarship">Add New Scholarship</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">SCHOLARSHIP NAME</th>
		<th style="text-align:center;">START DATE</th>
		<th style="text-align:center;">END DATE</th>
		<th style="text-align:center;">ELIGIBILITY</th>
		<th style="text-align:center;">LINK</th>
		<th style="text-align:center;">DELETE</th>
		<th style="text-align:center;">UPDATE</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['sname']."</td>";
echo "<td>".$row['startdate']."</td>";
echo "<td>".$row['enddate']."</td>";
echo "<td>".$row['eligibility']."</td>";
echo "<td><a href='".$row['link']."' target='_blank'>".$row['link']."</a></td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['sname']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_scholarship&sname=".$row['sname']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>