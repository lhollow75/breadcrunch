<?php
require ('php/config.php');

if(isset($_POST) && !empty($_POST['identifiant']) && !empty($_POST['password']) ) {
	$login = htmlspecialchars($_POST['identifiant']);
	$pass = htmlspecialchars($_POST['password']);
	$pass = sha1($pass);

	$req = $mysql->prepare("SELECT * FROM users WHERE login = :login AND pass = :pass");
	$req->execute(array(
		':login'=>$login,
		':pass'=>$pass
		));

	if($req->rowCount()==1) {
		session_start();
		$_SESSION['login']=true;
		header('location:./index.php');
	}
	else {
		header('location:./index.php?page=login&erreur=Login ou mot de pass incorrect');
		exit();
	}
}
?>