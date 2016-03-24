<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $page['title']; ?></title>
    <meta name="description" content="<?php echo $page['desc']; ?>">
    <link rel="stylesheet" href="css/global.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <meta name="format-detection" content="telephone=no">
    <link rel="cannonical" href="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
    <?php 
    require_once ('php/config.php');
    include('./functionBdd.php');
    $accueil = recupAccueil($mysql);
    if(isset($_SESSION['login']) && $_SESSION['admin']==true) {
    ?>
        <link rel="stylesheet" href="css-admin/admin.css">
    <?php
    }
    ?>
</head>
<body>
    <header>
        <nav id="user-bar">
            <ul>
            <?php
                    if(isset($_SESSION['login'])) {
                        if($_SESSION['admin']==true) {

                        ?>
                        <li><a class="btn_admin" href="index.php?page=administration">Administration</a></li>
                        <?php
                        }
                        ?>
                        <li><a class="btn_logout" href="index.php?page=logout">Deconnexion</a></li>
                        <?php
                    } else {
                        ?>
                        <li><a class="btn_inscription" href="index.php?page=logon">S'inscrire</a></li>
                        <li><a class="btn_login" href="index.php?page=login">Se connecter</a><li>
                        <?php
                    }
                 ?>
                <li><a class="btn_cart" href="#">Mon panier • (0)<span></a></li>
            </ul>
        </nav>
        <span id="titre_magasin" contenteditable="<?php echo $activeContent; ?>" class="title"><?php echo utf8_encode($accueil['nom_boulangerie']) ?></span>
        <nav id="first-menu">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="#">Produits</a></li>
                <li><a href="#">Offres</a></li>
                <li><a href="index.php"><img src="images/breadcrunch_logo.png" alt="Logo" id="logo"></a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="index.php?page=a-propos">A Propos</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
            </ul>
        </nav>
        <nav id="second-menu">
            <ul>
                <li><a href="#">Boulangerie</a></li>
                <li><a href="#">Pâtisserie</a></li>
                <li><a href="#">Chocolaterie</a></li>
                <li><a href="#">Sandwich / Salade</a></li>
            </ul>
        </nav>
    </header>