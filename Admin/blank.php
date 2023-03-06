<?php require 'layout/header.php' ?>

<?php require 'layout/navigationRech.php'; ?>

<?php require '../Model/ConfigProduit.php'; ?>

<?php require '../Controller/ConfigAchatAttente.php'; ?>

<?php require '../Controller/ConfigAchat.php'; ?>

<?php 

if(isset($_POST['supprimerproduit'])) {
	if (!empty($_POST['reference'])) {

	$reference=htmlspecialchars($_POST['reference']);
	$produit=new ConfigProduit();
	$produit->supprimer($reference);

	}else{
		$erreur="completez les champs vide";
	}
}

?>

<?php 
$success=null;

if (isset($_POST['rechercher'])) {
	if (!empty($_POST['donne'])) {

		$donnee=htmlspecialchars($_POST['donne']);

		$produitR=$database->query("SELECT *FROM produit WHERE designation='$donnee' ");
    $produitRT=$database->query("SELECT *FROM produit WHERE type='$donnee' ");


		$utilisateurR=$database->query("SELECT *FROM utilisateur WHERE email='$donnee' ");
    $utilisateurRNom=$database->query("SELECT *FROM utilisateur WHERE nomutilisateur='$donnee' ");

		$attenteR=$database->query("SELECT *FROM attente WHERE facture='$donnee' ");
    $attenteRE=$database->query("SELECT *FROM attente WHERE mail='$donnee' ");
  
?>

<!-- produit -->

<?php if ($r=$produitR->rowCount()>0 ): $success='oui'; ?>
      <div class="alert alert-info" role="alert">
        Produit par Designation(<?=$r=$produitR->rowCount()>0  ?>)
      </div>
  <section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Resultat de recherche</h2>
      <hr>
      <form method="post" action=""> 
        <div class="row layout_padding2">
        <div class="col-md-8">
          <?php if($r=$produitR->fetch() ):  ?>
          <div class="fruit_detail-box">
            <input type="hidden" name="reference" value="<?=$r['reference']; ?>">
            <h3>
              <?=$r['designation']; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?=$r['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Type: <?=$r['type'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix unitaire: <?=$r['prix'];  ?> Ar
            </p>
            <div>
              <button type="submit" class="btn btn-outline-danger btn-lg btn-block" name="supprimerproduit">
                Supprimer
              </button>
            </div>
        	<?php endif; ?>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../../public/images/<?=$r['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div><hr>
      </form>
    </div>
  </section>
<?php else: ?>
	<div class="alert alert-info" role="alert">
	  Produit par Designation(0)
	</div>
<?php endif; ?>



<?php if ($t=$produitRT->rowCount()==1 ): $success='oui'; ?>
  <div class="alert alert-info" role="alert">
        Produit par Type(<?=$t=$produitRT->rowCount() ?>)
  </div>
  <section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Resultat de recherche</h2>
      <hr>
      <form method="post" action=""> 
        <div class="row layout_padding2">
        <div class="col-md-8">
          <?php if($t=$produitRT->fetch()):  ?>
          <div class="fruit_detail-box">
            <input type="hidden" name="reference" value="<?=$t['reference']; ?>">
            <h3>
              <?=$t['designation']; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?=$t['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Type: <?=$t['type'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix unitaire: <?=$t['prix']; ?> Ar
            </p>
            <div>
              <button type="submit" class="btn btn-outline-danger btn-lg btn-block" name="supprimerproduit">
                Supprimer
              </button>
            </div>
          <?php endif; ?>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../../public/images/<?=$t['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div><hr>
      </form>
    </div>
  </section>
<?php elseif ($t=$produitRT->rowCount()>1 ): ?>
  <section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Resultat de recherche</h2>
      <hr>
      <?php while($t=$produitRT->fetch()) {  ?>
      <form method="post" action=""> 
        <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <input type="hidden" name="reference" value="<?=$t['reference']; ?>">
            <h3>
              <?=$t['designation']; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?=$t['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Type: <?=$t['type'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix unitaire: <?=$t['prix']; ?> Ar
            </p>
            <div>
              <button type="submit" class="btn btn-outline-danger btn-lg btn-block" name="supprimerproduit">
                Supprimer
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../../public/images/<?=$t['image']; ?>" alt="" class="" width="250px" />
          </div>
          
        </div>
      </div><hr>
      </form>
      <?php } ?>
    </div>
  </section>
<?php else: ?>
  <div class="alert alert-info" role="alert">
    Produit par Type(0)
  </div>
<?php endif; ?>


<!-- fin recherche de produit -->











<!--   utilisateur -->
<?php if ($u=$utilisateurR->rowCount()>0 )   : $success='oui'; ?>

<table class="table">
 <thead class="thead-dark">
<tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">email</th>
        <th scope="col">telephone</th>
        <th scope="col">action</th>
</tr>
 </thead>
 <?php if ($u=$utilisateurR->fetch() ): ?>
 <form method="post" action="actionUser.php">
    <input type="hidden" name="users" value="<?=$u['user'];?>">
    <tbody>
      <tr>
                                            
          <th scope="col"><?=$u['id'];  ?></th>
          <th scope="col"><?=$u['nomutilisateur'];  ?></th>
          <th scope="col"><?=$u['email'];  ?></th>
          <th scope="col"><?=$u['telephone'];  ?></th>
          <th scope="col">
               <button type="submit" name="suppr" class="btn btn-danger btn-sm" >Bannir</button>
          </th>
        </tr>
    </tbody>
    <div class="alert alert-info" role="alert">
      Utilisateur par E-mail (<?=$u=$utilisateurR->rowCount()>0   ?>)
  </div>
 </form>
<?php endif; ?>
</table>
<?php else: ?>
	<div class="alert alert-info" role="alert">
	  Utilisateur par E-mail (0)
	</div>
<?php endif; ?>



<?php if ($n=$utilisateurRNom->rowCount()>0 ): $success='oui'; ?>

<table class="table">
 <thead class="thead-dark">
<tr>
        <th scope="col">id</th>
        <th scope="col">nom</th>
        <th scope="col">email</th>
        <th scope="col">mot de passe</th>
        <th scope="col">action</th>
</tr>
 </thead>
 <?php if ($n=$utilisateurRNom->fetch() ): ?>
 <form method="post" action="actionUser.php">
    <input type="hidden" name="users" value="<?=$n['user'];?>">
    <tbody>
      <tr>
                                            
          <th scope="col"><?=$n['id'];  ?></th>
          <th scope="col"><?=$n['nomutilisateur'];  ?></th>
          <th scope="col"><?=$n['email'];  ?></th>
          <th scope="col"><?=$n['motdepasse'];  ?></th>
          <th scope="col">
               <button type="submit" name="suppr" class="btn btn-danger btn-sm" >Bannir</button>
          </th>
        </tr>
    </tbody>
 <div class="alert alert-info" role="alert">
    Utilisateur par Nom d'utilisateur (<?=$n=$utilisateurRNom->rowCount()>0  ?>)
  </div>
 </form>
<?php endif; ?>
</table>
<?php else: ?>
  <div class="alert alert-info" role="alert">
    Utilisateur par Nom d'utilisateur (0)
  </div>
<?php endif; ?>


<!-- fin de recherche utilisateur -->

















<!-- commande -->

<?php if($a=$attenteR->rowCount()>0 ): $success='oui'; ?>
<div class="alert alert-info" role="alert">
    Commande par numero de facture (<?=$a=$attenteR->rowCount() ?>)
</div>
<table class="table table-hover table-dark">
  <thead>
    <tr class="bg-primary">
      <th scope="col">Date</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Produit N°</th>
      <th scope="col">Quantite</th>
      <th scope="col">Sommes</th>
      <th scope="col">Action sur les attentes</th>
    </tr>
  </thead>
  <tbody>
  	<?php if($a=$attenteR->fetch() ): ?>
  	<form method="post" action="">
    <tr>
  	<input type="hidden" name="facture" value="<?=$a['facture'] ?>">
      
      <th scope="row"><?=$a['dateF']  ?></th>
      <td><?=$a['mail']  ?></td>
      <td><?=$a['reference']  ?></td>
      <td><?=$a['quantite']  ?></td>
      <td><?=$a['somme']  ?></td>
      <td>
      	<button type="submit" class="btn btn-outline-primary" name="validerAchat">Valider</button> 
		<button type="submit" class="btn btn-danger" name="supprimerAchat">Supprimer</button>
      </td>
    </tr>
    </form>
    <?php endif; ?>                                    

  </tbody>
</table>
<?php else: ?>
	<div class="alert alert-info" role="alert">
	  Commande par numero de facture (0)
	</div>
<?php endif; ?>











<?php if($e=$attenteRE->rowCount()==1 ): $success='oui'; ?>
<div class="alert alert-info" role="alert">
    Commande par e-mail (<?=$e=$attenteRE->rowCount() ?>)
</div>
<table class="table table-hover table-dark">
  <thead>
    <tr class="bg-primary">
      <th scope="col">Date</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Produit N°</th>
      <th scope="col">Quantite</th>
      <th scope="col">Sommes</th>
      <th scope="col">Action sur les attentes</th>
    </tr>
  </thead>
  <tbody>
    <?php if($e=$attenteRE->fetch() ): ?>
    <form method="post" action="">
    <tr>
    <input type="hidden" name="facture" value="<?=$e['facture'] ?>">
      
      <th scope="row"><?=$e['dateF']  ?></th>
      <td><?=$e['mail']  ?></td>
      <td><?=$e['reference']  ?></td>
      <td><?=$e['quantite']  ?></td>
      <td><?=$e['somme']  ?></td>
      <td>
        <button type="submit" class="btn btn-outline-primary" name="validerAchat">Valider</button> 
    <button type="submit" class="btn btn-danger" name="supprimerAchat">Supprimer</button>
      </td>
    </tr>
    </form>
    <?php endif; ?>                                    

  </tbody>
</table>
<?php elseif($e=$attenteRE->rowCount()>1) : ?>
<table class="table table-hover table-dark">
  <thead>
    <tr class="bg-primary">
      <th scope="col">Date</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Produit N°</th>
      <th scope="col">Quantite</th>
      <th scope="col">Sommes</th>
      <th scope="col">Action sur les attentes</th>
    </tr>
  </thead>
  <tbody>
    <?php while($e=$attenteRE->fetch() ){ ?>
    <form method="post" action="">
    <tr>
    <input type="hidden" name="facture" value="<?=$e['facture'] ?>">
      
      <th scope="row"><?=$e['dateF']  ?></th>
      <td><?=$e['mail']  ?></td>
      <td><?=$e['reference']  ?></td>
      <td><?=$e['quantite']  ?></td>
      <td><?=$e['somme']  ?></td>
      <td>
        <button type="submit" class="btn btn-outline-primary" name="validerAchat">Valider</button> 
    <button type="submit" class="btn btn-danger" name="supprimerAchat">Supprimer</button>
      </td>
    </tr>
    </form>
    <?php } ?>                                    
  </tbody>
</table>  
<?php else: ?>
  <div class="alert alert-info" role="alert">
    Commande par e-mail (0)
  </div>
<?php endif; ?>






<?php 

 }
}

?>

<?php require 'layout/footerB.php' ?>