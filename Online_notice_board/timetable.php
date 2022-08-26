<?php 
$q=mysqli_query($conn,"select * from timetable order by sem");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red;text-align:center'>No Details !!!</h2>";
}
else
{
?>
<h2 style="text-align:center;" >TimeTable</h2>

<table class="table table-bordered" style="text-align:center;">
	<Tr class="success" style="text-align:center;">
		<th style="text-align:center;">SEM</th>
		<th style="text-align:center;">SEC</th>
		<th style="text-align:center;">VIEW</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['sem']."</td>";
echo "<td>".$row['sec']."</td>";
echo "<Td><a style='color:black' href='index.php?option=display_image&sem=".$row['sem']."&sec=".$row['sec']."'><button type=button> View </button></a></td>";
echo "</Tr>";
$i++;
}
?>
		
		
</table>
<?php }?>