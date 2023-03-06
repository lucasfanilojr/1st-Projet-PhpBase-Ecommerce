<?php 

if (isset($_POST['inscrire'])) {
			if (!empty($_POST['user']) || !empty($_POST['email']) || !empty($_POST['motdepasse']) || !empty($_POST['retaper'])){

				$nomuser=htmlspecialchars($_POST['user']);
				$email=htmlspecialchars($_POST['email']);
				$motdepasse=htmlspecialchars($_POST['motdepasse']);
				$motdepasseCrypter=password_hash($motdepasse, PASSWORD_DEFAULT,["cost" => 12]);
				$retaper=htmlspecialchars($_POST['retaper']);

				if($motdepasse==$retaper) {

					$database->query("INSERT INTO utilisateur(user,nomutilisateur,email,motdepasse,id,image,biographie,telephone) VALUES(null,'$nomuser','$email','$motdepasseCrypter',500,'vide','vide',0) ");

					$date=date('d/m/Y');
					$notif=$nomuser.' a rejoint notre equipe le '.$date;
					$requette=$database->query("INSERT INTO notification(id,notif,dateN) VALUES(null,'$notif','$date') ");
					$recuperer=$requette->fetch();
						$id=$recuperer['id'];
						$_SESSION['auth']=true;
						$_SESSION['identifiant']=$id;
						$_SESSION['utilisateur']=$email;
						$_SESSION['pass']=$motdepasse;
						header("location: ../Page/Produit");
				} else {
					$erreur="les deux mot de passe sont pas identique";
				       }
			}
}


?>