<?php
require 'database.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['LoginEmail'];
    $password = $_POST['LoginPassword'];

    header("Location: verwerk-login.php?email=$email&password=$password");
    exit;
}
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="css/stylingProject.css">
</head>

<form class="Login" action="verwerk-login.php" method="post">

    <h1>Login uw account</h1>
    <div class="logine">
        <input type="Email" name="LoginEmail" placeholder="Email" id="LoginEmail">

        <input type="Password" name="LoginPassword" placeholder="Password" id="LoginPassword">
        <button type="submit">Login</button>
    </div>
</form>
</div>
</div>