<?php
include('config.php');
if($_POST['id'])
{
	$id=$_POST['id'];
	echo'<option value="aa">Select Achievement  </option>';
	$a1=mysql_query("select * from achievement where Ach_id='$id'");
	while($r1=mysql_fetch_array($a1))
				{
					echo"<option value=".$r1['Ach_id'].">". $r1['Achievements']."</option>";
				}
}

?>