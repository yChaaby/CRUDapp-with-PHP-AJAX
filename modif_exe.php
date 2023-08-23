<?php

$conn = new PDO("mysql:host=localhost;dbname=exelib", "root", "");

$id = $_POST['id'];
$Titre = $_POST['Titre'];
$Auteur = $_POST['Auteur'];
$date = $_POST['date'];

$qry = "update exercice set titre = '$Titre' , auteur = '$Auteur' , date = '$date' where id = $id";

if ($conn->query($qry))
    echo "done !";
else
    echo "erreur !";


?>