<?php
include('config.php');
if($_POST['id'])
{
	$id=$_POST['id'];
	echo'<option value="">Select  </option>';
	$a1=mysql_query("select * from field where id='$id'");
	while($r1=mysql_fetch_array($a1))
	{
		echo"<option value=".$r1['f_id'].">". $r1['f_name']."</option>";
	}
}

?>