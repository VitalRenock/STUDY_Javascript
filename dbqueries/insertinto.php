<?php
    include("../includes/php/connect_db.php");

    DBInsertInto();

    function DBInsertInto() {
        // Connexion à la DB
        $myDatabase = ConnectPDOtoDB();
        
        // Préparation et envoi de la requête
        $sqlRequest = 'INSERT INTO style_css (css_selector, css_property, css_value) VALUES(?, ?, ?)';
        $result = $myDatabase->prepare($sqlRequest);
        $result->execute(array($_POST['sel_CSS'], $_POST['pro_CSS'], $_POST['val_CSS']));
        
        // Redirection du visiteur vers la page du minichat
        header('Location: ../management_db.php');
    }
?>