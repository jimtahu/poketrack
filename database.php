<?php
//connects to the database
$CONFIG = parse_ini_file("config.ini");
$mysqli = mysqli_connect("p:localhost",$CONFIG['username'],$CONFIG['password'],$CONFIG['database']);
?>
