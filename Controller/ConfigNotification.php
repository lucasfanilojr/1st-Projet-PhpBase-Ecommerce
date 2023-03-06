<?php 

require '../Model/ModelNotification.php';

$notification=new Notification();
$notification->supprimerTout();
header('location: index.php');

?>