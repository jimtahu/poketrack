<?php
include_once('head.php');
include_once('database.php');
$res = mysqli_query($mysqli, "SELECT * FROM pokemon");
while($row = mysqli_fetch_assoc($res)){
	echo $row['Name'],'<BR>';
}
include_once('tail.php');
?>
