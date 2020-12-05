<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/head.php"); ?>
</head>

<body>
    <?php include("includes/php/connect_db.php"); ?>
    <?php include("includes/php/custom_func.php"); ?>
    <script type="text/javascript" src='includes/js/custom_func.js'></script>
    <?php include("includes/php/header.php"); ?>
    <?php include("includes/php/menu.php"); ?>

    <article>
        <form method="post" action="convert_html.php">
            <label for="convert_html">Code HMTL:</label><br>
            <textarea name="convert_html" id="convert_html" cols="30" rows="10"></textarea>
            <input type='submit' value='Envoyer'>
        </form>
        <p>
            <?php 
                try {
                    if ($_GET['convert_string']) {
                        echo $_GET['convert_string'];
                    }
                } catch (\Throwable $th) {
                    // throw $th;
                }
            ?>
        </p>
    </article>
</body>

</html>