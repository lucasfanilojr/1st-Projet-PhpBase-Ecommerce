<?php 

require '../Database/Connection.php';
require '../Model/ModelAchat.php';
$success=null;


if (isset($_POST['validerAchat'])) {

	$facture=$_POST['facture'];
	$rec=$database->query("SELECT *FROM attente WHERE facture='$facture' ");
	$recuperer=$rec->fetch();

	$dateF=date('d/m/Y');
	$reference=$recuperer['reference'];
	$mail=$recuperer['mail'];
	$quantite=$recuperer['quantite'];
	$prix=$recuperer['prix'];
	$somme=$recuperer['somme'];

	$acheter=new Achat();
	$acheter->ajouter($dateF,$mail,$reference,$quantite,$prix,$somme);
	
	$attente=new Attente();
	$attente->supprimer($facture);
}

$requette=$database->query("SELECT *FROM achat");

if (isset($_POST['livrer'])) {

	$facture=$_POST['facture'];
	$rec=$database->query("SELECT *FROM achat WHERE facture='$facture' ");
	$recuperer=$rec->fetch();

	$dateF=date('d/m/Y');
	$reference=$recuperer['reference'];
	$mail=$recuperer['mail'];
	$quantite=$recuperer['quantite'];
	$prix=$recuperer['prix'];
	$somme=$recuperer['somme'];

	$acheter=new Achat();
	$acheter->archive($dateF,$mail,$reference,$quantite,$prix,$somme);
	
	$acheter->supprimer($facture);
	$success="Livraision et archive avec success";
}

?>