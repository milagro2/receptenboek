<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Recipe</title>
    <link rel="stylesheet" href="css/stylingProject.css">
    <style>
            
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        
        /* form {
            max-width: 600px;
            margin: 0 auto;
        } */
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        
       
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        
        input[type="submit"]:hover {
            background-color: red;
        }
    </style>
    
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
