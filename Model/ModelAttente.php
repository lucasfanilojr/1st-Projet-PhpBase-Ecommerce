<?php 

class Attente{
	function ajouter($dateF,$mail,$reference,$quantite,$prix,$somme){
		require '../Database/Connection.php';
		$database->query("INSERT INTO attente(facture,dateF,mail,reference,quantite,prix,somme) VALUES(null,'$dateF','$mail','$reference','$quantite','$prix','$somme') ");
	}
	function supprimer($facture){
		require '../Database/Connection.php';
		$database->query(" DELETE FROM attente WHERE facture='$facture' ");
	}
}

?>