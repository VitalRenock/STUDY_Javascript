<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
        <title>Articles</title>

    </head>

    <body>

        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>

        <main>

        </main>

        <script type="text/javascript" src='scripts/js/display_articles.js'></script>
        <script>
            SendRequest('articles', 'titre, article, code');
            // hljs.initHighlighting();
            window.setTimeout(hljs.initHighlighting, 100);
        </script>

        <?php include("includes/footer.php"); ?>

    </body>
</html>