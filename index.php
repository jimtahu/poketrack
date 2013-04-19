<?php
include_once('head.php');
include_once('pokemon.php');
?>
<h3>Pokemon</h3>
<table>
<?php
$list = listPokemon();
foreach($list as $name){
	echo "<tr>";
    echo "<td><a href=pokeview.php?act=view&name=$name>$name</a></td>";
    echo "<td><form action='pokeview.php'>
          <input type='hidden' name='act' value='edit'>
          <input type='hidden' name='name' value='$name'>
          <input value='Edit' type='submit' ></form></td>";
    echo "</tr>";
}
?>
</table>
<?php include_once('tail.php'); ?>
