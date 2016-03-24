<h1>Configuration du site</h1>

<?php
for ($i=0; $i < sizeof($categorie); $i++) { 
	//echo $categorie[$i]['nom'];
	# code...
}
?>
 <?php //echo utf8_encode($accueil['nom_boulangerie']) ?>

<div>
	Catégories proposées : 
	<?php
	for ($i=0; $i < sizeof($categorie); $i++) { 
	?>
		<input type="checkbox" name="box-boulangerie" id="box-<?php echo utf8_encode(strtolower($categorie[$i]['nom'])) ?>" <?php if ($categorie[$i]['actif']==1) echo "checked"?> >
		<label for="box-<?php echo utf8_encode(strtolower($categorie[$i]['nom'])) ?>"><?php echo utf8_encode($categorie[$i]['nom']) ?></label>
	<?php
	}
	?>

</div>

<div>
	Je souhaite activer le module de commande en ligne avec retrait en magasin : 
	<input type="radio" name="commande-active" id="commande-active">
	<label for="commande-active">Oui</label>
	<input type="radio" name="commande-active" id="commande-desactive">
	<label for="commande-active">Non</label>
</div>

<div>
	Je souhaite activer le module de paiement en ligne : 
	<input type="radio" name="paiement-active" id="paiement-active">
	<label for="paiement-active">Oui</label>
	<input type="radio" name="paiement-active" id="paiement-desactive">
	<label for="paiement-desactive">Non</label>
</div>

<div>
	Je souhaite recevoir le récapitulatif des commandes : 
	<input type="radio" name="recapitulatif-active" id="paiement-active">
	<label for="paiement-active">Oui</label>
	<input type="radio" name="recapitulatif-active" id="paiement-desactive">
	<label for="paiement-desactive">Non</label>
</div>

<div>
	Je souhaite faire apparaitre les réseaux sociaux suivants : 
	<label for="facebook-active">Lien Facebook</label>
	<input type="text" name="facebook-active" id="facebook-active">
	<label for="twitter-active">Lien Twitter</label>
	<input type="text" name="twitter-active" id="twitter-active">
	<label for="instagram-active">Lien Instagram</label>
	<input type="text" name="instagram-active" id="instagram-active">
	<label for="pinterest-active">Lien Pinterest</label>
	<input type="text" name="pinterest-active" id="pinterest-active">
	<label for="youtube-active">Lien Youtube</label>
	<input type="text" name="youtube-active" id="youtube-active">
</div>