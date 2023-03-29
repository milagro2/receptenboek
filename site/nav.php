<nav class="navbar">
    <ul class="menu">
        <li><a href="indiaseProjectb3.php">Home</a></li>
        <li><a href="recepten.php">Recepten</a></li>
        <li><a href="specials.php">Specials</a></li>
        <li><a href="#">Menugang</a></li>
        <li><a href="#">Ingredienten</a></li>
        <li><a href="#">Contact</a></li>

        <li class="aantalrec">
            <?php

            $host  = "mariadb";
            $dbuser = "root";
            $dbpass = "password";
            $dbname = "receptenboek";

            $conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);


            $sql = "SELECT COUNT(Titel) FROM recepes";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo "Het aantal recepten: " . $row["COUNT(Titel)"];
            }
            ?></li>

    </ul>
</nav>