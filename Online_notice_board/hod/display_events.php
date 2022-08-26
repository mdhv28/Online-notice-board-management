<script>
	function RejectNotice(id)
	{
		if(confirm("You want to Reject this event?"))
		{
			
			window.location.href="reject_event.php?id="+id;
			
		}
	}

	function ApproveNotice(id)
	{
		if(confirm("You want to Approve this event?"))
		{
			
			window.location.href="Approve_event.php?id="+id;
		}	
		
	}
</script>
<?php 
	$q=mysqli_query($conn,"select * from events where status='Pending by HOD'");
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
		<th style="text-align:center;">APPROVE</th>
		<th style="text-align:center;">REJECT</th>
	</Tr>
	<tr>
		<th colspan="7" style="text-align:center">No Events</th>
	</tr>
</table>

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
		<th style="text-align:center;">APPROVE</th>
		<th style="text-align:center;">REJECT</th>
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

?>

<Td><a href="javascript:ApproveNotice('<?php echo $row['event_id']; ?>')" style='color:green'><span class='glyphicon glyphicon-ok'></span></a></td>
<?php
$i++;

?>

<Td><a href="javascript:RejectNotice('<?php echo $row['event_id']; ?>')" style='color:red'><span class='glyphicon glyphicon-remove'></span></a></td>
<?php
echo "</Tr>";
}
?>

		
</table>
<?php }?>