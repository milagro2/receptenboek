<?php
include"connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptenboek</title>
    <link rel="stylesheet" href="css/stylingProject.css">
</head>


<body>

    <?php
    require('header.php');
    require('nav.php');
    $sql = "SELECT * FROM recepes";
    $result = mysqli_query($conn, $sql);
    $recepts = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // var_dump($recepts);
    // die;

    ?>


    <main>

        <?php foreach ($recepts as $recep) : ?>
            <div class="recipe">
                <img class="EtenFoto" src="images/<?php echo $recep['Foto'] ?>"></img>
                <h3><?php echo $recep['Titel']; ?></h3>
                <p class="spes"><?php echo $recep['Menugang']; ?> -
                    <?php echo $recep['Duur']; ?> -
                    <?php echo $recep['Moeilijkheidsgraad']; ?></p>
                <p><?php echo $recep['Omschrijving'] ?></p>
                <a class="btrchi" href="recept.php?Gerechtnummer=<?php echo $recep['Gerechtnummer']; ?>">Recept</a>



            </div>
        <?php endforeach; ?>

    </main>
    <?php
    require('footer.php');
    ?>
</body>

</html>