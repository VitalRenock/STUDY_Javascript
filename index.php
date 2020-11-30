<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("includes/meta&css.php"); ?>
    <?php include("includes/connect_db.php"); ?>

    <title>Accueil</title>
</head>
<body>

    <?php include("includes/header.php"); ?>
    <?php include("includes/menu.php"); ?>

    <p>Hello Renock</p>


    <?php
        $mysqli = connectDB();


        $sql2 = "UPDATE style_css SET css_value = 'orange' WHERE css_value = 'green'";
        $result2 = $mysqli->query($sql2);
        

        $sql = "SELECT css_selector, css_property, css_value FROM style_css";
        $result = $mysqli->query($sql);
        $value;

        if ($result->num_rows > 0) 
        {
            while($row = $result->fetch_assoc())    // output data of each row
            {
                echo "Selector = " . $row["css_selector"]. " / Property = " . $row["css_property"]. " / Value = " . $row["css_value"]. "<br>";
                $value = $row["css_value"];
            }
                
        } 
        else 
            echo "0 results";
    ?>
 
    <script type="text/javascript">
        var css_value = "<?php echo $value; ?>"
        document.body.style.backgroundColor = css_value
    </script>
</body>
</html>