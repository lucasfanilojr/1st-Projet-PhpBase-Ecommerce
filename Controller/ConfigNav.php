<?php 

$notif=$database->query("SELECT *FROM notification "); 
$mess=$database->query( "SELECT *FROM contact ");
$user=$database->query("SELECT *FROM utilisateur ");
$produit=$database->query("SELECT *FROM produit ");
$attente=$database->query("SELECT *FROM attente");
$achat=$database->query("SELECT *FROM achat");

?>