<?php 

 require '../Controller/ConfigMotdepasseOublie.php'; 

?>

<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mot de passe oublié</title>

    <link href="../../Public/css/bootstrap4.css" rel="stylesheet">

</head>

<body>

    <div class="container">
<hr>
        <div class="text-center">
          <img src="../../public/images/logo.png" class="rounded" alt="...">
        </div>
<hr>
        <div class="card">
          <div class="card-body">
            <b>Formulaire de Reinitialisation de Mot de Passe</b>
          </div>
        </div>
<hr>
        <div class="card">
          <div class="card-body">

            <form method="post" action="">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Numero de Telephone</label>
                <input type="number" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary " name="reinitialise">Reinitialiser le mot de passe</button>
              <a href="index.php" class="btn btn-danger " name="reinitialise">Retour au Login</a>
            </form>

          </div>
        </div><hr>
        <div class="text-center">
          <img src="../../public/images/logo.png" class="rounded" alt="...">
        </div><hr>
    </div>
</body>
</html>