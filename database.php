<?php
//connects to the database
$CONFIG = parse_ini_file("config.ini");
$database = new mysqli("p:localhost",$CONFIG['username'],$CONFIG['password'],$CONFIG['database']);
/* check connection */
if(mysqli_connect_errno() or empty($database)){
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>
