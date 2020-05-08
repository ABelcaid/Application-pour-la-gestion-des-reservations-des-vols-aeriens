<?php
include('dbconnection.php');
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
                <?php
include('dbconnection.php');
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

	<div class="flex">
	<section class="t">
		<div class="container py-3">
			<div class="card">
				<div class="row ">
                  <div class="form-btn formrecherche">
				  <form method="post" action="recherche"> 
					    <div class="row">
							<h1> Resultats des recerches </h1>
								</div>
								</div>
								</div>
								</div>
						
										 
									
					
		
	</section>
</div>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<table class="table table-striped">
                              <thead>
								<tr>
                                <th> Date départ </th>
                                <th> Ville du départ </th>
                                <th> Ville d'arrivée </th>
                                <th> Nombre de Places </th>
                                <th> Reservation </th>
                                </tr>
                                </thead>
                              <tbody>
   <?php
   $villedepart = $_POST['villedepart'];
   $villearrivee = $_POST['villearrivee'];
   $sql="SELECT * from vols where depart='$villedepart' AND destination='$villearrivee'";   
   $result = mysqli_query($conn,$sql);
   $queryResults= mysqli_num_rows($result);
   if($queryResults > 0){
    while ($data = mysqli_fetch_assoc($result)){
			  echo "<tr> 
			   <td>".$data['date_depart']."</td>
               <td>".$data['depart']."</td>
               <td>".$data['destination']."</td>
               <td>".$data['num_place']."</td>
               <td><a href="reservation.php" class="badge badge-primary p-2">Details</a></td></tr>";
    
	}
} 
?>
   
                              </tbody>
								</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 footer-copyright">
					&copy; 2020 Sky flight All rights reserved

				</div>
			</div>
		</div>
	</footer>
</body>
</html>
		