
<?php

require '../../Controller/produit.php';

if (isset($_POST['faire'])) {
   require 'action.php';
}

if (isset($_POST['produitrecherche'])) {
  $donne=htmlspecialchars($_POST['cherche']);

  $quette=$database->query("SELECT *FROM produit WHERE designation='$donne' ");
  $success=null;

?>

<?php if($nbr=$quette->rowCount()>0): $success="recherche sans probleme"; ?>
  <section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Listes des ordinateurs par la recherche</h2>
      <p class="custom_heading-text">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have
      </p><hr>

      <?php while($recuperer=$quette->fetch() ){ ?>
      
 
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">

            <form method="post" action="">

            <input type="hidden" name="reference" value="<?=$recuperer['reference']; ?>">
            <h4>
              <?=$recuperer['designation']; ?>
            </h4>
            <p class="mt-4 mb-5">
              <?=$recuperer['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix: <?=$recuperer['prix'];  ?> Ar
            </p>
            <div>
              <button type="submit" class="custom_dark-btn" name="faire">
                Faire l'Achat
              </button>

              <button type="submit" class="custom_dark-btn" name="panier">
                Mettre au panier
              </button>

            </form>

            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../../public/images/<?=$recuperer['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div>
      <hr>
      <?php  } ?>
    </div>
  </section>
  <?php else: ?>
    <div class="container">
      <div class="alert alert-warning" role="alert">
        Pas de resultat a afficher avec designation
      </div>
    </div>
  
<?php endif; ?>

<?php } ?>





<?php if (isset($_POST['produitrecherche'])) {
  $donne=htmlspecialchars($_POST['cherche']);

  $quette=$database->query("SELECT *FROM produit WHERE reference='$donne' ");
  $success=null;

?>

<?php if($nbr=$quette->rowCount()>0): $success="recherche sans probleme"; ?>
  <section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Listes des ordinateurs par la recherche</h2>
      <p class="custom_heading-text">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have
      </p><hr>

      <?php while($recuperer=$quette->fetch() ){ ?>
      
 
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">

            <form method="post" action="">

            <input type="hidden" name="reference" value="<?=$recuperer['reference']; ?>">
            <h4>
              <?=$recuperer['designation']; ?>
            </h4>
            <p class="mt-4 mb-5">
              <?=$recuperer['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix: <?=$recuperer['prix'];  ?> Ar
            </p>
            <div>
              <button type="submit" class="custom_dark-btn" name="faire">
                Faire l'Achat
              </button>

              <button type="submit" class="custom_dark-btn" name="panier">
                Mettre au panier
              </button>

            </form>

            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../../public/images/<?=$recuperer['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div>
      <hr>
      <?php  } ?>
    </div>
  </section>
  <?php else: ?>
    <div class="container">
      <div class="alert alert-warning" role="alert">
        Pas de resultat a afficher avec reference
      </div>
    </div>
  
<?php endif; ?>


<?php } ?>




<hr>
<div class="container">Effectuez votre recherche en tapant le designation du produit ou le reference  ...</div>