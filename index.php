<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("includes/meta&css.php"); ?>
    <?php include("includes/connect_db.php"); ?>

    <title>Accueil</title>
</head>
<body>

    <?php include("includes/header.php"); ?>
    <?php include("includes/menu.php"); ?>

    <form action="test_insert.php" method="post">

        <label for="sel_CSS">Sélecteur CSS:</label>
        <input type="text" id="sel_CSS" name="sel_CSS"><br><br>

        <label for="pro_CSS">Propriété CSS:</label>
        <input type="text" id="pro_CSS" name="pro_CSS"><br><br>

        <label for="val_CSS">Valeur CSS:</label>
        <input type="text" id="val_CSS" name="val_CSS"><br><br>

        <input type="submit" value="Submit">

    </form> 

    <?php 
        $myDatabase = ConnectPDOtoDB();                 // Connexion à la DB avec PDO
        $sqlRequest = 'SELECT css_value FROM style_css';
        $result = $myDatabase->query($sqlRequest);

        while ($row = $result->fetch()) {
            $value = $row["css_value"];
        }

    ?>

<!-- Modifier du CSS avec javascript -->
    <script type="text/javascript">
        // Passage d'une variable PHP vers JS
        var css_value = "<?php echo $value; ?>"
        // Changement du css
        document.body.style.backgroundColor = css_value
    </script>

</body>
</html>