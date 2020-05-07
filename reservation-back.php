<?php
include('dbconnection.php');


if(isset($_GET['ivd'])){
    $id= $_GET['ivd'];
    $query = "SELECT * FROM vlos WHERE id =?";
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




if(isset($_POST['add'])){

$volid = 1;
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$pays = $_POST['pays'];
$adresse = $_POST['adresse'];
$tele = $_POST['tele'];
$email = $_POST['email'];
$passeport = $_POST['passeport'];

$stmt = $conn->prepare("INSERT Into passager (vol_id, nom, prenom, age, pays, adresse, tele, email, num_passport) values(?,?,?,?,?,?,?,?,?)");

$stmt->bind_param("ississisi",$volid, $nom, $prenom, $age, $pays, $adresse, $tele, $email, $passeport);
$stmt->execute();

header('location:reservation.php');
// echo "your message has been sent successfully";
$stmt->close();
$conn->close();

}









?>