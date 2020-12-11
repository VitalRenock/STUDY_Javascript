<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>
        
        <title>Administration</title>

    </head>

    <body>

        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>

        <main>

            <article>
                <h1>PhpMyAdmin</h1>
                <a href="/phpmyadmin">PhpMyAdmin</a>
            </article>

            <article>
                <label for="input_title">Titre: </label>
                <br>
                <input  name="input_title" type="text" id="input_title">
                <br>
                <label for="input_content">Description: </label>
                <br>
                <textarea name="input_content" id="input_content" cols="30" rows="10"></textarea>
                <br>
                <label for="inupt_code">Exemple de code: </label>
                <br>
                <textarea name="input_code" id="input_code" cols="30" rows="10"></textarea>
                <br>
                <label for="input_categorie">Catégorie: </label>
                <br>
                <input  name="input_categorie" type="text" id="input_categorie">
                <br>
                <input  name="button_send" type="button" id="button_send" value="Envoyer">

            </article>

        </main>

        <script type="module" src="scripts/js/main/administration.js"></script>
        
        <?php include("includes/footer.php"); ?>

    </body>
    
</html>