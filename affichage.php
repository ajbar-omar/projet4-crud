<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="index.css">
<head>
    <title>Document</title>
</head>

<body>
    <h1> DATA</h1>
    <table >
    <th>type</th>
<th>size</th>
<th>price</th>
        <?php

        $con = new PDO("mysql:host=localhost;dbname=crud_nike", "root", "curvaloca");
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $requete = "SELECT * from shoes";
        // $query=mysqli_query($con,$requete);
        $stmt = $con->prepare($requete);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($results); $i++) {


            echo "<tr>";
            echo "<td>" . $results[$i]['type'] . "</td>";
            echo "<td>" . $results[$i]['size'] . "</td>";
            echo "<td>" . $results[$i]['prix'] . "</td>";

            echo "<td><a href='delete.php?id=".$results[$i]['id']."'>Supprimer</a></td>";
            echo "</tr>";
        }


        ?>
    </table>
</body>

</html>