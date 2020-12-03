<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("includes/meta&css.php"); ?>
    <?php //include("includes/connect_db.php"); ?>
    
    <title>Accueil</title>

</head>
<body>
    
    <?php include("includes/header.php"); ?>
    <?php include("includes/menu.php"); ?>

    <article>
        <pre>
            <code class="html">
                <p id="monArticle">Article1</p>
            </code>
        </pre>
    </article>


    <script type="text/javascript" src='/javascript/custom_methode.js'></script>

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
    
<!-- ARCHIVES -->
    
    <?php
        // // Parsing des colonnes en string 
        // $columnsToString = " (";
        // for ($i = 0; $i < count($columnTarget); $i++) {
        //     $columnsToString .= $columnTarget[$i];
        //     if ($i > 0 && $i < count($columnTarget))
        //         $columnsToString .= ", ";
        // }
        // $columnsToString .= ") ";
    ?>
    
</body>
</html>