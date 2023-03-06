<?php require 'layout/header.php' ?>

<?php require 'layout/navigation.php'; ?>

<?php 

require '../Controller/ConfigAchatAttente.php';
require '../Controller/ConfigAchat.php';
$req=$database->query("SELECT *FROM attente");


?>
<div class="container">
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
  	<?php while($recupAttente=$req->fetch() ){ ?>
  	<form method="post" action="">
    <tr>
  	<input type="hidden" name="facture" value="<?=$recupAttente['facture'] ?>">
      
      <th scope="row"><?=$recupAttente['dateF']  ?></th>
      <td><?=$recupAttente['mail']  ?></td>
      <td><?=$recupAttente['reference']  ?></td>
      <td><?=$recupAttente['quantite']  ?></td>
      <td><?=$recupAttente['somme']  ?></td>
      <td>
      	<button type="submit" class="btn btn-outline-primary" name="validerAchat">Valider</button> 
		<button type="submit" class="btn btn-danger" name="supprimerAchat">Supprimer</button>
      </td>
    </tr>
    </form>
	<?php } ?>
                                        

  </tbody>
</table>
                                        <?php if ($req->rowCount()>0): ?>
                                            <h3 style="color: black;"></h3>
                                        <?php else: ?>
                                            <div class="container">
                                                <div class="alert alert-danger" role="alert">
                                                   <h3 style="color: red;text-align: center;">Pas d'attente pour le moment</h3>
                                                </div>
                                            </div>
                                            
                                        <?php endif; ?>
</div>
 	  <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>