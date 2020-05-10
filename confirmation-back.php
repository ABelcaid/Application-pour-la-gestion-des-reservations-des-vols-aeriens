<?php
session_start();
include 'dbconnection.php';

$id = "";
$name = "";
$email = "";
$phone = "";
$photo = "";





if (isset($_GET['details'])) {
    $id = $_GET['details'];
    $query = "SELECT * From vols WHERE id =?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $vid = $row['id'];
    $vdepart = $row['depart'];
    $vdestination = $row['destination'];
    $vdate_depart = $row['date_depart'];
    $vprix = $row['prix'];
}



?>