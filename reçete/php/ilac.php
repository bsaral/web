<?php


function myserialize($arr) {
	$str = '[';

	foreach($arr as $i=>$a) {
		$str .= '{"id":"' . $a['id'] . '","name":"' . $a['name'] . '"}';

		if($i <> (count($arr) - 1)) $str .= ',';
	}

	$str .= ']';

	return $str;
}

$q = empty($_GET['q']) ? "" : $_GET['q'];

mysql_connect("localhost", "sim", "12345") or die("Could not connect");
mysql_select_db("sim") or die("Could not select database");

$sql = "select * from drugs where name LIKE '%$q%' limit 0,5";
$res = mysql_query($sql);

$arr = array();
while($r = mysql_fetch_array($res, MYSQL_ASSOC)) {
	array_push($arr, $r);
}

echo myserialize($arr);

mysql_close();
?>
