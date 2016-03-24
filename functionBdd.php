<?php
require_once ('php/config.php');
if (isset($_POST['fonction'])){
	switch ($_POST['fonction']) {
		case 'localisationEnBase':
			localisationEnBase($mysql, $_POST['data'], $_POST['donnees']);
			break;
		
		default:
			# code...
			break;
	}
}


function recupProduit(){

}

function recupTable($mysql, $table){
	$req = $mysql->prepare("SELECT * FROM $table");
	$req->execute();

	if($req->rowCount()>=1) {
		while ($donnees = $req->fetch()){
			$tab[] = $donnees;
		}
		//$reponse = $req->fetch();
		//var_dump($tab);
		return $tab;
	} else {
		return "Site non configuré";
	}
}

function recupAccueil($mysql){

	$req = $mysql->prepare("SELECT * FROM configuration");
	$req->execute();

	if($req->rowCount()>=1) {
		$reponse = $req->fetch();
		return $reponse;
	} else {
		return "Site non configuré";
	}
}

function localisationEnBase($mysql, $id, $donnees){
	$req = $mysql->prepare("SELECT * FROM mapping WHERE id_div= :id");
	$req->execute(array(
		':id'=>$id
		));

	$reponse = $req->fetch();
	var_dump($reponse);
	modifEnBase($mysql, $donnees, $reponse['table_insert'], $reponse['colonne_insert'], $reponse['id_insert']);
}

function modifEnBase($mysql, $insertion, $table, $colonne, $row){
	$req = $mysql->prepare("UPDATE $table
							SET $colonne = :insertion
							WHERE id = :id");
	$req->execute(array(
	':insertion'=>utf8_decode(htmlspecialchars($insertion)),
	':id'=> $row
	));
}

?>