
<?php
$conn = new PDO("mysql:host=localhost;dbname=exelib", "root", "");

$Titre = $_POST['Titre'];
$Auteur = $_POST['Auteur'];
$date = $_POST['date'];



$qry = "insert into exercice values ( null ,'$Titre' , '$Auteur', '$date' )";

if ($conn->query($qry))
    echo "done !";
else
    echo "erreur !";


?>