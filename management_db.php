<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>

        <title>Database Management</title>

    </head>

    <body>
        
        <?php include("includes/connect_db.php"); ?>
        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>
        <?php include("includes/custom_func.php"); ?>
        <script type="text/javascript" src='/javascript/custom_func.js'></script>

        <article>
            <h1>Affichage de la table</h1>
            <?php
                $myDatabase = ConnectPDOtoDB();
                $sqlRequest = 'SELECT css_selector, css_property, css_value FROM style_css';
                $result = $myDatabase->query($sqlRequest);
                echo DisplayTableOfDB($result); 
            ?>
        </article>
        
        <article>
            <h1>Formulaire INSERT INTO</h1>
            <?php echo GenerateForm('dbqueries/insertinto.php'); ?>
        </article>
        
        <article>
            <h1>Formulaire DELETE</h1>
            <?php echo GenerateForm('dbqueries/delete.php'); ?>
        </article>

    </body>

</html>