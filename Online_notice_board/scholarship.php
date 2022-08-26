<?php 
$q=mysqli_query($conn,"select * from scholarship");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red;text-align:center'>No Details !!!</h2>";
}
else
{
?>

<h2 style="text-align:center;">SCHOLARSHIP DETAILS</h2>

<table class="table table-bordered" style="text-align:center;">
	<Tr class="success" style="text-align:center;">
		<th style="text-align:center;">SCHOLARSHIP NAME</th>
		<th style="text-align:center;">START DATE</th>
		<th style="text-align:center;">LAST DATE</th>
		<th style="text-align:center;">ELIGIBILITY</th>
		<th style="text-align:center;">LINK</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['sname']."</td>";
echo "<td>".$row['startdate']."</td>";
echo "<td>".$row['enddate']."</td>";
echo "<td>".$row['eligibility']."</td>";
echo "<td><a href='".$row['link']."' target='_blank'>".$row['link']."</a></td>";



echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>