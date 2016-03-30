
<div class="wrapper contact" id="main-content">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 id="contact" class="page_titre">Nos produits</h1>
				<hr>
			</div>
        		<script type="text/javascript">
				    $(document).ready(function() {
				        $('html, body').hide();

				        if (window.location.hash) {
				            setTimeout(function() {
				                $('html, body').scrollTop(0).show();
				                $('html, body').animate({
				                    scrollTop: $(window.location.hash).offset().top
				                    }, 1000)
				            }, 0);
				        }
				        else {
				            $('html, body').show();
				        }
				    });
				</script>
				<?php
				for ($i=0; $i < sizeof($categorie); $i++) {
					if ($categorie[$i]["actif"]==1){ 
						$produits = recupProduitsParCategorie($mysql, $categorie[$i]["id"]);
						if (is_array($produits) || (isset($_SESSION['login']) && $_SESSION['admin']==true)){
							if (!is_array($produits) && $_SESSION['admin']==true){
							?>
							<div class="col-lg-12">
								<h2 contenteditable="<?php echo $activeContent; ?>" id="description-<?php echo utf8_encode($categorie[$i]["nom"]) ?>"><?php echo utf8_encode($categorie[$i]["description"]) ?></h2>
								<div class="col-lg-12">
								 	<h3><?php echo $produits; ?></h3>
								</div>
							</div>
							<div class=" ajoutProduit col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<form action="index.php?page=creation_produit" method="GET">
								<input type="hidden" name="cat_produit" value="<?php echo $i; ?>">
								<div class=" product-section">
									<div class="product-photo-admin ">
										<div class="product-photo-img-admin ">
											<div class="product-add ">
												<input class="product-text" type="submit"  style="background-image:url(img/plus.png);">
													<span class="add-prod">Ajouter un produit</span>
											</div>
										</div>
									</div>
								</div>
							</form>
								
							</div>
							<?php
							} else {
							?>
								<div class="col-lg-12">
									<h2 contenteditable="<?php echo $activeContent; ?>" id="description-<?php echo utf8_encode($categorie[$i]["nom"]) ?>"><?php echo utf8_encode($categorie[$i]["description"]) ?></h2>
									<?php
									if (isset($_SESSION['login']) && $_SESSION['admin']==true){
										?>
										<div class="col-lg-12">
											 <h3><?php echo "Vous avez ".sizeof($produits)." produit(s) dans cette catégorie" ?></h3>
										</div>
										<?php
									}
									?>
								</div>
								<div class="product-categories">
								<?php
								if (isset($_SESSION['login']) && $_SESSION['admin']==true){
									?>
								<div class=" ajoutProduit col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<form action="creation_produit.php" method="POST">
									<input type="hidden" name="cat_produit" value="<?php echo $produits["$i"]["id"]; ?>">
									<div class=" product-section">
										<div class="product-photo-admin " >
											<div class="product-photo-img-admin " >
												<div class="product-add " >
													<input class="product-text" type="submit"  style="background-image:url(img/plus.png);">
													<span class="add-prod">Ajouter un produit</span>
												</div>
											</div>
										</div>
									</div>
								</form>
									
								</div>
								<?php
								}
								for ($j=0; $j < sizeof($produits); $j++) { 
									?>
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 ">
										<div class="product-section choix-produit" id="produit-<?php echo $produits["$j"]["id"]; ?>">
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
				}
				?>
		</div>
	</div>
</div>
