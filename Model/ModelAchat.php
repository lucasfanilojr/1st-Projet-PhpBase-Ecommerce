<?php 

class Achat{
	function ajouter($dateF,$mail,$reference,$quantite,$prix,$somme){
		require '../Database/Connection.php';
		$database->query("INSERT INTO achat(facture,dateF,mail,reference,quantite,prix,somme) VALUES(null,'$dateF','$mail','$reference','$quantite','$prix','$somme') ");
	}
	function archive($dateF,$mail,$reference,$quantite,$prix,$somme){
		require '../Database/Connection.php';
		$database->query("INSERT INTO archive(facture,dateF,mail,reference,quantite,prix,somme) VALUES(null,'$dateF','$mail','$reference','$quantite','$prix','$somme') ");
	}
	function supprimer($facture){
		require '../Database/Connection.php';
		$database->query(" DELETE FROM achat WHERE facture='$facture' ");
	}
}

?>