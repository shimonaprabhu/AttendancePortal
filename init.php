<!DOCTYPE html>
<html>
<head>
  <title>Attendance Portal</title>
  <link href="Images/favicon.png" rel="icon" type="image/jpg" />
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<?php
	$dbhost = 'localhost';
	$dbname='attendance_db';
	$dbuser = 'root';
	$dbpass = 'root123';
	$sql = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
?>
<body id="background">
<nav class="navbar sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="project.php">Attendance Portal</a>
</nav>