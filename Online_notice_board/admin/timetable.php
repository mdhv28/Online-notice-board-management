<script>
	function DeleteNotice(sem,sec)
	{
		if(confirm("You want to delete this record ?"))
		{
		window.location.href="delete_timetable.php?sem="+sem+"&sec="+sec;
		}
	}
	
</script>
<?php 
$q=mysqli_query($conn,"select * from timetable order by sem");

$rr=mysqli_num_rows($q);
if(!$rr)
{
?>
<h2 style="color:#00FFCC">TimeTable</h2>

<table class="table table-bordered" style="text-align:center;">
	<tr>
		<th colspan="5"><a href="index.php?page=add_timetable">Add New TimeTable</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SEM</th>
		<th style="text-align:center;">SEC</th>
		<th style="text-align:center;">VIEW</th>
		<th style="text-align:center;">DELETE</th>
		<th style="text-align:center;">UPDATE</th>
	</Tr>
	<tr>
		<th colspan="5" style="text-align:center">No Details</th>
	</tr>
<?php }
else
{
?>
<h2 style="color:#00FFCC">TimeTable</h2>

<table class="table table-bordered" style="text-align:center;">
	<tr>
		<th colspan="5"><a href="index.php?page=add_timetable">Add New TimeTable</a></th>
	</tr>
	<Tr class="success">
		<th style="text-align:center;">SEM</th>
		<th style="text-align:center;">SEC</th>
		<th style="text-align:center;">VIEW</th>
		<th style="text-align:center;">DELETE</th>
		<th style="text-align:center;">UPDATE</th>
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{
$image=$row['image'];
echo "<Tr>";
echo "<td>".$row['sem']."</td>";
echo "<td>".$row['sec']."</td>";

echo "<Td><a style='color:black' href='index.php?page=display_image&sem=".$row['sem']."&sec=".$row['sec']."'><button type=button> View </button></a></td>";


?>


<Td><a href="javascript:DeleteNotice('<?php echo $row['sem'] ?>','<?php echo $row['sec']; ?>')" style='color:Red'><span class='glyphicon glyphicon-trash'></span></a></td>


<?php 
echo "<Td><a href='index.php?page=update_timetable&sem=".$row['sem']."&sec=".$row['sec']."' style='color:green'><span class='glyphicon glyphicon-edit'></span></a></td>";
echo "</Tr>";
$i++;
}
		?>
		
</table>

<?php }?>