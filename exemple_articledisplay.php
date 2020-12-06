<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
        <title>Exemple d'affichage d'articles</title>

    </head>

    <body>

        <?php include("includes/php/connect_db.php"); ?>
        <?php include("includes/php/custom_func.php"); ?>
        <script type="text/javascript" src='includes/js/custom_func.js'></script>
        <?php include("includes/php/header.php"); ?>
        <?php include("includes/php/menu.php"); ?>
        
        <article>
            <pre>
                <code class="html">
                    <p id="monArticle">Mon futur code HTML mise en forme.</p>
                </code>
            </pre>
        </article>

        <?php 
            $sqlRequest = 'SELECT titre, article, code FROM articles';
            $result = $myDatabase->query($sqlRequest);
            echo DisplayArticleOfDB($result) 
        ?>

        <article>
            <h1>Affichage de la table</h1>
            <?php
                $sqlRequest = 'SELECT titre, article, code FROM articles';
                $result = $myDatabase->query($sqlRequest);
                echo DisplayTableOfDB($result); 
            ?>
        </article>


    </body>
</html>