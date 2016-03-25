<div class="wrapper" id="main-content">
<div class="container">
<h1 class="product-name">Pain au chocolat</h1>
<img class="col-lg-7  product-picture" src="images/breadcrunch_29.jpg" alt="">

<div class="product-specs col-lg-5 col-sm-12 col-md-5 col-xs-12">
<h4>Ingrédients</h4>
<p class="product-spec" id="product-ingredient" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'product-ingredient','', 'recuperation') ?></p>

<label>Délai de commande minimum : </label>

<?php
    if(isset($_SESSION['login'])) {
        if($_SESSION['admin']==true) {
?>
            <input type="text" name="write-min-timing" id="write-min-timing"></input>
            <select class="product-spec">
				<?php
			$tab = recupTable($mysql, 'unite_delai');
			foreach ($tab as $key => $value) {
				echo "<option value=".$value[1].">".$value[1]."</option>";
			}
				?>

			</select>
			
            </br>
            <?php
            	}
            ?>
            <?php
            	} else {
			?>
			<p class="product-spec" id="min-timing" ><?php localisationEnBase($mysql, 'min-timing','', 'recuperation') ?></p> 
			<p class="product-spec" id="timing-unit" ><?php localisationEnBase($mysql, 'timing-unit','', 'recuperation') ?></p>
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
	<label for="pickup-date">Date de retrait </label><input type="date" name="pickup-date" id="pickup-date" class="product-spec">
	<label>Heure de retrait </label>
		<select class="product-spec">
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
	</div>
	<div class="col-lg-2 col-sm-12 col-md-2 col-xs-12">
	<label for="quantity">Quantité</label><input type="number" name="quantity" id="quantity" class="product-spec">
	</div>
	<?php
	    }
	?>

	<?php
    if(isset($_SESSION['login'])) {
        if($_SESSION['admin']==true) {
	?>
	<div class="col-lg-4 col-lg-offset-1 col-sm-12 col-md-4 col-xs-12">
		<label>Allergène : </label>

		<ul>
	    	<li><input type="checkbox" id="cereale" name="cereale">Céréales contenant du gluten</li>
	    	<li><input type="checkbox" id="crustace" name="crustace">Crustacé et produits à base de crustacés</li>
	    	<li><input type="checkbox" id="oeuf" name="oeuf">Oeufs et produits à base d'oeufs</li>
	    	<li><input type="checkbox" id="poisson" name="poisson">Poissons et produits à base de poissons</li>
	    	<li><input type="checkbox" id="arachide" name="arachide">Arachides et produits à base d'arachides</li>
	    	<li><input type="checkbox" id="soja" name="soja">Soja et produits à base de soja</li>
	    	<li><input type="checkbox" id="lait" name="lait">Lait et produits à base de lait</li>
	    	<li><input type="checkbox" id="sulfureux" name="sulfureux">Anhydride sulfureux et sulfites</li>
	    	<li><input type="checkbox" id="fruit" name="fruit">Fruit à coque</li>
	    	<li><input type="checkbox" id="celeri" name="celeri">Céleri et produits à base de céleri</li>
	    	<li><input type="checkbox" id="moutarde" name="moutarde">Moutarde et produits à base de moutarde</li>
	    	<li><input type="checkbox" id="graine" name="graine">Graines de sésame et produits à base de graines de sésame</li>
	    	<li><input type="checkbox" id="lupin" name="lupin">Lupin et produits à base de lupin</li>
	    	<li><input type="checkbox" id="mollusque" name="mollusque">Mollusques et produits à base de mollusqu</li>
		</ul>
	</div>

	<?php
	    }
	?>
	<?php
	    } else {
	?>
	<label>Allergène : </label>
	<p class="product-spec" id="timing-unit" ><?php localisationEnBase($mysql, 'timing-unit','', 'recuperation') ?></p>
	<?php
	    }
	?>
	

	<div class="col-lg-5 col-sm-12 col-md-5 col-xs-2">
	<label>Taille gateaux</label>


	<?php
    if(isset($_SESSION['login'])) {
        if($_SESSION['admin']==true) {
	?>

	<ul>
	    <li><input type="checkbox" id="4pers" name="4pers">4 pers.</li>
	    <li><input type="checkbox" id="6pers" name="6pers">6 pers.</li>
	    <li><input type="checkbox" id="8pers" name="8pers">8 pers.</li>
	    <li><input type="checkbox" id="10pers" name="10pers">10 pers.</li>
	    <li><input type="checkbox" id="12pers" name="12pers">12 pers.</li>
	</ul>
	
	<?php
	    }
	?>
	<?php
	    } else {
	?>

	<select class="product-spec">
		  <option value="4pers">4 pers.</option>
		  <option value="6pers">6 pers.</option>
		  <option value="8pers">8 pers.</option>
		  <option value="10pers">10 pers.</option>
	</select>

	<?php
	    }
	?>

   </br>
    <a class="btn2" id="product-price" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'product-price','', 'recuperation') ?>€</a></br></br></br>
<a class="btn">Ajouter au panier</a>
</div>
</div></div>
</br></br>
