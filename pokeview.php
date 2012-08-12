<?php
include_once('head.php');
include_once('pokemon.php');
$poke = loadPokemon($_GET['name']);
?>
<div class='pokeview'>
<form method='post'>
<input name='act' type='hidden' value='update'>
<?php
echo '<h3>'.$poke->Name.'</h3>';

echo <<<END
<input name='name' type='hidden' value="$poke->Name"/>
Name: $poke->Name <br/>
Level: <input name='level' type='text' value="$poke->Level"/>
Dex No: <input name='dexno' type='text' value="$poke->Dexno"/><br/>
END;
echo "Type: <select name='type'>";
echo "<option value='".$poke->Type."'>".$poke->Type."</option>";
$types = listTypes();
foreach($types as $type )
        echo "<option value='".$type."'>".$type."</option>";
echo "</select>";
echo <<<END
Gender: <select name='gender'>
<option value="$poke->Gender">$poke->Gender</option>
<option value='Male'>Male</option>
<option value='Female'>Female</option>
<option value='None'>None</option>
</select><br/>
Ability: <input name='ability' type='text' value="$poke->Ability"/> $poke->Expl<br/>
HP: <input name='hp' type='text' value="$poke->HP"/>
Speed: <input name='speed' type='text' value="$poke->Speed"/><br/>
Attack: <input name='attack' type='text' value="$poke->Attack"/>
Specal Attack: <input name='spatk' type='text' value="$poke->SPAttack"/><br/>
Defense: <input name='defense' type='text' value="$poke->Defense"/>
Specal Defense: <input name='spdef' type='text' value="$poke->SPDefense"/><br/>
<input type="submit" value="Update"/><br/>
</form>
</div>
END;
include_once('tail.php');
?>
