<?php 

class ConfigUtilisateur
{
	
	function supprimer($utilisateur){
		require '../Database/Connection.php';
		$database->query("DELETE FROM utilisateur WHERE user='$utilisateur' ");
	}
	function modifier($user,$nomutilisateur,$email,$biographie,$telephone){
		require '../../Database/Connection.php';
		$database->query("UPDATE utilisateur SET nomutilisateur='$nomutilisateur',email='$email',biographie='$biographie',telephone='$telephone' WHERE user='$user' ");
	}
	function modifierMotdepasse($user,$nouveauMDP){
		require '../../Database/Connection.php';
		$database->query("UPDATE utilisateur SET motdepasse='$nouveauMDP' WHERE user='$user' ");
	}
}
?>