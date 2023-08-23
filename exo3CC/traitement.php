<?php
include("def.php");
// valeur a insereeweiohc
$id = $_POST['id'];
$carburant = $_POST['carburant'];
$modele = $_POST['modele'];

$test = new CRUD;
$test->ajouter($id, $modele, $carburant);


?>