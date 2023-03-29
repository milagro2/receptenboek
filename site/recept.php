<?php

// Database configuratie
$host  = "mariadb";
$dbuser = "root";
$dbpass = "password";
$dbname = "receptenboek";

// database connectie
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recept</title>
    <link rel="stylesheet" href="css/stylingProject.css">
</head>

<body>
    <?php
    require('header.php');
    require('nav.php');

    ?>

    <?php

    $Gerechtnummer  = $_GET['Gerechtnummer'];
    $sql = "SELECT * FROM recepes WHERE Gerechtnummer = $Gerechtnummer";
    $result = mysqli_query($conn, $sql);
    $recept = mysqli_fetch_assoc($result);
    ?>

    <main>


        <div class="recipe">
            <h3 class="recepttitel"><?php echo $recept['Titel']; ?></h3>
            <img class="receptfoto" src="images/<?php echo $recept['Foto'] ?>"></img>
            <p class="recepttekst"><?php echo $recept['Omschrijving']; ?></p>
            <div class="info">
                <p>Bereidingstijd: <?php echo $recept['Duur']; ?></p>
                <p>Aantal ingredienten: <?php echo $recept['Aantal ingredienten']; ?></p>
                <p>Menugang: <?php echo $recept['Menugang']; ?></p>
                <p>Moeilijkheidsgraad: <?php echo $recept['Moeilijkheidsgraad']; ?></p>
            </div>



        </div>


    </main>



    <?php
    require('footer.php');
    ?>
</body>

</html>