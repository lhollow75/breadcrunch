    <?php 
    $accueil = recupAccueil($mysql);
    $categorie = recupTable($mysql,'categorie');
    ?>
    <img src="images/breadcrunch_02.jpg" alt="">
	<div>
		<h1>Lorem ipsum dolor sit amet</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui blanditiis distinctio sunt, laborum incidunt itaque?</p>
	</div>
	<div id="galery">
		<img id="img_boulangerie" class="photo-galery" src="./img/<?php echo $categorie[0]['photo']?>" alt="">
        <form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
            <input type="hidden" name="id_formulaire" value="envoyer_boulangerie">
            <button type="submit" >Envoyer</button>
        </form>
		<img id="img_patisserie" class="photo-galery" src="./img/<?php echo $categorie[1]['photo']?>" alt="">
		<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
            <input type="hidden" name="id_formulaire" value="envoyer_patisserie">
            <button type="submit" >Envoyer</button>
        </form>
		<img id="img_sandwich" class="photo-galery" src="./img/<?php echo $categorie[2]['photo']?>" alt="">
		<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
            <input type="hidden" name="id_formulaire" value="envoyer_sandwich">
            <button type="submit" >Envoyer</button>
        </form>
		<img id="img_chocolaterie" class="photo-galery" src="./img/<?php echo $categorie[3]['photo']?>" alt="">
		<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
            <input type="hidden" name="id_formulaire" value="envoyer_chocolaterie">
            <button type="submit" >Envoyer</button>
        </form>
        <img id="img_boisson" class="photo-galery" src="./img/<?php echo $categorie[4]['photo']?>" alt="">
		<form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
            <input  class="fileimg" type="file" name="fichier"  accept="image/png" multiple>
            <input type="hidden" name="id_formulaire" value="envoyer_boisson">
            <button type="submit" >Envoyer</button>
        </form>
	</div>
	<div id="presentation-text">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut obcaecati beatae laborum vel amet. Fugiat delectus et velit, tempora magni.
	</div>
	<div id="opening-hours">
		<p contenteditable="<?php echo $activeContent; ?>" id="horaires_ouverture"><?php echo utf8_encode($accueil['horaires_ouverture'])?></p>
	</div>