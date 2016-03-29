<?php
require_once ('php/config.php');
if (isset($_POST['fonction'])){
	switch ($_POST['fonction']) {
		case 'localisationEnBase':
			localisationEnBase($mysql, $_POST['data'], $_POST['donnees'], $_POST['action']);
			break;
		case 'modifEnBase':
			modifEnBase($mysql, $_POST['donnees'], 'produits', $_POST['colonne'], $_POST['idproduit']);
			break;
		
		default:
			# code...
			break;
	}
}

function recupPromotions($mysql){
	$req = $mysql->prepare("SELECT *
							FROM produits
							WHERE promo_active = 1
							AND active = 1");
	$req->execute();
	if($req->rowCount()>=1) {
		while ($donnees = $req->fetch()){
			$tab[] = $donnees;
		}
		//var_dump($reponse[$colonne]);
		return $tab;
	} else {
		return "Pas de promotions en cours";
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
							WHERE idcategorie = :id
							AND active = 1");
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
							AND produits.id = :row");
	$req->execute(array(
		':row'=>$row
		));
		$reponse = $req->fetch();
		return $reponse;
}

/*create a new empty product in database*/
function productCreation($mysql, $cat){
	//echo $cat;
	$req = $mysql->prepare("INSERT INTO produits (nom, description, ingredients, idcategorie, prix_TTC, prix_HT, prix_promo_TTC, prix_promo_HT,delai_minimum, unite_delai, promo_active, photo, active)
							VALUES ('Nom du produit', 'Description du produit', 'Liste des ingredients', :cat, 0, 0, 0, 0, 1, 1, 0, 'baguettes.jpg', 1)");
	$req->execute(array(
		':cat'=>$cat
		));
	//echo "la";
	$req->fetch();
	$last_id = lastInsertId($mysql);
	//echo "id : ".$last_id;
	return $last_id;
	//header('index.php?page=fiche-produit&id='.$last_id);
}

function lastInsertId($mysql){
	$req = $mysql->prepare("SELECT id FROM produits WHERE nom = 'Nom du produit' ORDER BY id DESC");
	$req->execute();

	$reponse = $req->fetch();
	//var_dump($reponse);
	return $reponse["id"];
}

/*get une ligne from product table */
function recupProduct($mysql, $id){
	$req = $mysql->prepare('SELECT produits.*, unite_delai.unite FROM produits, unite_delai
							WHERE produits.id=:id
							AND produits.unite_delai = unite_delai.id');
	$req->execute(array(
		':id'=>$id
		));
	$reponse = $req->fetch();
		return $reponse;
}



/*get information about order from table commande,produits_commandes, produits and users */
function recupCommande($mysql, $cmdIduser){
	$req = $mysql->prepare('SELECT commande.id, login, DATE(date_retrait), TIME(date_retrait), photo, nom, cadeau, message, produits_commandes.prix_TTC, commentaire, prix_total_TTC 
							FROM commande, produits_commandes, produits, users 
							WHERE commande.id = produits_commandes.idcommande 
							AND commande.iduser = users.id 
							AND users.id = :cmdIduser
							AND produits.id = produits_commandes.idproduit');
	$req->execute(array(
		':cmdIduser'=>$cmdIduser
		));
	if($req->rowCount()>=1) {
		while ($donnees = $req->fetch()){
			$tab[] = $donnees;
		}
	}
		return $tab;
}

/*get id of people with unfinish order*/
function recupCommander($mysql){
	$req = $mysql->prepare('SELECT iduser FROM commande WHERE statut != 5');
	$req->execute(array(
		));
	if($req->rowCount()>=1) {
		while ($donnees = $req->fetch(PDO::FETCH_ASSOC)){
			$tab[] = $donnees['iduser'];
		}
	}
		return $tab;
}

?>