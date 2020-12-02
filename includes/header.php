<header>
    <?php include("includes/connect_db.php"); ?>
    <h1>Vitalrenock website</h1>

    <!-- Modifier du CSS avec javascript -->
    <script type="text/javascript">
        <?php
            $myDatabase2 = ConnectPDOtoDB();
            $sqlRequest = 'SELECT css_value FROM style_css';
            $result = $myDatabase2->query($sqlRequest);
            $value;
            while ($row = $result->fetch()) {
                $value = $row['css_value'];
            }
        ?>
        var css_value = "<?php echo $value; ?>"                // Passage d'une variable PHP vers JS
        document.body.style.backgroundColor = css_value          // Changement du css
    </script>
</header>