<?php
include('dbconnection.php');


// if(isset($_GET['pid'])){
//     $id= $_GET['pid'];

    
$query= "SELECT *  FROM passager ORDER BY id DESC LIMIT 1";
$stmt =$conn->prepare($query);
$stmt->execute();
$result= $stmt->get_result();
$roow = $result->fetch_assoc();
$stmt->close();

$query= "SELECT *  FROM tmp ORDER BY id DESC LIMIT 1";
$stmt =$conn->prepare($query);
$stmt->execute();
$result1= $stmt->get_result();
$roowtmp = $result1->fetch_assoc();


// echo $roow['id'];
 $date = date('Y-m-d H:i:s');
$stmt = $conn->prepare("INSERT Into reservation (vol_id,passager_id,date_reservation) values(?,?,?)");
$stmt->bind_param("iis",$roowtmp['id'],$roow['id'],$date);
$stmt->execute();
$stmt->close();



$query= "SELECT * FROM vols WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i",$roowtmp['id']);
$stmt->execute();
$result= $stmt->get_result();
$row1 = $result->fetch_assoc();

// echo $row1['depart'];


$query= "SELECT * FROM passager WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i",$roow['id']);
$stmt->execute();
$result= $stmt->get_result();
$row2 = $result->fetch_assoc();


// echo $row2['nom'];

    
// }





?>

