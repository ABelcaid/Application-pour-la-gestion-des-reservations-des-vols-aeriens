<?php
include 'confirmation-back.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sky flight</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />



</head>

<body>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> -->
                <!-- <a class="navbar-brand" href="index.html">Bootstrap Navbar Menu Template</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="top-navbar-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Planifier</a></li>
                    <li><a href="#">Mes réservations</a></li>
                    <li><a href="#">S’inscrire</a></li>
                    <li><a href="#">Se connecter</a></li>
                    <li><a href="#">Faq</a></li>
                    <!-- <li><a class="btn btn-link-3" href="#">Button</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-3 bg-info p-2 rounded">
                <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $row2['id']; ?></h2>
                <h4 class="text-light">Nom : <?= $row2['nom']; ?> </h4>
                <h4 class="text-light">Prenom : <?= $row2['prenom'] ?> </h4>
                <h4 class="text-light">Age : <?= $row2['age']; ?> </h4>
                <h4 class="text-light">Pays : <?= $row2['pays'] ?> </h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-3 bg-info p-2 rounded">
                <h2 class="bg-light p-2 rounded text-center text-dark">ID : <?= $row1['id']; ?></h2>
                <h4 class="text-light">depart : <?= $row1['depart']; ?> </h4>
                <h4 class="text-light">destination : <?= $row1['destination'] ?> </h4>
                <h4 class="text-light">date depart : <?= $row1['date_depart']; ?> </h4>
                <h4 class="text-light">prix : <?= $row1['prix'] ?> </h4>
            </div>
        </div>
    </div>
    <button  name="submit" class="cherche-btn"><a href="index.php">click me </a></button>



</body>

</html>