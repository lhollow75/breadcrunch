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
	<input type="radio" name="commande-desactive" id="commande-desactive">
	<label for="commande-desactive">Non</label>
</div>

<div>
	Je souhaite activer le module de paiement en ligne : 
	<input type="radio" name="paiement-active" id="paiement-active">
	<label for="paiement-active">Oui</label>
	<input type="radio" name="paiement-desactive" id="paiement-desactive">
	<label for="paiement-desactive">Non</label>
</div>

<div>
	Je souhaite recevoir le récapitulatif des commandes : 
	<input type="radio" name="recapitulatif-active" id="recapitulatif-active">
	<label for="recapitulatif-active">Oui</label>
	<input type="radio" name="recapitulatif-desactive" id="recapitulatif-desactive">
	<label for="recapitulatif-desactive">Non</label>
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

<div>
	Je souhaite faire apparaître les pages suivantes dans le menu : 
	<input type="radio" name="promotions-active" id="promotions-active">
	<label for="promotions-active">Promotions</label>
	<input type="radio" name="blog-active" id="blog-active">
	<label for="blog-active">Blog</label>
</div>

<div>
	<label for="blog-active">Lien vers mon blog : </label>
	<input type="text" name="blog-active" id="blog-active">
</div>

<div>
	<label for="admin-active">Ajouter un administrateur : </label>
	<input type="text" name="admin-active" id="admin-active">
</div>

<div>
	Thème du site : 
	<input type="radio" name="theme1-active" id="theme1-active">
	<label for="theme1-active">Thème 1</label>
	<input type="radio" name="theme2-active" id="theme2-active">
	<label for="theme2-active">Thème 2</label>
</div>

<div>
	Thème du site : 
	<input type="color" name="color1" id="color1">
	<label for="color1">Couleur 1</label>
	<input type="color" name="color2" id="color2">
	<label for="color2">Couleur 2</label>
</div>


<div class="admin-card">
	<div class="left-admin-card">
		<p>ADMINISTRATEUR</p>
		<p class="name-of-admin">Marc DESBOS</p>
	</div>
	
	<div class="left-admin-card">
		<p>Pseudo : </p><p>marcD</p>
		<a href="">Modifier le mot de passe</a>
		<p>marc.desbos@gmail.com</p>
	</div>
</div>

<div class="admin-card">
	<div class="left-admin-card">
		<p>ADMINISTRATEUR</p>
		<p class="name-of-admin">Marc DESBOS</p>
	</div>
	
	<div class="left-admin-card">
		<p>Pseudo : </p><p>marcD</p>
		<a href="">Modifier le mot de passe</a>
		<p>marc.desbos@gmail.com</p>
	</div>
</div>



