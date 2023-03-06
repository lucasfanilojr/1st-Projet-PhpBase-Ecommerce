<?php 

$reference=$_SESSION['ReferenceProduitCommande'];
$quette=$database->query("SELECT *FROM produit WHERE reference='$reference' ");

$utilisateur=$_SESSION['utilisateur'];
$user=$database->query("SELECT *FROM utilisateur WHERE email='$utilisateur' ");

?>