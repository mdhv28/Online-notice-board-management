<?php 
$q=mysqli_query($conn,"select * from feestructure order by year");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red;text-align:center'>No Details !!!</h2>";
}
else
{
?>

<h2 style="text-align:center;">FEE STRUCTURE</h2>

<table class="table table-bordered" style="text-align:center;">
	<Tr class="success">
		<th  style="text-align:center;">YEAR</th>
		<th  style="text-align:center;">CET NORMAL</th>
		<th  style="text-align:center;">CET LATERAL ENTRY</th>
		<th  style="text-align:center;">CET SNQ</th>
		<th  style="text-align:center;">COMED-K</th>
		<th  style="text-align:center;">MANAGEMENT</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['year']."</td>";
echo "<td>".$row['cetnormal']."</td>";
echo "<td>".$row['cetlateralentry']."</td>";
echo "<td>".$row['cetsnq']."</td>";
echo "<td>".$row['comedk']."</td>";
echo "<td>".$row['management']."</td>";


echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>