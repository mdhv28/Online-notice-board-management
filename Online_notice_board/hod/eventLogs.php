
<?php 
$q=mysqli_query($conn,"select * from events where not status='Pending by HOD' order by Date");
$rr=mysqli_num_rows($q);
if(!$rr)
{
	?>
<h2 style="color:#00FFCC">All Events</h2>

<table class="table table-bordered" style="text-align:center;">
	
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">EVENT NAME</th>
		<th style="text-align:center;">EVENT DESCRIPTION</th>
		<th style="text-align:center;">DATE</th>
		<th style="text-align:center;">Status</th>
	</Tr>
	<tr>
		<th colspan="7" style="text-align:center">No Events</th>
	</tr>
<?php }
else
{
?>
<h2 style="color:#00FFCC">All Events</h2>

<table class="table table-bordered" style="text-align:center;">
	
	<Tr class="success">
		<th style="text-align:center;">SR.NO</th>
		<th style="text-align:center;">EVENT NAME</th>
		<th style="text-align:center;">EVENT DESCRIPTION</th>
		<th style="text-align:center;">DATE</th>
		<th style="text-align:center;">Status</th>
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
echo "<td>".$row['status']."</td>";



echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>