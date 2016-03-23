<!-- //============ 
   MAIN CONTENT
=============== -->

<div class="wrapper" id="main-content">
	<div class="container bandeau">
			<h1 class="col-lg-12"></h1>
			<h2 class="col-lg-12"></h2>
	</div>
	<div class="container galerie">
		<figure class="col-lg-4 col-xs-12" draggable="<?php echo $activeContent; ?>" ondragstart="drag(event)">
		   
			<img src="./img/baguettes.jpg" alt="">
            <form method="post" enctype="multipart/form-data" action="./img_upload.php">
                <input style="display:<?php echo $appear; ?>;" class="fileimg" type="file" name="fichier" id="images" accept="image/*" multiple>
                <button type="submit" name="submit" id="btn">Envoyer</button>
            </form>
			<figcaption contenteditable="<?php echo $activeContent; ?>"></figcaption>
		</figure>
		<figure class="col-lg-4 col-xs-12">
		    
			<img src="./img/patisserie.jpg" alt="">
			<input style="display:<?php echo $appear; ?>;" class="fileimg" type="file" name="image" accept="image/*">
			<submit>Envoyer l'image</submit>
			<figcaption contenteditable="<?php echo $activeContent; ?>"></figcaption>
		</figure>
		<figure class="col-lg-4 col-xs-12">
		    
			<img src="./img/chocolats.jpg" alt="">
			<input style="display:<?php echo $appear; ?>;" class="fileimg" type="file" name="image" accept="image/*">
			<submit>Envoyer l'image</submit>
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

<script>
    
</script>








<!-- //============ 
   /MAIN CONTENT
=============== -->