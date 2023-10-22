<?php
$host  = "mariadb";
$dbuser = "root";
$dbpass = "password";
$dbname = "receptenboek";

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);



$naam = $_POST['RegistNaam'];
$email = $_POST['RegistEmail'];
$password = $_POST['RegistPassword'];




$sql = "INSERT INTO registreren (Username, Email, Password)
             VALUES ('$naam', '$email', '$password')";


if (mysqli_query($conn, $sql)) {


    echo "Data inserted successfully.";
?>

    <a class="Registbut" href="recepten.php">Recepten</a>
<?php
    exit();


    echo "Data inserted successfully.";
} else {
    echo "ERROR: Not able to execute $sql. " . mysqli_error($conn);
}
mysqli_close($conn);
