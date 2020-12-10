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

        <main>

        </main>
        <script type="text/javascript" src='scripts/js/custom_func.js'></script>
        <script type="text/javascript" src='scripts/js/display_articles.js'></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.0/highlight.min.js"></script>
        <script>
            SendRequest('articles', 'titre, article, code');
            // hljs.initHighlighting();
            window.setTimeout(hljs.initHighlighting, 100);
        </script>

        <?php include("includes/footer.php"); ?>

    </body>
</html>