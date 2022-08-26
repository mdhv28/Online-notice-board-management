<?php 
$q=mysqli_query($conn,"select * from facultydetails order by sem");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red;text-align:center'>No Details !!!</h2>";
}
else
{
?>
<h2 style="text-align:center;" >FACULTY DETAILS</h2>

<table class="table table-bordered" style="text-align:center;">
	<Tr class="success" style="text-align:center;">
		<th style="text-align:center;">SEM</th>
		<th style="text-align:center;">SEC</th>
		<th style="text-align:center;">SUB CODE</th>
		<th style="text-align:center;">SUBJECT</th>
		<th style="text-align:center;">FACULTY NAME</th>
		<th style="text-align:center;">PROFILE LINK</th>
		</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$row['sem']."</td>";
echo "<td>".$row['sec']."</td>";
echo "<td>".$row['subcode']."</td>";
echo "<td>".$row['sub']."</td>";
echo "<td>".$row['facultyname']."</td>";
echo "<td style='word-wrap:break-all;'><a href='".$row['profileLink']."' target='_blank'>".$row['profileLink']."</a></td>";



echo "</Tr>";
$i++;
}
		?>
		
</table>
<?php }?>