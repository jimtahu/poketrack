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
	 $stmt = $database->prepare('SELECT pokemon.Name,Level,Type,Ability,DEXNO,Gender,HP,ATTACK,DEFENSE,SP_ATK,SP_DEF,SPEED'
	                           .' FROM pokemon JOIN stats ON pokemon.Name=stats.Name WHERE pokemon.Name=?');
	 $stmt->bind_param('s',$name);
	 $stmt->execute();
	 $stmt->bind_result($name,$level,$type,$ability,$dexno,$gender,$HP,$attack,$defense,$spatk,$spdef,$speed);
	 $dude = new pokemon();
	 while($stmt->fetch()){
	 	$dude->Name=$name;
		$dude->Level=$level;
		$dude->Type=$type;
		$dude->Ability=$ability;
		$dude->Dexno=$dexno;
		$dude->Gender=$gender;
		$dude->HP=$HP;
		$dude->Speed=$speed;
		$dude->Attack=$attack;
		$dude->Defense=$defense;
		$dude->SPAttack=$spatk;
		$dude->SPDefense=$spdef;
	 }//end while result (should be only one)
	 $stmt->close();
	 return $dude;
}//end loadPokemon

function listPokemon(){
	global $database;
	$listing=Array();
	$stmt = $database->prepare('SELECT Name FROM pokemon');
	$stmt->execute();
	$stmt->bind_result($name);
	while($stmt->fetch()){
		$listing[] = $name;
	}//end while results
	$stmt->close();
	return $listing;
}//end listPokemon

?>
