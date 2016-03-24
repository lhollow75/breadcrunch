
<!-- //============ 
   MAIN CONTENT
=============== -->

<div class="wrapper contact" id="main-content">
	<div class="container">
	    <div class="col-lg-7 col-xs-12" contenteditable="<?php echo $activeContent; ?>">
			<h1>CONTACT</h1>
		</div>
		<form action="" method="post" id="contact-form" class="row">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<input type="password" name="nom" value="" placeholder="Votre nom" required>
				<input type="text" name="prenom" value="" placeholder="Votre prénom" required>
				<input type="email" name="email" value="" placeholder="Votre email" required>
				<input type="tel" name="tel" value="" placeholder="Votre téléphone" required>
				<textarea rows="4" cols="20" name="message" id="message" placeholder="Votre message"></textarea>
			</div>


			<div class="col-lg-12">
				<?php
				$a=rand(0,5);
				$b=rand(0,5);
				$_SESSION['code']=$a+$b;
				?>
				<input type="text" name="securecode" placeholder="<?php echo $a.'+'.$b.'='; ?>" required>
			</div>

			<div class="col-lg-12">
				<input type="submit" name="sumbit" value="Envoyer">
			</div>
			
		</form>
	</div>
</div>


<!-- //============ 
   /MAIN CONTENT
=============== -->
