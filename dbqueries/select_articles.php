<?php

    include("../includes/php/connect_db.php");

    DBSelect();

    function DBSelect() {
        $myDatabase = ConnectPDOtoDB();

        
        // $sqlRequest = 'SELECT titre, article, code FROM articles';
        // $sqlRequest = 'SELECT nom FROM jeux_video';
        $sqlRequest = 'SELECT * FROM jeux_video WHERE id = :id';

        // $result = $myDatabase->query($sqlRequest);
        $result = $myDatabase->prepare($sqlRequest);
        // $requete = $bdd->prepare("SELECT * FROM Client WHERE email = :email");

        // On lie la variable $email définie au-dessus au paramètre :email de la requête préparée
        $result->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
        // $requete->bindValue(':email', $email, PDO::PARAM_STR);

        // $result->execute(array($_POST['table']));
        $result->execute();

        // Préparation et envoi de la requête
        // $sqlRequest = 'INSERT INTO style_css (css_selector, css_property, css_value) VALUES(?, ?, ?)';
        // $result = $myDatabase->prepare($sqlRequest);
        // $result->execute(array($_POST['sel_CSS'], $_POST['pro_CSS'], $_POST['val_CSS']));
        
        echo json_encode($result->fetchAll());
    }

?>