<?php require 'layout/header.php' ?>

<?php require 'layout/navigation.php'; ?>
<?php require '../Controller/admin.php'; $req=$database->query("SELECT *FROM utilisateur"); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Les utilisateurs</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Triage</h6>
                        </div>
                        <div class="card-body">

                                <table class="table">
                                  <thead class="thead-dark">
                                    <tr>
                                      <th scope="col">id</th>
                                      <th scope="col">nom</th>
                                      <th scope="col">email</th>
                                      <th scope="col">telephone</th>
                                      <th scope="col">biographie</th>
                                      <th scope="col">action</th>
                                    </tr>
                                  </thead>
                                  <?php require '../Controller/ConfigUtilisateur.php'; ?>
                                  <?php while($user=$req->fetch() ){ ?>
                                  <form method="post" action="actionUser.php">
                                    <input type="hidden" name="users" value="<?=$user['user'];  ?>">
                                  <tbody>
                                    <tr>
                                            
                                        <th scope="col"><?=$user['id'];  ?></th>
                                        <th scope="col"><?=$user['nomutilisateur'];  ?></th>
                                        <th scope="col"><?=$user['email'];  ?></th>
                                        <th scope="col"><?=$user['telephone'];  ?></th>
                                        <th scope="col"><?=$user['biographie'];  ?></th>
                                        <th scope="col">
                                        <button type="submit" name="suppr" class="" >Bannir</button>
                                       </th>
                                    </tr>
                                 </form>
                                     <?php } ?>
                                  </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                                        <?php if ($req->rowCount()>0): ?>
                                            <h3 style="color: black;"></h3>
                                        <?php else: ?>
                                            <div class="container">
                                                <div class="alert alert-danger" role="alert">
                                                   <h3 style="color: red;text-align: center;">Pas d'utilisateur pour le moment</h3>
                                                </div>
                                            </div>
                                            
                                        <?php endif; ?>
                <!-- /.container-fluid -->
            <!-- End of Main Content -->

    <!-- End of Page Wrapper -->
<?php require 'layout/footerU.php'; ?>