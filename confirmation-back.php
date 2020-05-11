<?php
include('dbconnection.php');


  
$query= "SELECT *  FROM reservation ORDER BY id DESC LIMIT 1";
$stmt =$conn->prepare($query);
$stmt->execute();
$result= $stmt->get_result();
$roow = $result->fetch_assoc();






$query= "SELECT * FROM vols WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i",$roow['vol_id']);
$stmt->execute();
$result= $stmt->get_result();
$row1 = $result->fetch_assoc();

// echo $row1['depart'];


$query= "SELECT * FROM passager WHERE id=?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i",$roow['passager_id']);
$stmt->execute();
$result= $stmt->get_result();
$row2 = $result->fetch_assoc();


// echo $row2['nom'];








?>

