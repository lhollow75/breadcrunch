    <div class="wrapper" id="main-content">
        <div class="container">
        	<div class="row">
        		
				<?php
				for ($i=0; $i < sizeof($categorie); $i++) { 
					$produits = recupProduitsParCategorie($mysql, $categorie[$i]["id"]);
					if (is_array($produits)){
						?>
						<div class="col-lg-12">
							<h2><?php echo utf8_encode($categorie[$i]["description"]) ?></h2>
						</div>
						<div class="product-categories">
						<?php
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
					} else {
						echo $produits;
					}
				}
				?>
		</div>
	</div>
</div>
