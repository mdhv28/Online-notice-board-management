<?php 
$q=mysqli_query($conn,"select * from events where status='Approved' order by Date");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red;text-align:center'>No Events !!!</h2>";
}
else
{
?>
<h2 style="text-align:center;">ALL EVENTS</h2>

<table class="table table-bordered" style="text-align:center;">
	<Tr class="success" style="text-align:center;">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">EVENT NAME</th>
		<th style="text-align:center;">EVENT DESCRIPTION</th>
		<th style="text-align:center;">DATE</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['event_name']."</td>";
echo "<td>".$row['event_desc']."</td>";
echo "<td>".$row['Date']."</td>";


echo "</Tr>";
$i++;
}
		?>
		
</table>
</div>
<?php }?>