<?php 

$type = $_POST['type'];
$size = $_POST['size'];
$prix = $_POST['prix'];

require 'connexion.php';
 $requete ="INSERT INTO shoes(type,size,prix) VALUES
 ('$type','$size','$prix') ";

$query =mysqli_query($con,$requete);
if (isset($query)){
    echo "<h1> good</h1>";
} else {
    echo "<h1> not good</h1>";
}

?>