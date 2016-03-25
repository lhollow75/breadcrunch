<div class="wrapper contact" id="main-content">
	<div class="container">
		<div id="config-site" class="row">
			<div class="col-lg-12">
				<h1>Configuration du site</h1>
			</div>
				<?php
				for ($i=0; $i < sizeof($categorie); $i++) { 
					//echo $categorie[$i]['nom'];
					# code...
				}
				?>
				 <?php //echo utf8_encode($accueil['nom_boulangerie']) ?>

				<div class="conf-bloc theme">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2>THÈME DU SITE</h2>
						<p>Catégories proposées : </p>
						<?php
						for ($i=0; $i < sizeof($categorie); $i++) { 
						?>
							<input type="checkbox" name="box-boulangerie" id="box-<?php echo utf8_encode(strtolower($categorie[$i]['nom'])) ?>" <?php if ($categorie[$i]['actif']==1) echo "checked"?> >
							<label for="box-<?php echo utf8_encode(strtolower($categorie[$i]['nom'])) ?>"><?php echo utf8_encode($categorie[$i]['nom']) ?></label>
						<?php
						}
						?>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>Thème du site : </p>
						<input type="radio" name="theme-active" id="theme1-active">
						<label for="theme1-active">Thème 1</label>
						<input type="radio" name="theme-active" id="theme2-active">
						<label for="theme2-active">Thème 2</label>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>Couleurs du site : </p>
						<input type="color" name="color1" id="color1">
						<label for="color1">Couleur 1</label>
						<input type="color" name="color2" id="color2">
						<label for="color2">Couleur 2</label>
					</div>
				</div>
				<div class="conf-bloc contenu">
					<div class="cont col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2>CONTENU DU SITE</h2>
						<p>Je souhaite faire apparaître les pages suivantes dans le menu : </p>
						<input type="checkbox" name="promotions-active" id="promotions-active">
						<label for="promotions-active">Promotions</label>
						<input type="checkbox" name="blog-active" id="blog-active">
						<label for="blog-active">Blog</label>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<label class="col-lg-3 col-md-3" for="blog-active">Lien vers mon blog : </label>
						<input class="col-lg-9 col-md-9" type="text" name="blog-active" id="blog-active">
					</div>
				</div>
				<div class="conf-bloc">
					<div class="social-net col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2>RÉSEAUX SOCIAUX</h2>
						<p>Je souhaite faire apparaitre les réseaux sociaux suivants : </p>
						<div class="col-lg-6">
							<label class="col-lg-12" for="facebook-active">Lien Facebook</label>
							<input class="col-lg-12" type="text" name="facebook-active" id="facebook-active">
						</div>
						<div class="col-lg-6">
							<label class="col-lg-12" for="twitter-active">Lien Twitter</label>
							<input class="col-lg-12" type="text" name="twitter-active" id="twitter-active">
						</div>
						<div class="col-lg-6">
							<label class="col-lg-12" for="instagram-active">Lien Instagram</label>
							<input class="col-lg-12" type="text" name="instagram-active" id="instagram-active">
						</div>
						<div class="col-lg-6">
							<label class="col-lg-12" for="pinterest-active">Lien Pinterest</label>
							<input class="col-lg-12" type="text" name="pinterest-active" id="pinterest-active">
						</div>
						<div class="col-lg-6">
							<label class="col-lg-12" for="youtube-active">Lien Youtube</label>
							<input class="col-lg-12" type="text" name="youtube-active" id="youtube-active">
						</div>
					</div>
				</div>
				<div class="conf-bloc modules">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h2>MODULES</h2>
						<p>Je souhaite activer le module de commande en ligne avec retrait en magasin : </p>
						<input type="radio" name="commande" id="commande-active">
						<label for="commande-active">Oui</label>
						<input type="radio" name="commande" id="commande-desactive">
						<label for="commande-desactive">Non</label>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>Je souhaite activer le module de paiement en ligne : </p>
						<input type="radio" name="paiement" id="paiement-active">
						<label for="paiement-active">Oui</label>
						<input type="radio" name="paiement" id="paiement-desactive">
						<label for="paiement-desactive">Non</label>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>Je souhaite recevoir le récapitulatif des commandes : </p>
						<input type="radio" name="recapitulatif" id="recapitulatif-active">
						<label for="recapitulatif-active">Oui</label>
						<input type="radio" name="recapitulatif" id="recapitulatif-desactive">
						<label for="recapitulatif-desactive">Non</label>
					</div>
				</div>
				<div class="conf-bloc">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<label class="col-lg-6" for="admin-active">Ajouter un administrateur : </label>
						<input class="col-lg-6" type="text" name="admin-active" id="admin-active" placeholder="Email..">
					</div>
					<div class="admin-card col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="left-admin-card col-lg-6">
							<p>ADMINISTRATEUR</p>
							<p class="name-of-admin">Marc DESBOS</p>
						</div>
						<div class="left-admin-card col-lg-6">
							<p>Pseudo : </p><p>marcD</p>
							<a href="">Modifier le mot de passe</a>
							<p>marc.desbos@gmail.com</p>
						</div>
					</div>
					<div class="admin-card col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="left-admin-card col-lg-6">
							<p>ADMINISTRATEUR</p>
							<p class="name-of-admin">Marc DESBOS</p>
						</div>
						<div class="left-admin-card col-lg-6">
							<p>Pseudo : </p><p>marcD</p>
							<a href="">Modifier le mot de passe</a>
							<p>marc.desbos@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


