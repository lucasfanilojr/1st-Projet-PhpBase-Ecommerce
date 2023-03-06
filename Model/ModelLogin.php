<?php 

if (isset($_POST['connecter'])) {
			if (!empty($_POST['email']) || !empty($_POST['motdepasse']) ) {
				
				$email=htmlspecialchars($_POST['email']);
				$motdepasse=htmlspecialchars($_POST['motdepasse']);

			if ($email=='admin@gmail' && $motdepasse=='admin') {
					$_SESSION['admin']=true;
					$_SESSION['type']=admin;
					header("location: ../Admin/");
			}else{

				$requette=$database->query("SELECT *FROM utilisateur WHERE email='$email' ");

				if ($requette->rowCount()>0) {

					$recuperer=$requette->fetch();

					$motdepasseCrypter=$recuperer['motdepasse'];
					if(password_verify($motdepasse,$motdepasseCrypter)){
						$id=$recuperer['id'];
						$_SESSION['auth']=true;
						$_SESSION['identifiant']=$id;
						$_SESSION['utilisateur']=$email;
						$_SESSION['pass']=$motdepasse;
						header("location: ../Page/Produit");

						}else {
							
						$erreur="mot de passe incorrecte";
					}
					

				}else{
					$erreur="utilisateur introuvable";
				}
			}


			}
}

?>