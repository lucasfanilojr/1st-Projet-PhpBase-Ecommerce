<?php require '../Model/ConfigProduit.php'; ?>
<?php

require '../Model/ConfigUtilisateur.php';

if (isset($_POST['suppr'])) {

	$utilisateur=$_POST['users'];
	$user=new ConfigUtilisateur();
	$user->supprimer($utilisateur);
	header('location: tables.php');
}


?>