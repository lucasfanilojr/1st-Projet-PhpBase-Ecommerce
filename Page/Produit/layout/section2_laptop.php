
<?php 

require '../../Controller/produit.php';

$quette=$database->query("SELECT *FROM produit WHERE type='portable' ");

if (isset($_POST['faire'])) {
  require 'action.php';
}

?>
  <section class="fruit_section">
    <div class="container"><hr>
      <h2 class="custom_heading">Listes des ordinateurs Portable</h2>
      <p class="custom_heading-text">
        There are many variations of passages of Lorem Ipsum available, but
        the majority have
      </p><hr>

      <?php while($recuperer=$quette->fetch() ){ ?>
      <form method="post">
      <input type="hidden" name="reference" value="<?=$recuperer['reference']; ?>">
      <div class="row layout_padding2">
        <div class="col-md-8">
          <div class="fruit_detail-box">
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
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <div class="fruit_img-box d-flex justify-content-center align-items-center">
            <img src="../../public/images/<?=$recuperer['image']; ?>" alt="" class="" width="250px" />
          </div>
        </div>
      </div>
      </form><hr>
      <?php  } ?>
      <?php if ($quette->rowCount()>0): ?>
        <h3 style="color: red;">Ce sont les ordinateur disponible</h3>
      <?php else: ?>
        <h3 style="color: red;">Les Ordinateur Sont Indisponible Pour Le Moment</h3>
      <?php endif; ?>
    </div>
  </section>

