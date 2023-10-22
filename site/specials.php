<?php
session_start();
require('header.php');
require('nav.php');
$host  = "mariadb";
$dbuser = "root";
$dbpass = "password";
$dbname = "receptenboek";

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);


$sql = "SELECT MAX(Titel) FROM recepes WHERE Duur = (SELECT MAX(Duur)FROM recepes)";
$sql2 = "SELECT MIN(Titel) FROM recepes WHERE Moeilijkheidsgraad = (SELECT MIN(Moeilijkheidsgraad)FROM recepes)";
$sql3 = "SELECT MAX(Titel) FROM recepes WHERE `Aantal ingredienten` = (SELECT MAX(`Aantal ingredienten`) FROM recepes);";
//Aantal ingredienten
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);

if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  $row2 = mysqli_fetch_assoc($result2);
  $row3 = mysqli_fetch_assoc($result3);
}
?>
<main>

  <div class="recipe">
    <div class="speci"><?php echo "Dit recept duurt het langst om te maken: " . $row["MAX(Titel)"]; ?></div>

  </div>
  <div class="recipe">
    <div class="speci"><?php echo "Dit recept is het makkelijkst om te maken: " . $row2["MIN(Titel)"]; ?></div>
  </div>

  <div class="recipe">
    <div class="speci"><?php echo "Dit recept heeft de meeste ingredienten: " . $row3["MAX(Titel)"]; ?></div>
  </div>





  
  
</main>

<?php
require('footer.php');
?>
</body>

</html>