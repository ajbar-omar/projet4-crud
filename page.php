<?php

$type = $_POST['type'];
$size = $_POST['size'];
$prix = $_POST['prix'];
$con = new PDO("mysql:host=localhost;dbname=crud_nike", "root", "curvaloca");


$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";


$query = "INSERT INTO shoes (type, size, prix)
VALUES (:type,:size,:prix)";

$stmt = $con->prepare($query);
$stmt->bindValue(':type', $type);
$stmt->bindValue(':size', $size);
$stmt->bindValue(':prix', $prix);
$stmt->execute();












?>











