<!DOCTYPE html>
<html>
<?php session_start(); if (!$_SESSION['admin'] && !$_SESSION['type']) { header("location: ../index.php");}?>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Computer Shop</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="../public/css/style2.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../public/css/responsive2.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.php">
            <img src="../public/images/logo.png" alt="" /><span>
              Computer Shop
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ajoutProduit.php">Ajouter un produit</a>
                </li>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0" method="post">
                 <div><input type="texte" name="produitTaper" class="form-control" placeholder="Recherche..."></div>
                <div class="btn btn-success btn-sm"><button class="btn  my-2 my-sm-0 nav_search-btn" type="submit" name="recherche"></button></div>
              </form>
                <li class="nav-item">
                    <a href="../Session/deconnecter.php" class="text-uppercase custom_orange-btn mr-3">
                      Deconnexion
                  </a>
                </li>
                
              </ul>
              
            </div>
          </div>
        </nav>
      </div>
    </header>