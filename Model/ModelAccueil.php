<?php

if (isset($_POST['envoyer'])) {
	if (!empty($_POST['nom']) || !empty($_POST['telephone']) || !empty($_POST['email']) || !empty($_POST['message']) ) {
		$nom=htmlspecialchars($_POST['nom']);
		$telephone=htmlspecialchars($_POST['telephone']);
		$email=htmlspecialchars($_POST['email']);
		$message=htmlspecialchars($_POST['message']);

		$database->query("INSERT INTO contact(reference,nom,telephone,email,message) VALUES(null,'$nom','$telephone','$email','$message') ");

	} else {
		$erreur="completez les champs s'il vous plait";
	    }
	
}

session_start();
if (isset($_SESSION['identifiant']) && isset($_SESSION['utilisateur'])) {

 		header("location: Page/Produit/");

	}else{

	}


?>