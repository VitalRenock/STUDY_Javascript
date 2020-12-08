<!DOCTYPE html>
<html lang="en">

    <head>

        <?php include("includes/head.php"); ?>

        <!-- CSS -->
        <style>
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

        <title>Les events dans javascript</title>

    </head>

    <body>

        <?php include("scripts/php/connect_db.php"); ?>
        <?php include("scripts/php/custom_func.php"); ?>

        <?php include("includes/header.php"); ?>
        <?php include("includes/menu.php"); ?>
        
        <p id="rougit">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam cumque sed at soluta, recusandae quidem nihil harum magni ea. Possimus iusto eligendi sunt corrupti, esse modi quod amet impedit. Fuga.</p>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, repellendus similique. Laborum distinctio soluta dolorum quos. Ratione quod similique reprehenderit ab voluptatem, quos omnis, quisquam eligendi sint repudiandae hic deleniti.</p>
        
        <script type="text/javascript" src="scripts/js/demo_js_event.js"></script>

        <script type="text/javascript" src='scripts/js/custom_func.js'></script>
        
        <?php include("includes/footer.php"); ?>

    </body>
    
</html>