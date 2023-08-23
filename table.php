<?php 

$conn = new PDO("mysql:host=localhost;dbname=exelib", "root", "");
$res = $conn->prepare("SELECT * FROM exercice WHERE 1");
$res->execute();
?>
<table>
    <thead>
        <td id="theid">ID</td>
        <td>Titre</td>
        <td>Auteur</td>
        <td>Date</td>
        <td colspan="2">Action</td>
    </thead>
    <?php
    while($ligne =$res -> fetch(PDO::FETCH_ASSOC)){
    ?>
    <link rel="stylesheet" href="style.css">
    <tr>
        <td><?php echo $ligne['id'] ?></td>
        <td><?php echo $ligne['titre'] ?></td>
        <td><?php echo $ligne['auteur'] ?></td>
        <td><?php echo $ligne['date'] ?></td>
        <td  ><a id="modify" value=<?php echo $ligne['id'] ?> onclick = "modify(event)" >Modifier</a></td>
        <td  ><a id="delete" value=<?php echo $ligne['id'] ?> onclick = "del(event)">Supprimer</a></td>
    </tr>
    <?php } ?>
</table>q