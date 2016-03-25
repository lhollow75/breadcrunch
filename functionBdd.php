<?php
require_once ('php/config.php');
if (isset($_POST['fonction'])){
	switch ($_POST['fonction']) {
		case 'localisationEnBase':
			localisationEnBase($mysql, $_POST['data'], $_POST['donnees'], $_POST['action']);
			break;
		
		default:
			# code...
			break;
	}
}


function recupEnBase($mysql, $table, $colonne, $row){
	$req = $mysql->prepare("SELECT $colonne
							FROM $table
							WHERE id = :id");
	$req->execute(array(
	':id'=> $row
	));
	if($req->rowCount()>=1) {
		$reponse = $req->fetch();
		//var_dump($reponse[$colonne]);
		echo utf8_encode($reponse[$colonne]);
	} else {
		return "Erreur lors de la récupération";
	}
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

function localisationEnBase($mysql, $id, $donnees, $action){
	$req = $mysql->prepare("SELECT * FROM mapping WHERE id_div= :id");
	$req->execute(array(
		':id'=>$id
		));

	$reponse = $req->fetch();
	if ($action == 'modification'){
		modifEnBase($mysql, $donnees, $reponse['table_insert'], $reponse['colonne_insert'], $reponse['id_insert']);
	}else if ($action == 'recuperation'){
		recupEnBase($mysql, $reponse['table_insert'], $reponse['colonne_insert'], $reponse['id_insert']);
	}
	
}

function modifEnBase($mysql, $insertion, $table, $colonne, $row){
	$req = $mysql->prepare("UPDATE $table
							SET $colonne = :insertion
							WHERE id = :id");
	$req->execute(array(
	':insertion'=>utf8_decode(strip_tags(trim ($insertion))),
	':id'=> $row
	));
}


function recupProduitsParCategorie($mysql, $idCategorie){
	$req = $mysql->prepare("SELECT *
							FROM produits
							WHERE idcategorie = :id");
	$req->execute(array(
	':id'=> $idCategorie
	));

	if($req->rowCount()>=1) {
		while ($donnees = $req->fetch()){
			$tab[] = $donnees;
		}
		//$reponse = $req->fetch();
		//var_dump($tab);
		return $tab;
	} else {
		return "Vous n'avez pas encore ajouté de produits dans cette catégorie";
	}
}


function uniteDelaiEnBase ($mysql, $row){
	$req = $mysql->prepare("SELECT unite 
							FROM unite_delai, produits
							WHERE unite_delai.id = produits.unite_delai
							AND produit.id = :row");
	$req->execute(array(
		':row'=>$row
		));
}

/*create a new empty product in database*/
function productCreation ($mysql){
	$req = $mysql->prepare("INSERT INTO produits 
							VALUES ('', '', '', '', '', '', '', '','', '', '', '', '', ''");
	$req->execute();
}

/*get une ligne from product table */
function recupProduct($mysql, $id){
	$req = $mysql->prepare("SELECT * FROM produits
							WHERE id=:id");
	$req->execute(array(
		':id'=>$id));
}



?>