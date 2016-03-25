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
				<option value="9h-10h">Heure</option>
				<option value="10h-11h">Jours</option>
				<option value="11h-12h">Semaines</option>
				<option value="11h-12h">Mois</option>
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
		</ul>
	</div>

	<?php
	    }
	?>
	<?php
	    } else {
	?>
	<label>Allergène : </label>
	<?php
	    }
	?>


<div class="col-lg-5 col-sm-12 col-md-5 col-xs-2">
<label>Taille gateaux</label>
	<select class="product-spec">
		  <option value="4pers">4 pers.</option>
		  <option value="6pers">6 pers.</option>
		  <option value="8pers">8 pers.</option>
		  <option value="10pers">10 pers.</option>
	</select>
   </br>
    <a class="btn2">1,50€</a></br></br></br>
<a class="btn">Ajouter au panier</a>
</div>
</div></div>
</br></br>
