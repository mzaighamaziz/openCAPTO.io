<?php
$database_host = "localhost";
$username = "root";
$password = "";
$database_name = "godady1";


$con=mysqli_connect($database_host, $username, $password, $database_name)
or die("Error connecting to database: " .
mysqli_connect_error() . "");

//echo "Connected to MySQL!";

mysqli_select_db($con, $database_name)
or die("Error selecting the database satellite_Data: " .
mysqli_error() . "");

//echo "Connected to MySQL, using database satellite_Data.";
?>