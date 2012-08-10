<?php

include_once('database.php');

class pokemon {
	//from pokemon
	public $Name = 'noone';
	public $Level = 1;
	public $Type = 'NONE';
	public $Ability = ' nothing ';
	public $Dexno = 0;
	public $Gender = 'None';
	//from stats
	public $HP = 0;
	public $Speed = 0;
	public $Attack = 0;
	public $Defense = 0;
	public $SPAttack = 0;
	public $SPDefense = 0;
}//end class pokemon

function loadPokemon($name){
	 global $database;
	 $stmt = $database->prepare('SELECT Name,Level,Type,Ability,DEXNO,Gender FROM pokemon WHERE Name=?');
	 $stmt->bind_param('s',$name);
	 $stmt->execute();
	 $stmt->bind_result($name,$level,$type,$ability,$dexno,$gender);
	 $dude = new pokemon();
	 while($stmt->fetch()){
	 	$dude->Name=$name;
		$dude->Level=$level;
		$dude->Type=$type;
		$dude->Ability=$ability;
		$dude->Dexno=$dexno;
		$dude->Gender=$gender;
	 }//end while result (should be only one)
	 $stmt->close();
	 return $dude;
}//end loadPokemon
?>
