<!DOCTYPE html>
<html lang="fr">
    <head>
    	<meta charset="UTF-8">
        <title><?php echo $page['title']; ?></title>
        <meta name="description" content="<?php echo $page['desc']; ?>">
        <link rel="stylesheet" href="./css/global.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <meta name="format-detection" content="telephone=no">
        <link rel="cannonical" href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
        <?php 
        if(isset($_SESSION['login'])) {
        ?>
            <link rel="stylesheet" href="css-admin/admin.css">
        <?php
    }
    ?>

    </head>

    <body>
        <header class="wrapper" id="main-header">
            <div class="container">
                <nav>
                    <span class="icon-menu"></span>
                    <ul>
                        <li><a href="./">Accueil</a></li>
                        <li><a href="./a-propos.html">A propos</a></li>
                        <li><a href="./contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
    </header>