<?php

$host = "localhost";
$user = "u680557347_isabelle_user";
$password = "Abc12345";
$db = "u680557347_anime_db";

$mysqli = new mysqli($host, $user, $password, $db);

if ($mysqli->connect_errno){
	echo $mysqli->connect_error;
	exit();
}

?>

<!DOCTYPE html>
<html lang = "en">
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style1.css">

	<title>Home</title>

</head>
	<body>

		<nav class="navbar navbar-expand-md navbar-light">
		  <a class="navbar-brand" href="home.php">Anime Aesthetic</a>
		</nav>

		<div id = "header">
			<h2 style = "font-size: 50px">Anime Aesthetic</h2>
			<h3 style = "font-size: 40px">Find new color inspiration.</h3>
		</div>


		<div id = "search">
			<section class="mb-4">
			    <h4 style = "font-size: 45px">Select an anime</h4>
			            <form id="search-form" name="search-form" action = "images.php" method = "POST" >
			                <div class="row">
			                            <select style = "font-size: 30px" name="anime_id" id="anime" class="form-control">
										<?php
											$sql = "SELECT * FROM animes;";

											$results = $mysqli->query($sql);

											if (!$results){
												echo $mysqli->error;
												exit();
											}

											while ($row = $results->fetch_assoc()){
												echo "<option style = \"font-size: 35px\" value = ". $row["id"] . ">". $row["name"]. "</option>";
											}

										?>

									</select>
			                    </div>
			                     <div class="row">
			                            <input  style = "font-size: 25px;" type="submit" class="form-control">
			                    </div>

			                
			            </form>
			</section>
		</div>

		<div style = "padding: 10%;"></div>

		<footer class="page-footer font-small">
		  <div class="footer-copyright text-center py-3">© 2020 Anime Aesthetic</div>
		</footer>
			

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		<script src = "main.js"></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>

	</body>
</html>
