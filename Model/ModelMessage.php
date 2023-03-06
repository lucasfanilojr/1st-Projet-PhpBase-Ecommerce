<?php 

class Message{
	function supprimerTout(){
		require '../Database/Connection.php';
		$database->query("DELETE FROM contact ");
	}
}


?>