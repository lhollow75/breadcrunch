<!-- //============ 
   MAIN CONTENT
=============== -->
<?php
	include('./functionBdd.php');
	$accueil = recupAccueil($mysql);
	$categorie = recupTable($mysql, 'categorie');
	//var_dump($categorie);
?>
<div class="wrapper" >
	<div class="container bandeau" >
			<h1 id="titre_boulangerie" class="col-lg-12" contenteditable="<?php echo $activeContent; ?>"><?php echo utf8_encode($accueil['nom_boulangerie']) ?></h1>
			<h2 class="col-lg-12"></h2>
	</div>
	<div class="container galerie">
		<figure class="col-lg-4 col-xs-12" draggable="<?php echo $activeContent; ?>" ondragstart="drag(event)">
		   
			<img id="img_baguette" src="./img/<?php echo $categorie[0]['photo'] ?>" alt="" contenteditable="<?php echo $activeContent; ?>">
            <form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
                <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
                <input type="hidden" name="id_formulaire" value="envoyer_baguette">
                <button type="submit" >Envoyer</button>
            </form>
			<figcaption contenteditable="<?php echo $activeContent; ?>"></figcaption>
		</figure>
		<figure class="col-lg-4 col-xs-12">
		    
			<img src="./img/patisserie.jpg" id="img_patisserie" alt="">
			<form method="post" style="display:<?php echo $appear; ?>;" enctype="multipart/form-data" action="./img_upload.php">
                <input  class="fileimg" type="file" name="fichier" accept="image/*" multiple>
                <input type="hidden" name="id_formulaire" value="envoyer_patisserie">
                <button type="submit" name="submit" >Envoyer</button>
            </form>
			<figcaption contenteditable="<?php echo $activeContent; ?>"></figcaption>
		</figure>
		<figure class="col-lg-4 col-xs-12">
		    
			<img src="./img/chocolats.jpg" id="img_chocolats" alt="">
			<form method="post" style="display:<?php echo $appear; ?>;" enctype="multipart/form-data" action="./img_upload.php">
                <input class="fileimg" type="file" name="fichier" accept="image/*" multiple>
                <input type="hidden" name="id_formulaire" value="envoyer_chocolat">
                <button type="submit" name="submit" >Envoyer</button>
            </form>
			<figcaption contenteditable="<?php echo $activeContent; ?>"></figcaption>
		</figure>
	</div>
</div><!-- /#main-content -->

<div class="container">
	<div class="col-lg-12" contenteditable="<?php echo $activeContent; ?>">
		<h1>coucou</h1>
		<p></p>
	</div>
	<div class="col-lg-6 col-xs-12" contenteditable="<?php echo $activeContent; ?>">
		<h1></h1>
		<p></p>
	</div>
	<div class="col-lg-6 col-xs-12" contenteditable="<?php echo $activeContent; ?>">
		<h1></h1>
		<p></p>
	</div>
</div>


<!-- //============ 
   /MAIN CONTENT
=============== -->