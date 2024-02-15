<?php
session_start();

// Database configuration
$host = "mariadb";
$dbuser = "root";   
$dbpass = "password";
$dbname = "receptenboek";

// Database connection
$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titel = $_POST['titel'];
    $aantal_ingredienten = $_POST['aantal_ingredienten'];
    $moeilijkheidsgraad = $_POST['moeilijkheidsgraad'];
    $duur = $_POST['duur'];
    $menugang = $_POST['menugang'];
    $omschrijving = $_POST['omschrijving'];
    $foto = '';
    $sql = "INSERT INTO recepes (Titel, `Aantal ingredienten`, Moeilijkheidsgraad, Duur, Menugang, Omschrijving, Foto) 
            VALUES ('$titel', '$aantal_ingredienten', '$moeilijkheidsgraad', '$duur', '$menugang', '$omschrijving', '$foto')";

if (mysqli_query($conn, $sql)) {
    mysqli_close($conn);

    header("Location: recepten.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
    <link rel="stylesheet" href="css/forms.css">
 
    
</head>
<body>
    <div class="container">
        <h2>Recept toevoegen</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
            <label for="titel">Titel:</label>
            <input type="text" id="titel" name="titel">
            
            <label for="aantal_ingredienten">Aantal ingredienten:</label>
            <input type="number" id="aantal_ingredienten" name="aantal_ingredienten">
            
            <label for="moeilijkheidsgraad">Moeilijkheidsgraad:</label>
                <select id="moeilijkheidsgraad" name="moeilijkheidsgraad">
                    <?php
                        for ($i = 1; $i <= 10; $i++) {
                        echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>

            
            <label for="duur">Duur: (in minuten)</label>
            <input type="number" id="duur" name="duur">
            
            <label for="menugang">Menugang:</label>
            <select id="menugang" name="menugang">
                <option value="voorgerecht">Voorgerecht</option>
                <option value="hoofdgerecht">Hoofdgerecht</option>
                <option value="bijgerecht">Bijgerecht</option>
                <option value="nagerecht">Nagerecht</option>
                <option value="tussendoortje">Tussendoortje</option>
                <option value="ontbijt">Ontbijt</option>
                <option value="lunch">Lunch</option>
            </select>
            
            <label for="omschrijving">Omschrijving:</label>
            <textarea id="omschrijving" name="omschrijving"></textarea>
            
            <label for="foto">Foto:</label>
            <input type="file" id="foto" name="foto">
            
            <input type="submit" value="Add Recipe">
        </form>
    </div>
</body>
</html>
