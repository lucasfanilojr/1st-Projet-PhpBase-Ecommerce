<?php 

class Notification{
	function supprimerTout(){
		require '../Database/Connection.php';
		$database->query("DELETE FROM notification ");
	}
	function ajouter($dateN,$notif){
		require '../../Database/Connection.php';
		$database->query("INSERT INTO notification (id,notif,dateN) VALUES(null,'$notif','$dateN') ");

	}
}


?>