<div class="wrapper contact" id="main-content">
	<div class="container">
		<div id="config-site" class="row">
			<div class="col-lg-12">
				<h1>Configuration du site</h1>
			</div>

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
						<input type="radio" name="theme-active" id="theme1-active" checked>
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
						<input type="checkbox" name="promotions-active" id="box-promotions" <?php if ($accueil['module_promotion']==1) echo "checked"?>>
						<label for="promotions-active">Promotions</label>
						<input type="checkbox" name="blog-active" id="box-blog" <?php if ($accueil['blog']!="") echo "checked"?> >
						<label for="blog-active">Blog</label>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="bloc-blog">
						<label class="col-lg-3 col-md-3" for="blog-active">Lien vers mon blog : </label>
						<input class="col-lg-9 col-md-9" type="text" name="blog-active" id="lien-blog" value="<?php echo $module_blog ?>">
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
						<input type="radio" name="commande" id="commande-active" <?php if ($accueil["module_commande"]==true) echo "checked"?>>
						<label for="commande-active">Oui</label>
						<input type="radio" name="commande" id="commande-desactive" <?php if ($accueil["module_commande"]==false) echo "checked"?>>
						<label for="commande-desactive">Non</label>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>Je souhaite activer le module de paiement en ligne : </p>
						<input type="radio" name="paiement" id="paiement-active" <?php if ($accueil["module_paiement"]==true) echo "checked"?>>
						<label for="paiement-active">Oui</label>
						<input type="radio" name="paiement" id="paiement-desactive" <?php if ($accueil["module_paiement"]==false) echo "checked"?>>
						<label for="paiement-desactive">Non</label>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>Je souhaite recevoir le récapitulatif des commandes : </p>
						<input type="radio" name="recapitulatif" id="recapitulatif-active" <?php if ($accueil["envoi_recapitulatif"]==true) echo "checked"?>>
						<label for="recapitulatif-active">Oui</label>
						<input type="radio" name="recapitulatif" id="recapitulatif-desactive" <?php if ($accueil["envoi_recapitulatif"]==false) echo "checked"?>>
						<label for="recapitulatif-desactive">Non</label>
					</div>
				</div>
				<div class="conf-bloc">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<h2>ADMINISTRATION</h2>
						<label class="col-lg-3" for="admin-active">Ajouter un administrateur : </label>
						<input class="col-lg-9" type="text" name="admin-active" id="admin-active" placeholder="Email..">
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div id="admin-card" class="col-lg-5 col-md-5 col-sm-12">
							<div class="col-lg-6">
								<p>ADMINISTRATEUR</p>
								<p class="name-of-admin">Marc DESBOS</p>
							</div>
							<div class="col-lg-6">
								<p class="col-sm-12 col-xs-12">Pseudo : </p><p>marcD</p>
								<a class="col-sm-12 col-xs-12" href="">Modifier le mot de passe</a>
								<p>marc.desbos@gmail.com</p>
							</div>
							<span class="icon icon-squared-cross"></span>
							<span class="icon2 icon-mail"></span>
						</div>
						<div class="space col-lg-1 col-md-1 hidden-sm hidden-xs"></div>
						<div id="admin-card" class="col-lg-5 col-md-5 col-sm-12">
							<div class="col-lg-6">
								<p>ADMINISTRATEUR</p>
								<p class="name-of-admin">Marc DESBOS</p>
							</div>
							<div class="col-lg-6">
								<p class="col-sm-12 col-xs-12">Pseudo : </p><p>marcD</p>
								<a class="col-sm-12 col-xs-12"href="">Modifier le mot de passe</a>
								<p>marc.desbos@gmail.com</p>
							</div>
							<span class="icon icon-squared-cross"></span>
							<span class="icon2 icon-mail"></span>
						</div>
						<div class="space col-lg-1 col-md-1"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


