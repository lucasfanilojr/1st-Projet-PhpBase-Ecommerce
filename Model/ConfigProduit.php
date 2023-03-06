<?php 

class ConfigProduit
{
	
	function ajouter($designation,$description,$prix,$type,$image){
		require '../Database/Connection.php';
		$database->query("INSERT INTO produit (reference,designation,description,prix,type,image) VALUES(null,'$designation','$description','$prix','$type','$image') ");
	}
	function modifier($reference,$designation,$description,$prix,$type,$image){
		require '../Database/Connection.php';
		$database->query("UPDATE produit SET designation='$designation',description='$description',prix='$prix',type='$type',image='$image' WHERE reference='$reference' ");
	}
	function supprimer($reference){
		require '../Database/Connection.php';
		$database->query(" DELETE FROM produit WHERE reference='$reference' ");
	}
	
}

?>