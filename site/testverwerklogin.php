<?php

session_start();

require 'database.php';

$email = isset($_GET['email']) ? $_GET['email'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';




$sql = "SELECT * FROM registreren WHERE Email = ? LIMIT 1";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$gebruiker = mysqli_fetch_assoc($result);

if (!$gebruiker) {
    exit("Gebruiker niet gevonden.");
}

if (password_verify($password, $gebruiker['Password'])) {

    // $_SESSION['isIngelogd'] = true;
    $_SESSION['Password'] = $gebruiker['Password'];

    header("Location: welkom.php");
    exit;
} else {

    exit("Ongeldig wachtwoord.");
}

mysqli_close($conn);
