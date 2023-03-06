<?php require '../Controller/ConfigProduit.php'; ?>
<?php require 'layout/header.php'; ?>

<?php require 'layout/navigation.php'; ?>
<?php require '../Controller/ConfigAchat.php'; ?>

<div class="container">
 										<?php if ($success): ?>
                                            <div class="alert alert-success" role="alert">
											  <?=$success ?>
											</div>
                                        <?php endif; ?>

	<table class="table">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">Date</th>
	      <th scope="col">E-Mail</th>
	      <th scope="col">Produit N°</th>
	      <th scope="col">Quantite</th>
	      <th scope="col">Sommes</th>
	      <th scope="col">Action sur les attentes</th>
	    </tr>
	  </thead>
	  <tbody>
	    <?php while($recupAttente=$requette->fetch() ){ ?>
		  	<form method="post" action="">
		    <tr>
		  	<input type="hidden" name="facture" value="<?=$recupAttente['facture'] ?>">
		      
		      <th scope="row"><?=$recupAttente['dateF']  ?></th>
		      <td><?=$recupAttente['mail']  ?></td>
		      <td><?=$recupAttente['reference']  ?></td>
		      <td><?=$recupAttente['quantite']  ?></td>
		      <td><?=$recupAttente['somme']  ?></td>
		      <td>
		      	<button type="submit" class="btn btn-outline-dark" name="livrer">Livrer Avec Success</button> 
		      </td>
		    </tr>
		    </form>
		<?php } ?>
	  </tbody>
	</table>
										<?php if ($requette->rowCount()>0): ?>
                                            <h3 style="color: black;"></h3>
                                        <?php else: ?>
                                            <div class="container">
                                                <div class="alert alert-danger" role="alert">
                                                   <h3 style="color: red;text-align: center;">Pas d'Achat pour le moment</h3>
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