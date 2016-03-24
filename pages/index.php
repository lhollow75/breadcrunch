    <?php 
    include('./functionBdd.php');
    $accueil = recupAccueil($mysql);
    $categorie = recupTable($mysql,'categorie');
    ?>
    <img src="images/breadcrunch_02.jpg" alt="">
	<div>
		<h1>Lorem ipsum dolor sit amet</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui blanditiis distinctio sunt, laborum incidunt itaque?</p>
	</div>
	<div id="galery">
		<img id="img_baguette" class="photo-galery" src="./img/<?php echo $categorie[0]['photo']?>" alt="">
        <form style="display:<?php echo $appear; ?>;" method="post" enctype="multipart/form-data" action="./img_upload.php">
            <input  class="fileimg" type="file" name="fichier"  accept="image/*" multiple>
            <input type="hidden" name="id_formulaire" value="envoyer_baguette">
            <button type="submit" >Envoyer</button>
        </form>
		<img class="photo-galery" src="images/breadcrunch_07.jpg" alt="">
		<img class="photo-galery" src="images/breadcrunch_09.jpg" alt="">
		<img class="photo-galery" src="images/breadcrunch_11.jpg" alt="">
	</div>
	<div id="presentation-text">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut obcaecati beatae laborum vel amet. Fugiat delectus et velit, tempora magni.
	</div>
	<div id="opening-hours">
		<p>Ouvert du mardi au dimanche de 7h à 20h30</p>
	</div>