<?php


require 'connexion.php';
 $id=$_GET['id'];
$requete="DELETE FROM shoes where id='$id'";
$stmt = $con->prepare($requete);
if($stmt->execute()){
  header("location:affichage.php");
}

?>