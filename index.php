<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("includes/meta&css.php"); ?>
    <?php //include("includes/connect_db.php"); ?>

    <title>Accueil</title>
</head>
<body>

    <?php include("includes/header.php"); ?>
    <?php include("includes/menu.php"); ?>

    
<!-- ARCHIVES -->
    
    <?php
        // // Parsing des colonnes en string 
        // $columnsToString = " (";
        // for ($i = 0; $i < count($columnTarget); $i++) {
        //     $columnsToString .= $columnTarget[$i];
        //     if ($i > 0 && $i < count($columnTarget))
        //         $columnsToString .= ", ";
        // }
        // $columnsToString .= ") ";
    ?>


    <!-- Modifier du CSS avec javascript -->
    <!-- <script type="text/javascript">
        // var css_value = "<?php //echo $value; ?>"                // Passage d'une variable PHP vers JS
        // document.body.style.backgroundColor = css_value          // Changement du css
    </script> -->

</body>
</html>