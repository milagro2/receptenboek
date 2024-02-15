<nav class="navbar">
    <ul class="menu">
        <li><a href="indiaseProjectb3.php">Home</a></li>
        <li><a href="recepten.php">Recepten</a></li>
        <li><a href="specials.php">Specials</a></li>
        <li><a href="addRecipe.php">Recept toevoegen</a></li>
        <!-- <li><a href="#">Menugang</a></li> -->

            
         <?php
        if (isset($_SESSION['Username'])) {
            echo '<li class="userName">' . $_SESSION['Username'] . '</li>';
            echo '<li><a href="logout.php">Uitloggen</a></li>';

        } else {
            echo '<li>Please log in to the website</li>';
            echo '<li><a class="login-btn" href="login.php">Login</a></li>';
            echo '<li><a class="register-btn" href="register.php">Register</a></li>';
        }
        ?>



    




        </li>

    </ul>
</nav>