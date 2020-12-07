<?php

    include("../includes/php/connect_db.php");

    DBRequester();

    function DBRequester() {
        // Je demande un jeton de connexion à la DB
        $myDatabase = ConnectPDOtoDB();
        
        // Je dis quoi faire avec le résultat
        switch ($_GET['type']) {
            case 'show':
                // Je fais la requete
                $result = $myDatabase->query($_GET['request']); // On utilise ->query pour une requete SELECT
                echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));
                break;
            case 'select':
                // Je fais la requete
                $result = $myDatabase->query($_GET['request']); // On utilise ->query pour une requete SELECT
                echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));
                break;
            case 'insert':
                $result = $myDatabase->exec($_GET['request']); // On utilise ->exec pour une requete INSERT INTO
                // Je ne retourne rien
            break;
            case 'delete':
                $result = $myDatabase->exec($_GET['request']); // On utilise ->exec pour une requete DELETE
                // Je ne retourne rien
                break;
            default:
                echo "Erreur avec la string 'type' recu en GET, switch hors condition!";
                break;
        }
    }
    
    
    // OLD -> Pour documentation

    // Renvoie un tableau d'objet: [ {} {} ]
    // echo json_encode($result->fetchAll());

    // echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));

    // function DBSelect() {
    //     $myDatabase = ConnectPDOtoDB();

        
    //     // $sqlRequest = 'SELECT titre, article, code FROM articles';
    //     // $sqlRequest = 'SELECT nom FROM jeux_video';
    //     $sqlRequest = 'SELECT * FROM jeux_video WHERE id = :id';

    //     // $result = $myDatabase->query($sqlRequest);
    //     $result = $myDatabase->prepare($sqlRequest);
    //     // $requete = $bdd->prepare("SELECT * FROM Client WHERE email = :email");

    //     // On lie la variable $email définie au-dessus au paramètre :email de la requête préparée
    //     $result->bindValue(':id', $_GET['id'], PDO::PARAM_STR);
    //     // $requete->bindValue(':email', $email, PDO::PARAM_STR);

    //     // Retourne un objet PDOStatement.
    //     // $result->execute(array($_POST['table']));
    //     $result->execute();

    //     // Préparation et envoi de la requête
    //     // $sqlRequest = 'INSERT INTO style_css (css_selector, css_property, css_value) VALUES(?, ?, ?)';
    //     // $result = $myDatabase->prepare($sqlRequest);
    //     // $result->execute(array($_POST['sel_CSS'], $_POST['pro_CSS'], $_POST['val_CSS']));
        
    //     echo json_encode($result->fetchAll());
    // }

?>