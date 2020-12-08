<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>

        <style>
            body {
                background-color: grey;
            }

            .red {
                color: red;
                transition-duration: 0.5s;
            }

            .blue {
                color: blue;
                transition-duration: 0.5s;
            }

            .green {
                color: green;
                transition-duration: 0.5s;
            }
        </style>
        
        <title>L'objet Document du javascript</title>

    </head>

    <body>

        <?php include("scripts/php/connect_db.php"); ?>
        <?php include("scripts/php/custom_func.php"); ?>

        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>

        <p class="demo">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam repellat numquam dolorem, quisquam maxime nostrum at voluptates et dolores sint ad, ipsum est non autem odit. Sint ut esse quam.
        </p>
        <br>
        <p class="demo">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error doloremque ad rerum deleniti similique? Beatae, veniam veritatis! Laborum aliquam illo dolore, earum, voluptatum aperiam, sunt libero officiis unde vero numquam.
        </p>

        <!-- Script -->
        <script type="text/javascript" src="scripts/js/demo_js_document.js"></script>

        <script type="text/javascript" src='scripts/js/custom_func.js'></script>
        
        <?php include("includes/footer.php"); ?>

    </body>
    
</html>