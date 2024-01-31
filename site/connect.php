<?php
session_start();
// Database configuratie
$host  = "mariadb";
$dbuser = "root";   
$dbpass = "password";
$dbname = "receptenboek";

// database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

?>