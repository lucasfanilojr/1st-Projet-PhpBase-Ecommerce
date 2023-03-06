<?php require '../Model/ConfigProduit.php'; ?>
<?php 
$erreur=null;
$success=null;

if (isset($_POST['inserer'])) {
	if (!empty($_POST['designation']) && !empty($_POST['description']) && !empty($_POST['prix']) ) {

		$designation=htmlspecialchars($_POST['designation']);
		$description=htmlspecialchars($_POST['description']);
		$prix=htmlspecialchars($_POST['prix']);
		$type=htmlspecialchars($_POST['type']);
		$image=$_SESSION['fichier'];

		$produit=new ConfigProduit();
		$produit->ajouter($designation,$description,$prix,$type,$image);
		$success="inserer avec success";
		$_SESSION['fichier']=null;
	}else{
		$erreur="complete les champs vides";
	}
}

if (isset($_POST['modifierproduit'])) {
	$reference=htmlspecialchars($_POST['reference']);
	$_SESSION['produit']=$reference;
	header("location: modifierProduit.php");
}

if (isset($_POST['modifier'])) {
	if (!empty($_POST['designation']) && !empty($_POST['description']) && !empty($_POST['prix']) ) {

		$designation=htmlspecialchars($_POST['designation']);
		$description=htmlspecialchars($_POST['description']);
		$prix=htmlspecialchars($_POST['prix']);
		$type=htmlspecialchars($_POST['type']);
		$image=$_SESSION['imageModifier'];
		$reference=htmlspecialchars($_POST['reference']);

		$produit=new ConfigProduit();
		$produit->modifier($reference,$designation,$description,$prix,$type,$image);
		$_SESSION['imageModifier']=null;
		$success="modifier avec success";

	}else{
		$erreur="completez les champs vides";
	}
}

if(isset($_POST['supprimerproduit'])) {
	if (!empty($_POST['reference'])) {

	$reference=htmlspecialchars($_POST['reference']);
	$produit=new ConfigProduit();
	$produit->supprimer($reference);

	header("location: produit.php");
	}else{
		$erreur="completez les champs vide";
	}
}


?>