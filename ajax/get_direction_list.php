<?php

require_once "../inc/datacon.php";
if(isset($_SESSION['user_type']) &&   isset($_SESSION['chamber_name']) && isset($_SESSION['doc_name'])  ){
	$chamber_name = $_SESSION['chamber_name'];
	$doc_name= $_SESSION['doc_name'];
$q = strtolower($_GET["term"]);
if (!$q) return;

$sql = "select * from dose_direction a where a.DIRECTION LIKE '$q%' AND a.chamber_id='$chamber_name' AND a.doc_id='$doc_name'";
/* $rsd = mysql_query($sql);
while($rs = mysql_fetch_array($rsd)) {
	$cname = $rs['DIRECTION'];
	echo "$cname\n";
} */
$result = mysql_query($sql)or die(mysql_error());
$return_arr= array();

while ($row = mysql_fetch_array($result))
{
	$row_array['label'] = $row['DIRECTION'];
	$row_array['value'] = $row['DIRECTION'];
	
	array_push($return_arr,$row_array);
	
}
echo json_encode($return_arr);
}else {
	echo "Session expired";
}
?>
