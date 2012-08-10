<?php
include_once('head.php');
include_once('pokemon.php');
$poke = loadPokemon($_GET['name']);
?>
<form method='post'>
<input name='act' type='hidden' value='update'>
<?php
echo '<h3>'.$poke->Name.'</h3>';

echo "<input name='name' type='hidden' value='$poke->Name'/>";
echo "   Name: $poke->Name <br/>";
echo "Level: <input name='level' type='text' value='",$poke->Level,"'/>";
echo "   Dex No: <input name='dexno' type='text' value='",$poke->Dexno,"'/><br/>";
//echo "Type: <select name='type'>";
//echo "<option value='".$info['Type']."'>".$info['Type']."</option>";
//$res = mysql_query("SELECT * FROM types", $mysql);
//while( $row = mysql_fetch_assoc($res) )
//        echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
//echo "</select>";
echo "   Gender: <select name='gender'>";
echo "<option value='",$poke->Gender,"'>",$poke->Gender,"</option>";
echo "<option value='Male'>Male</option>";
echo "<option value='Female'>Female</option>";
echo "<option value='None'>None</option>";
echo "</select><br/>";
echo "Ability: <input name='ability' type='text' value='",$poke->Ability,"'/> ",(!empty($poke->Expl)?$poke->Expl:''),"<br/>";
echo "HP: <input name='hp' type='text' value='",$poke->HP,"'/>";
echo "   Speed: <input name='speed' type='text' value='",$poke->Speed,"'/><br/>";
echo "Attack: <input name='attack' type='text' value='",$poke->Attack,"'/>";
echo "   Specal Attack: <input name='spatk' type='text' value='",$poke->SPAttack,"'/><br/>";
echo "Defense: <input name='defense' type='text' value='",$poke->Defense,"'/>";
echo "   Specal Defense: <input name='spdef' type='text' value='",$poke->SPDefense,"'/><br/>";
?>
<input type="submit" value="Update"/><br/>
</form>
<?php include_once('tail.php');?>
