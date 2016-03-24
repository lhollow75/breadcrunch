    <?php 
    $accueil = recupAccueil($mysql);
    $categorie = recupTable($mysql,'categorie');
    ?>

    
    <img src="images/breadcrunch_02.jpg" alt="">
        <div class="wrapper" id="main-content">
        <div class="container">
	<div id="intro">
		<h1 id="titre_index" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'titre_index','', 'recuperation') ?></h1>
        <hr>
		<p id="index_text" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'index_text','', 'recuperation') ?></p>
	</div>
  
	<div id="galery">
		<?php
		if ($categorie[0]['actif']==1){
		?>
	        <div id="boulangerie" >
	    		<img id="img_boulangerie" class="photo-galery" src="./img/<?php echo $categorie[0]['photo']?>" alt="">
	            <form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
	                <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
	                <input type="hidden" name="id_formulaire" value="envoyer_boulangerie">
	                <button type="submit" >Envoyer</button>
	            </form>
	        </div>
		<?php
		}
		if ($categorie[1]['actif']==1){
		?>
	        <div id="patisserie">
	    		<img id="img_patisserie" class="photo-galery" src="./img/<?php echo $categorie[1]['photo']?>" alt="">
	    		<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
	                <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
	                <input type="hidden" name="id_formulaire" value="envoyer_patisserie">
	                <button type="submit" >Envoyer</button>
	            </form>
	        </div>
        <?php
		}
		if ($categorie[2]['actif']==1){
		?>
	        <div id="sandwich">
	    		<img id="img_sandwich" class="photo-galery" src="./img/<?php echo $categorie[2]['photo']?>" alt="">
	    		<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
	                <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
	                <input type="hidden" name="id_formulaire" value="envoyer_sandwich">
	                <button type="submit" >Envoyer</button>
	            </form>
	        </div>
        <?php
		}
		if ($categorie[3]['actif']==1){
		?>
	        <div id="chocolaterie">
	    		<img id="img_chocolaterie" class="photo-galery" src="./img/<?php echo $categorie[3]['photo']?>" alt="">
	    		<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
	                <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
	                <input type="hidden" name="id_formulaire" value="envoyer_chocolaterie">
	                <button type="submit" >Envoyer</button>
	            </form>
	        </div>
		<?php
		}
		if ($categorie[4]['actif']==1){
		?>
	        <div id="boisson">
	            <img id="img_boisson" class="photo-galery" src="./img/<?php echo $categorie[4]['photo']?>" alt="">
	    		<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
	                <input  class="fileimg" type="file" name="fichier"  accept="image/png" multiple>
	                <input type="hidden" name="id_formulaire" value="envoyer_boisson">
	                <button type="submit" >Envoyer</button>
	            </form>
	        </div>
        <?php
		}
		?>
	</div>
	<div id="presentation-text" contenteditable="<?php echo $activeContent; ?>">
		<p><?php localisationEnBase($mysql, 'presentation-text','', 'recuperation') ?></p>
	</div>
    </div>
    </div>
	<div id="opening-hours">
		<p contenteditable="<?php echo $activeContent; ?>" id="horaires_ouverture"><?php localisationEnBase($mysql, 'horaires_ouverture','', 'recuperation') ?></p>
	</div>

	