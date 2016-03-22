    <footer class="wrapper" id="main-footer">
    	<div class="container">
    	<?php
    		if(isset($_SESSION['login'])) {
    			?>
    			<p class="col-lg-6 col-xs-12"><a href="index.php?page=logout">Deconnexion</a></p>
        		<?php
        	} else {
        		?>
        		<p class="col-lg-6 col-xs-12"><a href="index.php?page=login">Se connecter</a></p>
        		<?php
        	}
        	
        ?>
        </div>
    </footer>

    <!-- message erreur or success -->
	<div class="alert">
		<p class="successMsg"></p>
	</div>
    <!-- /message -->

    <?php 
	    if(isset($_SESSION['login']) && $_SESSION['admin']==true) {
	   	?>
	    <!-- barre laterale admin -->
		<div class="admin">
			<span class="icon-cog"></span>
			<span id="admin-publish">publier</span>
		</div>
	    <!-- /barre laterale admin -->
	    <?php
    }
    ?>




	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="./js/production.min.js"></script>
	<script src="http://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
	
</body>
        
</html>