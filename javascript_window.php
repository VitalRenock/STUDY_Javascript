<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>

        <title>L'objet Window du javascript</title>

    </head>

    <body>

        <?php include("scripts/php/connect_db.php"); ?>
        <?php include("scripts/php/custom_func.php"); ?>

        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>

        <!-- Execution du script avant le chargement de la page SI la balise <script> se trouve dans la balise <head>.
        Pour l'effet inverse, charger la page avant le script, placé la balise <script> dans le <body> (préférable de manière général). -->
        <script type="text/javascript" src="scripts/js/demo_js_window.js"></script>

        <script type="text/javascript" src='scripts/js/custom_func.js'></script>
        
        <?php include("includes/footer.php"); ?>

    </body>
    
</html>