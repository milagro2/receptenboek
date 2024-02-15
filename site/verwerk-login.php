<?php
session_start();

include 'database.php';

$email = $_POST['LoginEmail'];
$password = $_POST['LoginPassword'];

$sql = "SELECT * from registreren WHERE Email = '$email'";

$result = mysqli_query($conn, $sql);

$gebruiker = mysqli_fetch_assoc($result);

// var_dump($user);
// die;


if (!$gebruiker) {

    exit("Email is onjuist");
}
if ($gebruiker['Password'] === $_POST['LoginPassword']) {


    $_SESSION['Username'] = $gebruiker['Username'];
    $_SESSION['LoginEmail'] = $gebruiker['Email'];
    $_SESSION['LoginPassword'] = $gebruiker['Password'];


    header("Location: recepten.php");
    exit;
} else {

    exit("Wachtwoord klopt niet");
}
