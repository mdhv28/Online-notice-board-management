<?php 
$q=mysqli_query($conn,"select * from notice where usn='".$_SESSION['usn']."'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>There is no notice for You !!!</h2>";
}
else
{
?>
<h2>All Notification</h2>

<table class="table table-bordered" style="text-align:center;">
	<Tr class="success">
		<th style="text-align:center;">Sr.No</th>
		<th style="text-align:center;">Subject</th>
		<th style="text-align:center;">Details</th>
		<th style="text-align:center;">Date & Time</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['Date']."</td>";

echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>