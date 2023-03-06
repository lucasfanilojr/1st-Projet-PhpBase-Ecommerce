<?php require 'layout/header.php'; ?>

<?php session_start();
require '../Database/Connection.php';
if (!$_SESSION['identifiant'] && !$_SESSION['utilisateur']) { 
  header("location: ../index.php");
}
require '../Controller/achatIndex.php';

?>



<body class="bg-light">

<div class="container">
  <main>
  	<form method="post" action="">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../Public/images/logo.png" alt="" width="72" height="57">
      <h2>Formulaire d'achat</h2>
    </div>

    

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        	
          <span class="text-primary">Votre produit</span>
          
        </h4>
		<?php if($recuperer=$quette->fetch() ): ?>
        <ul class="list-group mb-3">

          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0"><?=$recuperer['designation'] ?></h6>
              <small class="text-muted"><?=$recuperer['description'] ?></small>
            </div>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-sm">

            <span class="text-muted">Prix Unitaire: <?=$recuperer['prix'] ?></span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Quantite</h6>
              <input type="number" name="quantite" value="1">
            </div>
          </li>

        </ul>
        <?php endif; ?>


      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Information Clientele</h4>
          <div class="row g-3">

          	<?php if($RecupUser=$user->fetch() ): ?>
            <div class="col-12">
              <label for="username" class="form-label">Nom Utilisateur</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" value="<?=$RecupUser['nomutilisateur']  ?>" name="nomutilisateur" >
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Adresse Email </label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" value="<?=$RecupUser['email']  ?>" name="email" >
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Adresse</label>
              <input type="text" class="form-control" id="address2" placeholder="Exemple: Lot g32 Tana" required>
            </div>
            <div class="col-12">
              <label for="address2" class="form-label">Numero Mobile</label>
              <input type="number" class="form-control" id="address2" placeholder="Exemple: 0348881644" required>
            </div>
            <div>
            	
            </div>
            
        	<?php endif; ?>
<?php require '../Controller/ConfigAchatAttente.php'; ?>
         </div>
         <?php if ($success): ?>
             <div class="alert alert-success" role="alert">
                Achat avec succes,verifiez votre E-mail plus tard
            </div>
         <?php else: ?>
          <button type="submit" class="btn btn-success btn-lg btn-block" name="achat">Achetez maintenant</button>
         <?php endif; ?>

         <a href="../Page/produit/" class="btn btn-outline-danger btn-lg btn-block" >Retour</a>
      </div>
    </div>
	
  	</form>
  </main>

<?php if($erreur): ?>
  <h3 class="alert-danger"><?=$erreur  ?></h3>
<?php endif; ?>


<?php require 'layout/footer.php'; ?>