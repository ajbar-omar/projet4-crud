<?php


 $con = new PDO("mysql:host=localhost;dbname=crud_nike", "root", "curvaloca");
 $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// if (!$con) {
//     die("Connection failed: " . mysqli_connect_error());
//   }
//   echo "Connected successfully";

// try {
// $con = new PDO("mysql:host=localhost;dbname=crud_nike", "root", "curvaloca");


// $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// echo "Connected successfully";
// // } catch(PDOException $e) {
// //   echo "Connection failed: " . $e->getMessage();
// // }
