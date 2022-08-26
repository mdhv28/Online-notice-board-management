<script>
	function DeleteNotice(id)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_fee.php?id="+id;
		}
	}
</script>
<?php 
$q=mysqli_query($conn,"select * from feestructure");
$rr=mysqli_num_rows($q);
if(!$rr)
{
?>
	<h2 style="color:#00FFCC">All Fee Details</h2>

<table class="table table-bordered" style="text-align:center;">
	<tr>
		<th colspan="9"><a href="index.php?page=add_fee">Add New Fee Structure</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">YEAR</th>
		<th style="text-align:center;">CET-NORMAL</th>
		<th style="text-align:center;">CET-LATERAL ENTRY</th>
		<th style="text-align:center;">CET-SNQ</th>
		<th style="text-align:center;">COMED-K</th>
		<th style="text-align:center;">MANAGEMENT</th>
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
<h2 style="color:#00FFCC">All Fee Details</h2>

<table class="table table-bordered" style="text-align:center;">
	<tr>
		<th colspan="9"><a href="index.php?page=add_fee">Add New Fee Structure</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">YEAR</th>
		<th style="text-align:center;">CET-NORMAL</th>
		<th style="text-align:center;">CET-LATERAL ENTRY</th>
		<th style="text-align:center;">CET-SNQ</th>
		<th style="text-align:center;">COMED-K</th>
		<th style="text-align:center;">MANAGEMENT</th>
		<th style="text-align:center;">DELETE</th>
		<th style="text-align:center;">UPDATE</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['year']."</td>";
echo "<td>".$row['cetnormal']."</td>";
echo "<td>".$row['cetlateralentry']."</td>";
echo "<td>".$row['cetsnq']."</td>";
echo "<td>".$row['comedk']."</td>";
echo "<td>".$row['management']."</td>";

?>

<Td><a href="javascript:DeleteNotice('<?php echo $row['year']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_fee&year=".$row['year']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>