                        <div class="col-lg-6">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Formulaire d'insertion de produit</h6>
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


                                    <?php require 'image.php'; ?>
                                    <form method="post" enctype="multipart/form-data">
                                    <div class="input-group">
                                      <div class="custom-file">
                                        <input type="file" class="form-control-file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="fic">
                                      </div>
                                      <?php if (!$successImage): ?>
                                      <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04" name="insererImage">Inserer l'image</button>
                                      </div>
                                     <?php else: ?>
                                        <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button" id="inputGroupFileAddon04" name="insererImage">Image Deja Inserer</button>
                                      </div>
                                    <?php endif; ?>
                                    </div>
                                    </form>

                                    <form method="post" action="">
                                      <div class="form-group">
                                        <label for="exampleInputEmail1">Designation du produit</label>
                                        <input type="texte" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="designation">
                                        
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Description</label>
                                        <input type="texte" class="form-control" id="exampleInputPassword1" name="description">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Prix Unitaire</label>
                                        <input type="texte" class="form-control" id="exampleInputPassword1" name="prix">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputPassword1">Categorie du produit</label>
                                        <select class="form-control" name="type">
                                          <option>bureau</option>
                                          <option>portable</option>
                                          <option>gammeur</option>
                                        </select>
                                      </div>


                                      <button type="submit" class="btn btn-success btn-icon-split" name="inserer">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">-INSERER LE PRODUIT </span>
                                    </button>

                                    <div class="my-2"></div>
                                    <a  href="produit.php" class="btn btn-danger btn-icon-split" name="annuler">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">RETOUR AU PRODUIT</span>
                                    </a>
                                    <div></div>

                                    </form>
                                    
                                    
                                </div>
                            </div>

                        </div>