<?php
$conx = new PDO("mysql:host=localhost;dbname=exelib", "root", "");

$id = $_POST['id'];
$r = "DELETE FROM `exercice` WHERE id = '$id' ";

if ($conx->query($r))
    echo "done !";
else
    echo "erreur !";
?>