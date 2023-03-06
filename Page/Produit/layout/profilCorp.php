<?php 

require '../../Controller/ConfigProfil.php';


$utilisateurProfil=$_SESSION['utilisateur'];
$req=$database->query("SELECT *FROM utilisateur WHERE email='$utilisateurProfil' ");

?>



<div class="container">
<?php if($recuperer=$req->fetch() ): ?>
<div class="card">
  <div class="card-header">
    Votre Profil en tant que Client
  </div>
  <form method="post" action="">
  <div class="card-body">
    <img src="../../public/images/<?=$recuperer['image'];  ?>" alt="photo de profil" class="img-thumbnail">
    <h5 class="card-title"><b><?=$recuperer['nomutilisateur']; ?></b></h5>
    <p class="card-text">Biographie:<?=$recuperer['biographie']; ?></p>
    <p class="card-text">Adresse E-mail: <b><?=$recuperer['email']; ?></b></p>
    <p class="card-text">Telephone: <b><?=$recuperer['telephone']; ?></b></p>
    <input type="hidden" name="utilisateur" value="<?=$recuperer['email']; ?>">
    <button type="submit" class="btn btn-primary" name="updateProfil">Ajoute d'autres information</button>
    <button type="submit" class="btn btn-danger " name="demmande">Demande de suppression de compte</button>
    <button type="submit" class="btn btn-success " name="profil">Changer le profil</button>
    <button type="submit" class="btn btn-dark " name="changer">Changer le mot de passe</button>
  </div>
  </form>
</div>
<?php endif; ?>

</div>

<!-- modification de profil -->

<?php if (isset($_POST['updateProfil'])){ 

?>
<hr>
<form method="post" action="">
<input type="hidden" name="user" value="<?=$recuperer['user']; ?>">
<div class="container">
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Formulaire de l'utilisateur</div>

  <div class="card-body">
    <p class="card-text">
      <label>Nom utilisateur</label>
      <input type="texte" name="nomutilisateur" class="form-control" value="<?=$recuperer['nomutilisateur']; ?>">
    </p>
  </div>


  <div class="card-body">
    <p class="card-text">
      <label>E-mail</label>
      <input type="email" name="email" class="form-control" value="<?=$recuperer['email']; ?>">
    </p>
  </div>

  <div class="card-body">
    <p class="card-text">
      <label>Biographie</label>
      <input type="texte" name="biographie" class="form-control" value="<?=$recuperer['biographie']; ?>">
    </p>
  </div>

  <div class="card-body">
    <p class="card-text">
      <label>Telephone</label>
      <input type="number" name="telephone" class="form-control" value="<?=$recuperer['telephone']; ?>">
    </p>
  </div>

  <div class="card-body">
      <input type="submit" name="modifier" class="btn btn-outline-warning btn-lg btn-block" value="Modifier les information">
  </div>
  <div class="card-body">
      <a href="profil.php" class="btn btn-outline-danger btn-lg btn-block">quittez</a>
  </div>

  </div>
</div>
</form>
<?php }else{ ?>
  
<?php } ?>





<!-- demande de suppression -->

<?php if (isset($_POST['demmande'])){ 

?>
<hr>
<form method="post" action="">
<input type="hidden" name="user" value="<?=$recuperer['user']; ?>">
<div class="container">
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Formulaire de demande de suppression de compte</div>

  <div class="card-body">
    <p class="card-text">
      <label>Motif du suppression</label>
      <input type="texte" name="motif" class="form-control">
    </p>
  </div>

  <div class="card-body">
      <input type="submit" name="demander" class="btn btn-outline-danger" value="Envoyer la Demande"><br>
      <a href="profil.php" class="btn btn-outline-success">Annuler la Demande</a>
  </div>

  </div>
</div>
</form>
<?php }else{ ?>
  
<?php } ?>




<!-- changer le mot de passe -->
<?php if (isset($_POST['changer'])){

?>
<hr>
<form method="post" action="">
<input type="hidden" name="user" value="<?=$recuperer['user']; ?>">
<div class="container">
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
  <div class="card-header">Formulaire de changement de formulaire</div>

  <div class="card-body">
    <p class="card-text">
      <label>Mot de passe Ancien</label>
      <input type="password" name="ancien" class="form-control">
    </p>
  </div>
  <div class="card-body">
    <p class="card-text">
      <label>Nouveau Mot de passe</label>
      <input type="password" name="nouveau" class="form-control">
    </p>
  </div>
  <div class="card-body">
    <p class="card-text">
      <label>Retaper le Mot de passe</label>
      <input type="password" name="retaper" class="form-control">
    </p>
  </div>

  <div class="card-body">
      <input type="submit" name="changement" class="btn btn-outline-danger btn-lg btn-block" value="Changer le mot de passe"><br>
      <a href="profil.php" class="btn btn-outline-success btn-lg btn-block">Annuler</a>
  </div>

  </div>
</div>
</form>
<?php }else{ ?>
  
<?php } ?>



<!-- changer de profil -->
<?php if (isset($_POST['profil'])): ?>
  
<hr>

<div class="container">
  <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">

  <div class="card-header">Formulaire de changement de photo de profil</div>

<form method="post" enctype="multipart/form-data">
  <div class="input-group">
  <div>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" aria-describedby="inputGroupFileAddon04" name="fic">
  </div>
  <div class="input-group-append">
    <button class="btn btn-outline-danger btn-sm" type="submit" id="inputGroupFileAddon04">Modifier</button>
  </div>
</div>
</form>

  </div>
</div>
</form>
<?php endif ?>



<?php if ($erreur): ?>
  <div class="container">
    <div class="alert alert-danger" role="alert">
      <?=$erreur  ?>
    </div>
  </div>
<?php endif ?>
<?php if ($success): ?>
  <div class="container">
    <div class="alert alert-success" role="alert">
      <?=$success  ?>
    </div>
  </div>
<?php endif ?>