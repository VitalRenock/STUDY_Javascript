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

            <article id="display_tables"></article>

            <!-- Interface -->
            <article>
                <p class="myParaf1">
                    <button name="button_select" type="button" id="button_select">SELECT</button>
                    <button name="button_insert_into" type="button" id="button_insertinto">INSERT INTO</button>
                    <button name="button_delete" type="button" id="button_delete">DELETE</button>
                    <button name="button_from" type="button" id="button_from">FROM</button>
                    <button name="button_asterisk" type="button" id="button_asterisk">*</button>
                </p>
                <p class="myParaf1">
                    <input  name="input_user" type="text" id="input_user">
                    <button name="button_add" type="button" id="button_add">Add</button>
                </p>
                <p class="myParaf1">
                    <strong>Requête en préparation:</strong>
                    <br>
                    <strong id="display_request"></strong>
                    <br>
                    <button name="button_reset" type="button" id="button_reset">Reset</button>
                    <button name="button_send" type="button" id="button_send">Send</button>
                </p>
                <p class="myParaf1" id="display_request_data"></p>

            </article>

            <!-- Affichage du résultat -->
            <article id="display_result"></article>

        </main>

        
        <?php include("includes/footer.php"); ?>

    </body>
    
</html>