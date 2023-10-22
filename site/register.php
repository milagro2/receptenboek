<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registratie</title>
    <link rel="stylesheet" href="css/stylingProject.css">
</head>





<?php
if (isset($_POST['Username']) && isset($_POST['email']) && isset($_POST['Password'])) {
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
}
?>

<body>

    <form class="register" action="verwerk-register.php" method="post">

        <h1 class="registti">Maak nieuw account</h1>

        <div class="regist">
            <div>
                <label for="RegistNaam">Naam gebruiker:</label>
                <input type="name" name="RegistNaam" id="RegistNaam">
            </div>
            <div>
                <label for="RegistEmail">Email gebruiker:</label>
                <input type="email" name="RegistEmail" id="RegistEmail">
            </div>
            <div>
                <label for="RegistPassword">Password gebruiker:</label>
                <input type="password" name="RegistPassword" id="RegistPassword">
            </div>
        </div>

        <button type="submit" class="registbutton">nieuwe gebruiker toevoegen</button>
    </form>




</body>

</html>