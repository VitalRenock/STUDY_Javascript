<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
        <title>Articles</title>

    </head>

    <body>

        <?php include("scripts/php/connect_db.php"); ?>
        <?php include("scripts/php/custom_func.php"); ?>

        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>
        

        <?php 
            $sqlRequest = 'SELECT titre, article, code FROM articles';
            $result = $myDatabase->query($sqlRequest);
            echo DisplayArticleOfDB($result);
        ?>

        <article>
            <h1>Affichage de la table</h1>
            <?php
                $sqlRequest = 'SELECT titre, article, code FROM articles';
                $result = $myDatabase->query($sqlRequest);
                echo DisplayTableOfDB($result); 
            ?>
        </article>

        <script type="text/javascript" src='scripts/js/custom_func.js'></script>
        
        <?php include("includes/footer.php"); ?>

    </body>
</html>