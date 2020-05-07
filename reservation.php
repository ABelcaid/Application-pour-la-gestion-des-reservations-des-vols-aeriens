<?php
include 'reservation-back.php';

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
					<div class="col-md-4">
						<img class="plane" src="img/580b585b2edbce24c47b2d14.png" class="w-100">
					</div>
					<div class="col-md-8 px-3">
						<div class="card-block px-3">
							<h4 class="card-title">Lorem ipsum dolor sit amet</h4>
							<p class="card-text">Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
								et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
								laboris nisi ut aliquip ex ea commodo consequat. </p>
							<p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
								dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
							<a href="#" class="btn btn-primary">Annuler le vol</a>
						</div>
					</div>

				</div>
			</div>
		</div>
		</div>
	</section>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-1">
						<div class="booking-form">
							<form action="reservation-back.php" method="POST">
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Nom</span>
											<input class="form-control" name="nom" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Prenom</span>
											<input class="form-control" name="prenom" type="text">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Age</span>
											<input class="form-control" name="age" type="number" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">ID</span>
											<input class="form-control" name="id" type="number" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Pays </span>
											<input class="form-control" name="pays" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Adresse </span>
											<input class="form-control" name="adresse" type="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Numéro de telephone </span>
											<input class="form-control" name="tele" type="number">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Email </span>
											<input class="form-control" name="email" type="email">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<span class="form-label">Numéro de passeport </span>
											<input class="form-control" name="passeport" type="number">
										</div>
									</div>
								</div>
								<div class="form-btn">

								<?php
								$query= "SELECT * FROM passager";
								$stmt =$conn->prepare($query);
								$stmt->execute();
								$result= $stmt->get_result();
								$row = $result->fetch_assoc();

								?>
									
									<button type="submit" name="add" class="submit-btn">
										 <a style="color: #fff;;text-decoration: none;" class="abtn" href="confirmation.php?id=<?= $row['id'] ;?>">Réservation complète</a>
									</button>

							


								</div>
							</form>
						</div>
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