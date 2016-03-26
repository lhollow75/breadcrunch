
<div class="wrapper contact" id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 id="contact" class="page_titre">Nos produits</h1>
				<hr>
			</div>
        		
				<?php
				for ($i=0; $i < sizeof($categorie); $i++) { 
					$produits = recupProduitsParCategorie($mysql, $categorie[$i]["id"]);
					if (is_array($produits) || (isset($_SESSION['login']) && $_SESSION['admin']==true)){
						if (!is_array($produits) && $_SESSION['admin']==true){
						?>
						<div class="col-lg-12">
							<h2><?php echo utf8_encode($categorie[$i]["description"]) ?></h2>
							<div class="col-lg-12">
							 	<?php echo $produits; ?>
							</div>
						</div>
						<div class="ajoutProduit col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="product-section">
								<div class="product-photo-admin">
									<div class="product-photo-img-admin">
										<p>+<p>
									</div>
									<div class="product-infos">
										<p class="product-price">Ajouter un produit</p>
									</div>
								</div>
							</div>
						</div>
						<?php
						} else {
						?>
							<div class="col-lg-12">
								<h2><?php echo utf8_encode($categorie[$i]["description"]) ?></h2>
								<?php
								if (isset($_SESSION['login']) && $_SESSION['admin']==true){
									?>
									<div class="col-lg-12">
										 <?php echo "Vous avez ".sizeof($produits)." produit(s) dans cette catégorie" ?>
									</div>
									<?php
								}
								?>
							</div>
							<div class="product-categories">
							<?php
							if (isset($_SESSION['login']) && $_SESSION['admin']==true){
								?>
							<div class="ajoutProduit col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="product-section">
									<div class="product-photo-admin">
										<div class="product-photo-img-admin">
											<p>+<p>
										</div>
										<div class="product-infos">
											<p class="product-price">Ajouter un produit</p>
										</div>
									</div>
								</div>
							</div>
							<?php
							}
							for ($j=0; $j < sizeof($produits); $j++) { 
								?>
								<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
									<div class="product-section">
										<img src="images/<?php echo $produits["$j"]["photo"]; ?>" alt="" class="product-photo">
										<div class="product-infos">
											<p class="product-name"><?php echo $produits["$j"]["nom"]; ?></p>
											<!--<p class="product-type">Viennoiserie</p>-->
											<p class="product-price"><?php echo $produits["$j"]["prix_TTC"]; ?>€  <span class="icon-shopping-cart"></span></p>
										</div>
									</div>
								</div>
								<?php
							}
							?>
							</div><!--/.product-categories -->
						<?php
						}						
					}
				}
				?>
		</div>
	</div>
</div>
