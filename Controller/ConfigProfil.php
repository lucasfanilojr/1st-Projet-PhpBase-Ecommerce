<?php

require '../../Database/Connection.php';

require '../../Model/ConfigUtilisateur.php';

require '../../Model/ModelNotification.php';

$erreur=null;
$success=null;

if (isset($_POST['modifier'])) {
	if (!empty($_POST['nomutilisateur']) && !empty($_POST['email']) && !empty($_POST['biographie']) && !empty($_POST['telephone']) ) {
		$user=htmlspecialchars($_POST['user']);
		$nomutilisateur=htmlspecialchars($_POST['nomutilisateur']);
		$email=htmlspecialchars($_POST['email']);
		$biographie=htmlspecialchars($_POST['biographie']);
		$telephone=htmlspecialchars($_POST['telephone']);

		$var=new ConfigUtilisateur();
		$var->modifier($user,$nomutilisateur,$email,$biographie,$telephone);
		$_SESSION['auth']=true;
		$_SESSION['utilisateur']=$email;
		$success="modifier avec success";
	}else{
		$erreur="completez les champs vides";
	}
}

if (isset($_POST['demander'])) {
	if (!empty($_POST['motif'])) {
		$notifs=htmlspecialchars($_POST['motif']);
		$notif="utilisateur: ".$_SESSION['utilisateur']." : <br> "."Present pour vous demander une suppression de compte pour motif: ".$notifs;
		$dateN=date('d/m/Y');

		$let=new Notification();
		$let->ajouter($dateN,$notif);
		$success="votre demande a été envoyer avec success";
	}else{
		$erreur="completez les champs vides";
	}
}

if (isset($_POST['changement'])) {
	if (!empty($_POST['ancien']) &&  !empty($_POST['nouveau']) && !empty($_POST['retaper']) ) {
		$ancien=htmlspecialchars($_POST['ancien']);
		$nouveau=htmlspecialchars($_POST['nouveau']);
		$retaper=htmlspecialchars($_POST['retaper']);

		$utilisateur=$_SESSION['utilisateur'];
		$req=$database->query("SELECT *FROM utilisateur WHERE email='$utilisateur' ");
		$recuperer=$req->fetch();
		$motdepasseCrypter=$recuperer['motdepasse'];

		$user=$recuperer['user'];

		if(password_verify($ancien,$motdepasseCrypter)){
			if ($nouveau == $retaper) {
				
			$nouveauMDP=password_hash($nouveau, PASSWORD_DEFAULT,["cost" => 12]);

			$char=new ConfigUtilisateur();
			$char->modifierMotdepasse($user,$nouveauMDP);
			$_SESSION['pass']=$nouveau;
			$success="votre mot de passe a été changer avec success";
			    }else{
					$erreur="les nouveau mot de passe est different du verification";
			    	 }
			
			}else {
							
			$erreur="mot de passe ancien incorrecte";
		          }


	}else{
		$erreur="veuillez completez les champs";
	}
}

$successImageProfil=null;

	if(!empty($_FILES)){

	$name= $_FILES["fic"]["name"];

	$type= $_FILES["fic"]["type"];

	$tmp_name= $_FILES["fic"]["tmp_name"];

	$size= $_FILES["fic"]["size"];

	$error= $_FILES["fic"]["error"];

	$extension= strrchr($name, '.');

	$destination="../../public/images/".$name;

	$exten_val = array('.jpg','.jpeg','.png','.JPG','.JPEG','.PNG');

	if(in_array($extension, $exten_val)){
		move_uploaded_file($tmp_name, $destination);
		$email=$_SESSION['utilisateur'];
		$database->query("UPDATE utilisateur SET image='$name' WHERE email='$email' ");
		$successImageProfil="oui";
		echo "<div class='container' style='color:green;'>Votre profil a ete modifier avec success </div>";
	} else{
		echo "<div class='container' style='color:red;'>veuillez mettre une image valide s'il vous plait !!! </div>";
	}
}




?>