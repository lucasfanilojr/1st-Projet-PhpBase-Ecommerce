                        <?php
                            require '../Database/Connection.php';
                            $reference=htmlspecialchars($_SESSION['produit']);
                            $req=$database->query("SELECT *FROM produit WHERE reference='$reference'  ");

                        ?>
                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Formulaire De modification de produit</h6>
                                </div>

                                <div class="card-body">
                                    <?php if($erreur): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?=$erreur ?>
                                    </div>
                                    <?php endif; ?>

                                    <?php if($success): ?>
                                    <div class="alert alert-success" role="alert">
                                        <?=$success ?>
                                    </div>
                                    <?php endif; ?>

                                    <?php require 'imageModif.php'; ?>
                                    <form method="post" enctype="multipart/form-data">
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="form-control-file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="fic">
                                      </div>
                                      <?php if (!$successImageModif): ?>
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04" name="modifierImage">Inserer l'image</button>
                                      </div>
                                     <?php else: ?>
                                        <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button" id="inputGroupFileAddon04" name="modifierImage">Image Deja Inserer</button>
                                      </div>
                                    <?php endif; ?>
                                    </div>
                                    </form>


                                    <form method="post" action="">
                                    <?php if ($produit=$req->fetch() ): ?>
                                    <div class="form-group">
                                        <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="reference" value="<?=$produit['reference'];  ?>">
                                        
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Designation</label>
                                        <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="designation" value="<?=$produit['designation'];  ?>">
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <input type="texte" class="form-control" id="exampleInputPassword1" name="description" value="<?=$produit['description'];  ?>">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Prix Unitaire</label>
                                        <input type="texte" class="form-control" id="exampleInputPassword1" name="prix" value="<?=$produit['prix'];  ?>">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Categorie du produit</label>
                                        <select class="form-control" name="type">
                                          <option>bureau</option>
                                          <option>portable</option>
                                          <option>gammeur</option>
                                        </select>
                                      </div>
                                    <?php endif; ?>
                                      <button type="submit" class="btn btn-success btn-icon-split" name="modifier">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">MODIFIER LE PRODUIT </span>
                                    </button>

                                    <div class="my-2"></div>
                                    <a  href="produit.php" class="btn btn-danger btn-icon-split" name="annuler">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">_RETOUR AU PRODUIT</span>
                                    </a>
                                    <div></div><br>
                                    

                                    </form>
                                    
                                    
                                </div>
                            </div>

                        </div>