<?php

//----------------- function qui récupère les bonnes vues chaque page
function showPage(){

	

	if(!isset($_GET['page'])) {
		$page['title']="contenu title page accueil";
		$page['desc']="description page accueil";
		$page['content']="index.php";
		$_SESSION['context']="index.php";
		return $page;
	}
	else {
		switch ($_GET['page']) {
			case "a-propos":
			$page['title']="contenu title page a propos";
			$page['desc']="description page a propos";
			$page['content']="a-propos.php";
			$_SESSION['context']="a-propos.php";
			return $page;
			break;

			case "contact":
			$page['title']="contenu title page contact";
			$page['desc']="description page contact";
			$page['content']="contact.php";
			$_SESSION['context']="contact.php";
			return $page;
			break;

			case "login":
			$page['title']="contenu title page login";
			$page['desc']="description page login";
			$page['content']="login.php";
			$_SESSION['context']="login.php";
			return $page;
			break;

			case "logon":
			$page['title']="Enregistrement";
			$page['desc']="enregistrement d'un nouvel utilisateur";
			$page['content']="logon.php";
			$_SESSION['context']="logon.php";
			return $page;
			break;

			case "logout":
			$page['title']="Deconnection";
			$page['desc']="deconnection";
			$page['content']="logout.php";
			$_SESSION['context']="logout.php";
			return $page;
			break;
		}
	}
}

//----------------- function envoi mail
function MailBasic($envoyeur, $message, $destinataire, $sujet) {
	require_once("class.phpmailer.php");
	$sender = $envoyeur;
	$body = $message;
	$address = $destinataire;
	$mail = new PHPmailer();
	$mail->AddReplyTo($sender);
	$mail->SetFrom($sender);
	$mail->AddAddress($address);
	$mail->Subject = $sujet;
	$mail->AltBody = "Pour voir ce message, utilisez un navigateur compatible HTML";
	$mail->MsgHTML(utf8_decode($body));
	if(!$mail->Send()) {
		echo "Mailer Error : ".$mail->ErrorInfo;
	}
	else
	{
		echo "ok";
	}
}

?>