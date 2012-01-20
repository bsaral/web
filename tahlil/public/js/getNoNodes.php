<?php
$cid = $_GET["cid"];

$con = mysql_connect('localhost', 'sim', 'maslak55');
if (!$con) {
	die('Could not connect: ' . mysql_error());
}

mysql_select_db("sim", $con);

$sql = "select max(id) from node where id AND cid='$cid';";
$result = mysql_query($sql);

$row = mysql_fetch_array($result);
$id = $row[0] + 1;

$sql = "INSERT INTO node (nid, id, title, media, content, question, options, type, parent, isOnset, isWrong, cid) VALUES (NULL, '$id', 'yeni', NULL, NULL, NULL, NULL, 'dal', NULL,  NULL, NULL, '$cid');";
$result = mysql_query($sql);

echo $id;
mysql_close($con);
?>
