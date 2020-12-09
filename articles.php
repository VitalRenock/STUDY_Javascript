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

        <article id="mon_article"></article>
        
        <script type="text/javascript" src='scripts/js/display_articles.js'></script>
        
        <script type="text/javascript" src='scripts/js/custom_func.js'></script>
        
        <?php include("includes/footer.php"); ?>

    </body>
</html>