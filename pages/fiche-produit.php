<?php 
if (isset($_GET["id"])){
	$idProduct = $_GET["id"];
} else {
	$idProduct = $last_id;
}
$tabi = recupProduct($mysql, $idProduct);
$unit = uniteDelaiEnBase ($mysql, $idProduct);
$tab = recupTable($mysql, 'unite_delai');

?>

<div class="wrapper" id="main-content">
	<div class="container">
		<h1 id="product-name" contenteditable="<?php echo $activeContent; ?>"><?php  
			echo $tabi[1];
			?>
		</h1>
		<hr>
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<img class="product-picture" src="images/<?php echo $tabi[12];?>" alt="">
						<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
                            <p>Choisissez une image :</p>
				            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
				            <input type="hidden" name="product-photo-<?php echo $idProduct; ?>" value="product-photo-<?php echo $idProduct; ?>">
				            <button type="submit" >Envoyer</button>
				        </form>
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="product-details">
					<p class="product-details-title">Ingrédients :</p>
					<p class="product-details-text produits" id="product-ingredients-<?php echo $idProduct; ?>" contenteditable="<?php echo $activeContent; ?>">
						<?php 
						echo $tabi[3];
						?>
					</p>
					<p class="product-detais-clock">
						<span class="icon-clock"></span>
						<span class="product-details-title">Délai de commande minimum :</span>
						
						<?php
							if(isset($_SESSION['login']) && $_SESSION['admin']==true) {
								?>
			            		<input type="text" name="write-min-timing" id="product-delai_minimum-<?php echo $idProduct; ?>" value="<?php echo $tabi['delai_minimum']; ?>"></input>
			           			<select id="select-unite_delai-<?php echo $idProduct; ?>" class="product-details-text select">
								<?php		
								foreach ($tab as $key => $value) {
									?>
									<option value="<?php echo $value[0]; ?>" <?php if ($tabi['unite_delai']==$value[0]) echo "selected"?>><?php echo $value[1]; ?></option>
									<?php
								}
								?>
								</select>
					
				        		<?php
				           	
				          	} else {
								?>
								<span class="product-details-title" id="min-timing" ><?php echo $tabi['delai_minimum'];?></span> 
								<span class="product-details-title" id="timing-unit" ><?php  echo $tabi['unite']; ?></span>
								<?php
					        }
					        ?>
				    </p>
				    
				        <?php
					    if(isset($_SESSION['login'])) {
				        	if($_SESSION['admin']!=true) {
								?>
								<p>
									<label class="product-details-title" for="pickup-date">Date de retrait :</label>
									<input type="date" name="pickup-date" id="pickup-date" class="product-spec">
								</p>
								<p>
									<label class="product-details-title">Heure de retrait :</label>
									<select class="product-details-text">
							    		<option value="9h-10h">9h - 10h</option>
										<option value="10h-11h">10h - 11h</option>
										<option value="11h-12h">11h - 12h</option>
										<option value="12h-13h">12h - 13h</option>
										<option value="13h-14h">13h - 14h</option>
										<option value="14h-15h">14h - 15h</option>
										<option value="15h-16h">15h - 16h</option>
										<option value="16h-17h">16h - 17h</option>
										<option value="17h-18h">17h - 18h</option>
									</select>
								</p>
								<p>
									<label class="product-details-title" for="quantity">Quantité :</label>
									<input type="number" name="quantity" id="quantity" class="product-spec">
								</p>
							<?php
							}
							?>
							<p><span class="product-details-title">Prix :</span>
				    		<span class="price" id="product-price" contenteditable="<?php echo $activeContent; ?>"><?php echo $tabi[5];?></span><span class="price">€</span></p>
							<?php 
							if(isset($_SESSION['login']) && $_SESSION['admin']==true) {?>	
							<div class="prom">
								<input id="prix-promo" type="checkbox">		    
								<label for="prix-promo" class="product-details-title">Prix Promo</label>
							</div>
							<?php } ?>	
				    		<p><span class="product-details-title">Prix Promo:</span>
				    		<span class="price" id="product-price-sales" contenteditable="<?php echo $activeContent; ?>"><?php echo $tabi["prix_promo_TTC"];?></span><span class="price">€</span></p>
							
							<?php
							if(isset($_SESSION['login']) && $_SESSION['admin']==true) {?>
							<div class="btn-product row">
								<!--ajouter la classe selected si le bouton ne peut pas être cliqué-->
							    <button class="col-lg-4 col-sm-12 btn-accept selected" id="awc">Ajouter le produit</button>
							    <button class="col-lg-4 col-sm-12 btn-wait" id="awc">Masquer le produit</button>
							    <button class="col-lg-4 col-sm-12 btn-cancel" id="awc">Supprimer le produit</button>
						    </div>	
							 <?php }
					        ?>
								
							<?php
							if($_SESSION['admin']!=true) {
							?>
								<div class="btn-add-cart">Ajouter au panier</div>
								<?php
					   		}
					   	}
							?>
				</div><!-- /.product-details -->
			</div><!-- /.col-lg-5 col-md-5 col-sm-12 col-xs-12 -->
		</div><!-- /.row -->
		
		<div class="row">
			<div class="product-list-checkbox col-lg-6 col-md-6 col-sm-12 col-xs-12">

			<?php
		    if(isset($_SESSION['login'])) {
		        if($_SESSION['admin']==true) {
			?>
    
		    	<p class="product-details-title">Allergènes :</p>
				<ul>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="cereale" name="cereale">Céréales contenant du gluten</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="crustace" name="crustace">Crustacé et produits à base de crustacés</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="oeuf" name="oeuf">Oeufs et produits à base d'oeufs</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="poisson" name="poisson">Poissons et produits à base de poissons</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="arachide" name="arachide">Arachides et produits à base d'arachides</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="soja" name="soja">Soja et produits à base de soja</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="lait" name="lait">Lait et produits à base de lait</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="sulfureux" name="sulfureux">Anhydride sulfureux et sulfites</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="fruit" name="fruit">Fruit à coque</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="celeri" name="celeri">Céleri et produits à base de céleri</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="moutarde" name="moutarde">Moutarde et produits à base de moutarde</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="graine" name="graine">Graines de sésame et produits à base de graines de sésame</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="lupin" name="lupin">Lupin et produits à base de lupin</li>
			    	<li class="product-details-text"><input type="checkbox" class="checkbox" id="mollusque" name="mollusque">Mollusques et produits à base de mollusque</li>
				</ul>

			<?php
			    }
			?>
			<?php
			    } else {
			?>
		    	<p class="product-details-title">Allergènes :</p>
				<p class="product-details-text" >Mollusques et produits à base de mollusque</p>
			
			<?php
			    }
			?>
			</div><!-- /.product-list-checkbox col-lg-6 col-md-6 col-sm-12 col-xs-12 -->

		    <div class="product-list-checkbox col-lg-6 col-md-6 col-sm-12 col-xs-12">

				<?php
			    if(isset($_SESSION['login'])) {
			        if($_SESSION['admin']==true) {
				?>
			    
					<p class="product-details-title">Tailles des gâteaux :</p>
					<ul>
					    <li class="product-details-text"><input type="checkbox" class="checkbox" id="4pers" name="4pers">4 pers.</li>
					    <li class="product-details-text"><input type="checkbox" class="checkbox" id="6pers" name="6pers">6 pers.</li>
					    <li class="product-details-text"><input type="checkbox" class="checkbox" id="8pers" name="8pers">8 pers.</li>
					    <li class="product-details-text"><input type="checkbox" class="checkbox" id="10pers" name="10pers">10 pers.</li>
					    <li class="product-details-text"><input type="checkbox" class="checkbox" id="12pers" name="12pers">12 pers.</li>
					</ul>

				<?php
				    }
				?>
				<?php
				    } else {
				?>
				<p class="product-details-title">Tailles des gâteaux :	
					<select>
						<option value="4pers">4 pers.</option>
						<option value="6pers">6 pers.</option>
						<option value="8pers">8 pers.</option>
						<option value="10pers">10 pers.</option>
					</select>
				</p>
				<?php
				    }
				?>
				</div><!-- /.product-list-checkbox col-lg-6 col-md-6 col-sm-12 col-xs-12 -->
			</div><!-- /.row -->
		</div><!--/.container -->
	</div><!-- /.wrapper -->
</div>