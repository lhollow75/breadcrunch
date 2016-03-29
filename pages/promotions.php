<?php
if ($accueil["module_promotion"]==1){
	$promotions = recupPromotions($mysql);
	//var_dump($promotions);
?>
    <div class="wrapper" id="main-content">
        <div class="container">
        	<div class="row">
        		<div class="col-lg-12">
					<h1 id="promo-title" class="page_titre">Promotions</h1>
					<hr>
				</div>

				<div class="product-categories">
					<?php
					for ($i=0; $i < sizeof($promotions); $i++) { 
						//print_r($promotions[$i]["nom"]);
						?>
						<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
							<div class="product-section">
								<img src="images/breadcrunch_05.jpg" alt="" class="product-photo">
								<div class="product-infos">
									<p class="product-name"><?php echo utf8_encode($promotions[$i]["nom"]); ?></p>
					                <ul>
	                                <li>
	                                <p class="old-product-price"><?php echo utf8_encode($promotions[$i]["prix_TTC"]); ?>€</p>
	                                </li>
	                                <li>
	                                <p class="product-price"><strong><?php echo utf8_encode($promotions[$i]["prix_promo_TTC"]); ?>€</strong> <span class="icon-shopping-cart"></span></p>
	                                </li>
	                                </ul>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div><!--/.product-categories -->
            </div>
        </div>
        </br>
</div>
<?php
} else {
	echo "La page demandée n'existe pas";
}
?>
                

        		