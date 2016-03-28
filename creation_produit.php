<script src="javascript/script.js"></script>
<?php 


//print_r($_SESSION);
session_start();
error_reporting(E_ALL);
ini_set("display_errors",1);

if (isset($_SESSION['admin']) && $_SESSION['admin']==true){
	$activeContent = "true";
    $appear = "block";
} else {
	$activeContent = "false";
    $appear = "none";
}
require_once ('php/config.php');
require('includes/functions.php');
$page = showPage();


//$last_id = productCreation($mysql, $_POST["cat_produit"]);
$req = $mysql->prepare("INSERT INTO produits (nom, description, ingredients, idcategorie, prix_TTC, prix_HT, prix_promo_TTC, prix_promo_HT,delai_minimum, unite_delai, promo_active, photo, active)
							VALUES ('Nom du produit', 'Description du produit', 'Listes des ingredients', :cat, 0, 0, 0, 0, 1, 1, 0, 'baguettes.jpg', 1)");
$req->execute(array(
	':cat'=>$_POST["cat_produit"]
	));
$req->fetch();

$req = $mysql->prepare("SELECT id FROM produits WHERE nom = 'Nom du produit' ORDER BY id DESC");
$req->execute();

$reponse = $req->fetch();
$last_id = $reponse["id"];

include('includes/header.php');
include ('pages/fiche-produit.php');
include ('includes/footer.php');
?>