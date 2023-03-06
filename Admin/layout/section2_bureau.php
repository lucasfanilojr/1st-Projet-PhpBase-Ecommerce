
<?php 

require '../Database/Connection.php';
require '../Controller/ConfigProduit.php';

$success=null;

$quette=$database->query("SELECT *FROM produit ");

if (isset($_POST['recherche'])) {
  $rechercheTaper=htmlspecialchars($_POST['produitTaper']);

  $req=$database->query("SELECT *FROM produit WHERE designation='$rechercheTaper' ");

?>
<?php if($recuperer=$req->rowCount()==1 ): ?>
<section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Resultat de recherche</h2>
      <hr>

      <?php if($recuperer=$req->fetch() ): ?>
      <form method="post" action=""> 
        <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <input type="hidden" name="reference" value="<?=$recuperer['reference']; ?>">
            <h3>
              <?=$recuperer['designation']; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?=$recuperer['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Type: <?=$recuperer['type'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix unitaire: <?=$recuperer['prix'];  ?> Ar
            </p>
            <div>
              <button type="submit" class="custom_dark-btn" name="modifierproduit">
                Modifier
              </button>

              <button type="submit" class="text-uppercase custom_orange-btn mr-3" name="supprimerproduit">
                Supprimer
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../public/images/<?=$recuperer['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div><hr>
      </form>
      <?php  endif; ?>
    </div>
</section>
<?php elseif($recuperer=$req->rowCount()>1): ?>
  <section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Resultat de recherche</h2>
      <hr>

      <?php while($recuperer=$req->fetch() ){ ?>
      <form method="post" action=""> 
        <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <input type="hidden" name="reference" value="<?=$recuperer['reference']; ?>">
            <h3>
              <?=$recuperer['designation']; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?=$recuperer['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Type: <?=$recuperer['type'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix unitaire: <?=$recuperer['prix'];  ?> Ar
            </p>
            <div>
              <button type="submit" class="custom_dark-btn" name="modifierproduit">
                Modifier
              </button>

              <button type="submit" class="text-uppercase custom_orange-btn mr-3" name="supprimerproduit">
                Supprimer
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../public/images/<?=$recuperer['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div><hr>
      </form>
      <?php  } ?>
    </div>
</section>
<?php else: ?>
  <div class="alert alert-danger" role="alert">
    La resultat de votre recherche par designation est vide
</div>
<?php endif; ?>





<?php }else{ ?>
  <section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Listes des ordinateurs</h2>
      <hr>

      <?php while($recuperer=$quette->fetch() ){ ?>
      <form method="post" action=""> 
        <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <input type="hidden" name="reference" value="<?=$recuperer['reference']; ?>">
            <h3>
              <?=$recuperer['designation']; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?=$recuperer['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Type: <?=$recuperer['type'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix unitaire: <?=$recuperer['prix'];  ?> Ar
            </p>
            <div>
              <button type="submit" class="custom_dark-btn" name="modifierproduit">
                Modifier
              </button>

              <button type="submit" class="text-uppercase custom_orange-btn mr-3" name="supprimerproduit">
                Supprimer
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../public/images/<?=$recuperer['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div><hr>
      </form>

      <?php  } ?>
      <?php if ($quette->rowCount()>0): ?>
        <h3 style="color: red;text-align: center;">Ce sont les ordinateur disponible</h3>
      <?php else: ?>
        <h3 style="color: red;">Les Ordinateur Sont Indisponible Pour Le Moment</h3>
      <?php endif; ?>
    </div>
  </section>
  <?php } ?>



<?php 


if (isset($_POST['recherche'])) {
  $rechercheTaper=htmlspecialchars($_POST['produitTaper']);

  $req=$database->query("SELECT *FROM produit WHERE reference='$rechercheTaper' ");

?>
<?php if($recuperer=$req->rowCount()==1 ): ?>
<section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Resultat de recherche</h2>
      <hr>

      <?php if($recuperer=$req->fetch() ): ?>
      <form method="post" action=""> 
        <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <input type="hidden" name="reference" value="<?=$recuperer['reference']; ?>">
            <h3>
              <?=$recuperer['designation']; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?=$recuperer['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Type: <?=$recuperer['type'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix unitaire: <?=$recuperer['prix'];  ?> Ar
            </p>
            <div>
              <button type="submit" class="custom_dark-btn" name="modifierproduit">
                Modifier
              </button>

              <button type="submit" class="text-uppercase custom_orange-btn mr-3" name="supprimerproduit">
                Supprimer
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../public/images/<?=$recuperer['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div><hr>
      </form>
      <?php  endif; ?>
    </div>
</section>
<?php elseif($recuperer=$req->rowCount()>1): ?>
  <section class="fruit_section">
    <div class="container">
      <hr>
      <h2 class="custom_heading">Resultat de recherche</h2>
      <hr>

      <?php while($recuperer=$req->fetch() ){ ?>
      <form method="post" action=""> 
        <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <input type="hidden" name="reference" value="<?=$recuperer['reference']; ?>">
            <h3>
              <?=$recuperer['designation']; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?=$recuperer['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Type: <?=$recuperer['type'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix unitaire: <?=$recuperer['prix'];  ?> Ar
            </p>
            <div>
              <button type="submit" class="custom_dark-btn" name="modifierproduit">
                Modifier
              </button>

              <button type="submit" class="text-uppercase custom_orange-btn mr-3" name="supprimerproduit">
                Supprimer
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../public/images/<?=$recuperer['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div><hr>
      </form>
      <?php  } ?>
    </div>
</section>
<?php else: ?>
  <div class="alert alert-danger" role="alert">
    La resultat de votre recherche par reference est vide
</div>
<?php endif; ?>





<?php }else{ ?>
  <section class="fruit_section">
    <div class="container">
      <hr>

      <?php while($recuperer=$quette->fetch() ){ ?>
      <form method="post" action=""> 
        <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
            <input type="hidden" name="reference" value="<?=$recuperer['reference']; ?>">
            <h3>
              <?=$recuperer['designation']; ?>
            </h3>
            <p class="mt-4 mb-5">
              <?=$recuperer['description'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Type: <?=$recuperer['type'];  ?>
            </p>
            <p class="mt-4 mb-5">
              Prix unitaire: <?=$recuperer['prix'];  ?> Ar
            </p>
            <div>
              <button type="submit" class="custom_dark-btn" name="modifierproduit">
                Modifier
              </button>

              <button type="submit" class="text-uppercase custom_orange-btn mr-3" name="supprimerproduit">
                Supprimer
              </button>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../public/images/<?=$recuperer['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div><hr>
      </form>

      <?php  } ?>
    </div>
  </section>
  <?php } ?>