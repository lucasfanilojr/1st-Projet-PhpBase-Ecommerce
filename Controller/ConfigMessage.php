<?php 

require '../Model/ModelMessage.php';

$message=new Message();
$message->supprimerTout();
header('location: index.php');

?>