<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
        <title>Accueil</title>

    </head>

    <body>

        <?php include("includes/php/connect_db.php"); ?>
        <?php include("includes/php/header.php"); ?>
        <?php include("includes/php/menu.php"); ?>
        <?php include("includes/php/custom_func.php"); ?>
        <script type="text/javascript" src='includes/js/custom_func.js'></script>
        

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

        <script>
            var testStr = 
            "<!DOCTYPE html>\r\
            <html lang=\"en\">\r\
            <head>\r\
                <meta charset=\"UTF-8\">\r\
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\
                <title>Document</title>\r\
            </head>\r\
            <body>\r\
                \r\
            </body>\r\
            </html>";
            
            ReplaceInnerHTMLbyID('monArticle', ConvertSTRINGtoHTML(testStr));
        </script>

    </body>

</html>