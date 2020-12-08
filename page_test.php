<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
    </head>

    <body>

        <?php include("scripts/php/connect_db.php"); ?>
        <?php include("scripts/php/custom_func.php"); ?>

        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>

        <!-- Intégration de highlight.js -->
        <article>
            <pre>
                <code class="html">
                    <p id="monArticle">Mon futur code HTML mise en forme.</p>
                </code>
            </pre>
        </article>

        <script type="text/javascript" src='scripts/js/custom_func.js'></script>
        
        <?php include("includes/footer.php"); ?>

    </body>

</html>