<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
        <title>Apprendre</title>

    </head>

    <body>
        
        <?php include("includes/php/connect_db.php"); ?>
        <?php include("includes/php/custom_func.php"); ?>
        <script type="text/javascript" src='includes/js/custom_func.js'></script>
        <?php include("includes/php/header.php"); ?>
        <?php include("includes/php/menu.php"); ?>

        <article>
            <h3>Apprendre l'html</h3>
            <p>
                <a href="html_bases.php">Les bases de l'html</a>
            </p>
        </article>

        <article>
            <h3>Apprendre le PHP</h3>
            <p>
                <a href="exemple_formulaire.php">Exemple de formulaire</a><br>
                <a href="exemple_articledisplay.php">Exemple d'affichage d'articles</a>
            </p>
        </article>

        <article>
            <h3>Apprendre le javascript</h3>
            <p>
                <a href="javascript_bases.php">Les bases du javascript</a><br>
                <a href="javascript_window.php">L'objet Window du javascript</a><br>
                <a href="javascript_document.php">L'objet Document du javascript</a><br>
                <a href="javascript_event.php">Les events dans javascript</a><br>
                <a href="javascript_ajax.php">Ajax pour javascript</a><br>
            </p>
        </article>

    </body>

</html>