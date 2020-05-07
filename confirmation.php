<?php
include('dbconnection.php');


if(isset($_GET['id'])){
    $id= $_GET['id'];
    $query = "SELECT * FROM passager WHERE id =?";
    $stmt = $conn ->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result= $stmt->get_result();
    $row = $result->fetch_assoc();
    

    $volid =$row['id'];
    $nom = $row['nom'];
    $prenom = $row['prenom'];
    $age = $row['age'];
    $pays = $row['pays'];
    $adresse = $row['adresse'];
    $tele = $row['tele'];
    $email = $row['email'];
    $passeport = $row['num_passport'];

    echo $nom;

}




echo "dsdsdsdsd";

?>