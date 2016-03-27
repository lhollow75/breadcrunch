<?php
$idProduct = $_GET["id"];
?>

<div class="wrapper" id="main-content">
	<div class="container">
		<h1 id="product-name" contenteditable="<?php echo $activeContent; ?>"><?php $tabi = recupProduct($mysql, $idProduct); 
			echo $tabi[1];
			?>
		</h1>
		<hr>
		<div class="row">
			<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				<img class="product-picture" src="images/<?php echo $tabi[12];?>" alt="">
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div class="product-details">
					<p class="product-details-title">Ingrédients :</p>
					<p class="product-details-text" id="product-ingredient" contenteditable="<?php echo $activeContent; ?>">
						<?php
						echo $tabi[3];
						?>
					</p>
					<p class="product-detais-clock">
						<span class="icon-clock"></span>
						<span class="product-details-title">Délai de commande minimum :</span>
						

					<?php
					    if(isset($_SESSION['login'])) {
					        if($_SESSION['admin']==true) {
					?>
            		<input type="text" name="write-min-timing" id="write-min-timing"></input>
           			<select class="product-details-text">
					<?php
								$tab = recupTable($mysql, 'unite_delai');
								foreach ($tab as $key => $value) {
								echo "<option value=".$value[1].">".$value[1]."</option>";
							}?>
					</select>
						
			        <?php
			           	}
			        ?>
			        <?php
			          	} else {
					?>
					<span class="product-details-title" id="min-timing" ><?php  echo $tabi[9];?></span> 
					<span class="product-details-title" id="timing-unit" ><?php $unit = uniteDelaiEnBase ($mysql, $idProduct); echo $unit[0]; ?></span>
					<?php
				        }
				    ?>
					<?php
					    if(isset($_SESSION['login'])) {
				        	if($_SESSION['admin']==true) {
					?>
					<?php
				    		}
					?>
					<?php
							} else {
					?>
					</p>
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
					<p><span class="product-details-title">Prix :</span>
		    		<span class="price" id="product-price" contenteditable="<?php echo $activeContent; ?>"><?php  echo $tabi[5];?>€</span>
					<div class="btn-add-cart">Ajouter au panier</div>
					<?php
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