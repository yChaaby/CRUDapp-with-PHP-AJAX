<?php
class Connexion {
    protected $conn;
    public function __construct(){
        $username = "root";
        $password = "";
        $host = "lost";
        $database = "Voiture";
        $this->conn=mysqli_connect($host, $database, $username, $password);
    }
    public function runQuery(string $rq){
        mysqli_query($this->conn,$rq);
    }
}
class CRUD{
    protected $conn;

    public function __construct(){
        $username = "root";
        $password = "";
        $host = "lost";
        $database = "Voiture";
        $this->conn=mysqli_connect($host, $database, $username, $password);
    }
    public function ajouter($id,$modele,$carburant){
        $qry="insert into Modele values ('$id','$modele','$carburant')";
        echo "insert into Modele values ('$id','$modele','$carburant')";
        $this->runQuery($qry);
    }
    public function supprimer($id){
        $qry = "delete from Modele where id='$id'";
        $this->runQuery($qry);
    }
    public function Modifier($id,$newModele,$newCarburant){
        $qry = "update Modele set modele='$newModele',carburant='$newCarburant' ";
        $this->runQuery($qry);
    }
    public function Selection($condition){
        // si la condtion = 1 il va afficher tous les lignes -->
        $qry = "select * from where $condition";
        $this->runQuery($qry);
    }
    public function runQuery(string $rq){
        mysqli_query($this->conn,$rq);
    }
    
}
?>