<?php
$conx = new PDO("mysql:host=localhost;dbname=exelib", "root", "");

$id = $_POST['id'];
$r = $conx->prepare('DELETE FROM exercice WHERE id = :id ');
$r->bindParam(':id', $id, PDO::PARAM_STR);
if ($r->execute())
    echo "done !";
else
    echo "erreur !";
?>