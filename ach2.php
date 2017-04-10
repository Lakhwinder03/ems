<?php
include('config.php');
if($_POST['id'])
{
	$id=$_POST['id'];
	echo'<option value="" >Select</option>';
	$t=mysql_query("select name ,code  from sci_achivement where id='$id'");
	while($t1=mysql_fetch_array($t))
	{
		echo"<option value=".$t1[code].">". $t1[name]."</option>";
	}
	echo'</select>';
}
?>
