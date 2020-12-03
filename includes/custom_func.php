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

// // Parsing des colonnes en string 
    // $columnsToString = " (";
    // for ($i = 0; $i < count($columnTarget); $i++) {
    //     $columnsToString .= $columnTarget[$i];
    //     if ($i > 0 && $i < count($columnTarget))
    //         $columnsToString .= ", ";
    // }
    // $columnsToString .= ") ";
?>