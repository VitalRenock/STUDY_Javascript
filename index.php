<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
        <title>Accueil</title>

    </head>

    <body>
        
        <?php include("includes/connect_db.php"); ?>
        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>
        <script type="text/javascript" src='/javascript/custom_func.js'></script>
        

        <article>
            <pre>
                <code class="html">
                    <p id="monArticle">Mon futur code HTML mise en forme.</p>
                </code>
            </pre>
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