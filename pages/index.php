    <?php 
    $accueil = recupAccueil($mysql);
    $categorie = recupTable($mysql,'categorie');
    ?>

	<!--<video autoplay loop muted poster="/static/img/background.jpg" id="vid">
		<source src="./video/video_boulanger.mp4" type="video/mp4">
	</video>-->

    <img src="images/<?php localisationEnBase($mysql, 'homeimg','', 'recuperation')?>" id="homeimg" alt="">
    <form id="img_head" style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
            <p>Choisissez une image de bannière :</p>
            <input class="fileimg" type="file" name="fichier" accept="image/*" multiple>
            <input type="hidden" name="home_img" value="home">
            <button type="submit">Envoyer</button>
    </form>

    <div class="wrapper" id="main-content">
        <div class="container">
			<div id="intro">
				<h1 id="titre_index" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'titre_index','', 'recuperation') ?></h1>
		        <hr>
				<p id="index_text" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'index_text','', 'recuperation') ?></p>
			</div><!-- /#intro -->
  
			<div id="galery" class="row">
				<?php
					if ($categorie[0]['actif']==1){
				?>
			    <div id="boulangerie" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			    	<div class="galery-section">
				    	<img id="img_boulangerie" class="photo-galery" src="./img/<?php echo $categorie[0]['photo']?>" alt="">
				    	<div id="presentation-boulangerie" contenteditable="<?php echo $activeContent; ?>">
							<p class="galery-section-title"><?php localisationEnBase($mysql, 'presentation-boulangerie','', 'recuperation') ?></p>
						</div><!-- /#presentation-boulangerie -->
				        <form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
				            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
				            <input type="hidden" name="id_formulaire" value="envoyer_boulangerie">
				            <button type="submit" >Envoyer</button>
				        </form>
				    </div><!-- /.galery-section -->
			    </div><!-- /#boulangerie -->
				<?php
					}
					if ($categorie[1]['actif']==1){
				?>
			    <div id="patisserie" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			    	<div class="galery-section">
				    	<img id="img_patisserie" class="photo-galery" src="./img/<?php echo $categorie[1]['photo']?>" alt="">
				    	<div id="presentation-patisserie" contenteditable="<?php echo $activeContent; ?>">
							<p class="galery-section-title"><?php localisationEnBase($mysql, 'presentation-patisserie','', 'recuperation') ?></p>
						</div><!-- /#presentation-patisserie -->
				    	<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
				            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
				            <input type="hidden" name="id_formulaire" value="envoyer_patisserie">
				            <button type="submit" >Envoyer</button>
				        </form>
				    </div><!-- /.galery-section -->
			    </div><!-- /#patisserie -->
		        <?php
					}
					if ($categorie[2]['actif']==1){
				?>
			    <div id="sandwich" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			    	<div class="galery-section">
				    	<img id="img_sandwich" class="photo-galery" src="./img/<?php echo $categorie[2]['photo']?>" alt="">
				    	<div id="presentation-sandwich" contenteditable="<?php echo $activeContent; ?>">
							<p class="galery-section-title"><?php localisationEnBase($mysql, 'presentation-sandwich','', 'recuperation') ?></p>
						</div><!-- /#presentation-sandwich -->
				    	<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
				            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
				            <input type="hidden" name="id_formulaire" value="envoyer_sandwich">
				            <button type="submit" >Envoyer</button>
				        </form>
				    </div><!-- /.galery-section -->
			    </div><!-- /#sandwich -->
		        <?php
					}
					if ($categorie[3]['actif']==1){
				?>
			    <div id="chocolaterie" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			    	<div class="galery-section">
				    	<img id="img_chocolaterie" class="photo-galery" src="./img/<?php echo $categorie[3]['photo']?>" alt="">
				    	<div id="presentation-chocolaterie" contenteditable="<?php echo $activeContent; ?>">
							<p class="galery-section-title"><?php localisationEnBase($mysql, 'presentation-chocolaterie','', 'recuperation') ?></p>
						</div><!-- /#presentation-chocolaterie -->
				    	<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
				            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
				            <input type="hidden" name="id_formulaire" value="envoyer_chocolaterie">
				            <button type="submit" >Envoyer</button>
				        </form>
				    </div><!-- /.galery-section -->
			    </div><!-- /#chocolaterie -->
				<?php
					}
					if ($categorie[4]['actif']==1){
				?>
			    <div id="boisson" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
			    	<div class="galery-section">
				        <img id="img_boisson" class="photo-galery" src="./img/<?php echo $categorie[4]['photo']?>" alt="">
				        <div id="presentation-boisson" contenteditable="<?php echo $activeContent; ?>">
							<p class="galery-section-title"><?php localisationEnBase($mysql, 'presentation-boisson','', 'recuperation') ?> Boissons</p>
						</div><!-- /#presentation-boisson -->
				    	<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
				            <input  class="fileimg" type="file" name="fichier"  accept="image/png" multiple>
				            <input type="hidden" name="id_formulaire" value="envoyer_boisson">
				            <button type="submit" >Envoyer</button>
				        </form>
				    </div><!-- /.galery-section -->
			    </div><!-- /#boisson -->
		        <?php
					}
				?>
			</div><!-- /#galery -->

			<div id="presentation-text" contenteditable="<?php echo $activeContent; ?>">
				<p class="galery-section-title"><?php localisationEnBase($mysql, 'presentation-text','', 'recuperation') ?></p>
			</div><!-- /#presentation-text -->
		</div><!-- /.container -->
    </div><!-- /#main-content -->
	<div id="opening-hours">
		<div class="dot">
			<p contenteditable="<?php echo $activeContent; ?>" id="horaires_ouverture"><?php localisationEnBase($mysql, 'horaires_ouverture','', 'recuperation') ?></p>
		</div><!-- /#opening-hours -->
	</div><!-- /.dot -->

	