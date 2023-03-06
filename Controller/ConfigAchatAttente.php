<?php 
$erreur=null;
$success=null;
require '../Database/Connection.php';
require '../Model/ModelAttente.php';

if (isset($_POST['achat'])) {
	if (!empty($_POST['nomutilisateur']) && !empty($_POST['email']) && !empty($_POST['quantite']) ) {
		if ($_POST['quantite'] <= 0) {
			$erreur="Erreur de quantite";
		}else{

			$achat=new Attente();

			$dateF=date('d/m/Y');
			$mail=$RecupUser['email'];
			$quantite=$_POST['quantite'];
			$prix=$recuperer['prix'];
			$somme=$prix*$quantite;

			$achat->ajouter($dateF,$mail,$reference,$quantite,$prix,$somme);
			$success="achat avec success ,veuillez voir les info sur E-mail";

		}
		
	}else{
		$erreur="veuillez remplir le formulaire";
	}
}

if (isset($_POST['supprimerAchat'])) {
	$facture=htmlspecialchars($_POST['facture']);
	$effacer=new Attente();
	$effacer->supprimer($facture);
}



?>