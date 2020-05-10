
<?php
include('dbconnection.php');

// date_default_timezone_set('Africa/Casablanca');
// $date = date('m/d/Y h:i:s a', time());

if (isset($_GET['id'])) {
    
    $id=$_GET['id'];
    // global $id ;
    // $id = $_GET['id'];
    // $GLOBALS['id'] = $_GET['id'];

    $query= "SELECT * FROM vols WHERE id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $result= $stmt->get_result();
    $row = $result->fetch_assoc();

    
    $vol_id = $row['id'];
    $vol_depart = $row['depart'];
    $vol_destination = $row['destination'];
    $vol_date = $row['date_depart'];
    $vol_place = $row['num_place'];
    $vol_prix = $row['prix'];


    # code...
}





if(isset($_POST['add'])){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$pays = $_POST['pays'];
$adresse = $_POST['adresse'];
$tele = $_POST['tele'];
$email = $_POST['email'];
$passeport = $_POST['passeport'];

$stmt = $conn->prepare("INSERT Into passager (nom, prenom, age, pays, adresse, tele, email, num_passport) values(?,?,?,?,?,?,?,?)");

$stmt->bind_param("ssissisi", $nom, $prenom, $age, $pays, $adresse, $tele, $email, $passeport);
$stmt->execute();

// $latest_id = $conn->lastInsertId();

// header('location:reservation.php');
// echo "your message has been sent successfully";

// 
$stmt->close();

// $conn->close();

// $iid= var_dump($GLOBALS['id']);


$date = date('Y-m-d H:i:s');
$latest_id =  mysqli_insert_id($conn);
$stmt = $conn->prepare("INSERT Into reservation (vol_id,passager_id,date_reservation) values(?,?,?)");
$stmt->bind_param("iis",$id,$latest_id,$date);
$stmt->execute();

echo $latest_id;
// echo $GLOBALS['vol_id'];
// echo $id;
$stmt->close();


}






?>