<?php

$successImage=null;

	if(!empty($_FILES)){

	$name= $_FILES["fic"]["name"];

	$type= $_FILES["fic"]["type"];

	$tmp_name= $_FILES["fic"]["tmp_name"];

	$size= $_FILES["fic"]["size"];

	$error= $_FILES["fic"]["error"];

	$extension= strrchr($name, '.');

	$destination="../public/images/".$name;

	$exten_val = array('.jpg','.jpeg','.png','.JPG','.JPEG','.PNG');

	if(in_array($extension, $exten_val)){
		$_SESSION['fichier']=$name;
		move_uploaded_file($tmp_name, $destination);
	$successImage="oui";
	
	} else{
		echo "veuillez mettre une image valide s'il vous plait !!!";
	}
}

?>