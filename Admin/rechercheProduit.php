<?php if (isset($_POST['recherche'])) {
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
    pas de resultat
</div>
<?php endif; ?>





<?php }else{ ?>