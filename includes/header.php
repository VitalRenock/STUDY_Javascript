<header>
    
    <h1>Vitalrenock website</h1>

    <!-- 1) Requête pour récupérer la couleur de fond du site dans la DB -->
    <?php
        $sqlRequest = 'SELECT css_value FROM style_css';
        $result = $myDatabase->query($sqlRequest);
        $value;
        while ($row = $result->fetch()) {
            $value = $row['css_value'];
        }
    ?>

    <!-- 2) Modification du CSS avec javascript -->
    <script type="text/javascript">
        ChangeBackgroundColor("<?php echo $value; ?>");
    </script>

</header>