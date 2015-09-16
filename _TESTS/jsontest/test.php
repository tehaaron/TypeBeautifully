<?php
include 'db.php';
$con = mysql_connect($host,$user,$pass);
if (!$con)
{
	die('could not connect: ' . mysql_error());
}

mysql_select_db("Calibri", $con);
//end connection basics

$result = mysql_query("SELECT * FROM style where styleid = 2");
$array = mysql_fetch_row($result);

echo json_encode($array);
//end functions
mysql_close($con);
?>