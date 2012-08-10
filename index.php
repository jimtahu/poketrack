<?php
include_once('head.php');
include_once('pokemon.php');
?>
<h3>Pokemon</h3>
<ul>
<?php
$list = listPokemon();
foreach($list as $name){
	echo "<li>".$name."</li>";
}
?>
</ul>
<?php include_once('tail.php'); ?>
