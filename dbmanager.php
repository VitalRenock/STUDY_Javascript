<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
        <title>DB Manager</title>

    </head>

    <body>

        <?php include("includes/php/connect_db.php"); ?>
        <?php include("includes/php/custom_func.php"); ?>
        <script type="text/javascript" src='includes/js/custom_func.js'></script>
        <?php include("includes/php/header.php"); ?>
        <?php include("includes/php/menu.php"); ?>

        <!-- INTERFACE -->
        <button name="button_red" type="button" id="button_red">Red</button>

        <!-- <article>
            <h1>Formulaire INSERT INTO</h1>
            <form action = 'dbqueries/insertinto.php' method = 'post'>
                <label for='sel_CSS'>Sélecteur CSS:</label>
                <input type='text' id='sel_CSS' name='sel_CSS' value='body'><br><br>
                <label for='pro_CSS'>Propriété CSS:</label>
                <input type='text' id='pro_CSS' name='pro_CSS' value='background-color'><br><br>
                <label for='val_CSS'>Valeur CSS:</label>
                <input type='color' id='val_CSS' name='val_CSS'><br><br>
                <input type='submit' value='Envoyer'>
            </form>
        </article> -->
        
        <script type="text/javascript" src="javascript/dbmanager.js"></script>

    </body>
</html>