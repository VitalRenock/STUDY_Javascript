<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("includes/meta&css.php"); ?>
    <?php //include("includes/connect_db.php"); ?>

    <title>Database Management</title>
</head>
<body>
    <?php include("includes/header.php"); ?>
    <?php include("includes/menu.php"); ?>

    <!-- Générer le CSS de la page courante à partir d'un résultat venant de la DB -->
    <!-- Formulaire utilisateur de requête SQL -->
    <!-- Générer une requête SQL à partir d'un formulaire PHP -->

    <article>
        <h1>Affichage de la table</h1>
        <?php
            $myDatabase = ConnectPDOtoDB();
            $sqlRequest = 'SELECT css_selector, css_property, css_value FROM style_css';
            $result = $myDatabase->query($sqlRequest);
            echo DisplayTableOfDB($result); 
        ?>
    </article>
    
    <article>
        <h1>Formulaire INSERT INTO</h1>
        <?php echo GenerateForm('dbquery_insertinto.php'); ?>
    </article>
    
    <article>
        <h1>Formulaire DELETE</h1>
        <?php echo GenerateForm('dbquery_delete.php'); ?>
    </article>

    <?php
        /** Retourne le résultat d'une requête SELECT sous la forme de tableau HTML. */
        function DisplayTableOfDB($result) {
            $html = "<table>";
            while($row = $result->fetch()) {
                $html .= "<tr>";
                for ($i = 0; $i < count($row)/2; $i++) {
                    $html .= "<td>".$row[$i]."</td>";
                }
                $html .= "</tr>";
            }
            $html .= "</table>";
            return $html;
        }
    ?>

    <?php
        /** Génere un formulaire */
        function GenerateForm($action) {
            $html = "<form action = '".$action."' method = 'post'>";

            $html .= "<label for='sel_CSS'>Sélecteur CSS:</label>";
            $html .= "<input type='text' id='sel_CSS' name='sel_CSS'><br><br>";

            $html .= "<label for='pro_CSS'>Propriété CSS:</label>";
            $html .= "<input type='text' id='pro_CSS' name='pro_CSS'><br><br>";

            $html .= "<label for='val_CSS'>Valeur CSS:</label>";
            $html .= "<input type='text' id='val_CSS' name='val_CSS'><br><br>";
    
            $html .= "<input type='submit' value='Envoyer'>";

            $html .= "</form>";
            return $html;
        }
    ?>

</body>
</html>