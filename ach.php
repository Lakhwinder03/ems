<?php
include('config.php');
if($_POST['id'])
{
	$id=$_POST['id'];
	echo'<option value="">Select Achievement  </option>';
	$a1=mysql_query("select * from main where st_id='$id'");
	while($r=mysql_fetch_array($a1))	
	{
		echo"<option value=".$r[Ach_id].">". $r[Achievements]."</option>";
	}
}

?>