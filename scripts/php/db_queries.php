<?php

    // Je demande un jeton de connexion à la DB
    include("connect_db.php");

    DBRequester($myDatabase);

    /** Fonction qui récupère avec la méthode 'GET' la requête ('request') et le type d'action a effectuer ('type')
     * au format 'STRING'.
     * 
     * Exemples pour description de paramètres:
     * @param PDO $myDatabase Jeton de connexion
     * @//throws MyBiduleNotFoundException
     * @//return array Un super tableau */
    function DBRequester($myDatabase) {
        
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

// FONCTIONS AVEC REQUETES ECRIT EN 'DUR'

    function DBSelect($myDatabase) {

        $myDatabase = ConnectPDOtoDB();
        $sqlRequest = 'SELECT * FROM jeux_video';
        $result = $myDatabase->query($sqlRequest);
        
        echo json_encode($result->fetchAll());                          // json_encode retourne un json au client.
        // echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));       // Valable
        // echo json_encode($result->fetchAll(PDO::FETCH_CLASS));       // Valable

    }
    
    function DBInsertInto($myDatabase) {

        // Connexion à la DB
        $myDatabase = ConnectPDOtoDB();

        // Préparation et envoi de la requête
        $sqlRequest = 'INSERT INTO style_css (css_selector, css_property, css_value) VALUES(?, ?, ?)';
        $result = $myDatabase->prepare($sqlRequest);
        $result->execute(array($_POST['sel_CSS'], $_POST['pro_CSS'], $_POST['val_CSS']));
        
        // Redirection du visiteur vers la page management.php
        header('Location: ../management_db.php');

    }

    function DBDelete($myDatabase) {

        // Connexion à la DB
        $myDatabase = ConnectPDOtoDB();
        
        // Préparation et envoi de la requête
        $sqlRequest = 'DELETE FROM style_css WHERE css_selector = :css_selector AND css_property = :css_property AND css_value = :css_value';
        $result = $myDatabase->prepare($sqlRequest);
        $result->execute(array(
                'css_selector' => $_POST['sel_CSS'],
                'css_property' => $_POST['pro_CSS'],
                'css_value' => $_POST['val_CSS']
                ));
        
        // Redirection du visiteur vers la page management.php
        header('Location: ../management_db.php');

    }

// ARCHIVES

    // // Renvoie un tableau d'objet: [ {} {} ]
    //     echo json_encode($result->fetchAll());

    //     echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));

    //     function DBSelect() {
    //         $myDatabase = ConnectPDOtoDB();
            
    //         // $sqlRequest = 'SELECT titre, article, code FROM articles';
    //         // $sqlRequest = 'SELECT nom FROM jeux_video';
    //         $sqlRequest = 'SELECT * FROM jeux_video WHERE id = :id';

    //         // $result = $myDatabase->query($sqlRequest);
    //         $result = $myDatabase->prepare($sqlRequest);
    //         // $requete = $bdd->prepare("SELECT * FROM Client WHERE email = :email");

    //         // On lie la variable $email définie au-dessus au paramètre :email de la requête préparée
    //         $result->bindValue(':id', $_GET['id'], PDO::PARAM_STR);
    //         // $requete->bindValue(':email', $email, PDO::PARAM_STR);

    //         // Retourne un objet PDOStatement.
    //         // $result->execute(array($_POST['table']));
    //         $result->execute();

    //         // Préparation et envoi de la requête
    //         // $sqlRequest = 'INSERT INTO style_css (css_selector, css_property, css_value) VALUES(?, ?, ?)';
    //         // $result = $myDatabase->prepare($sqlRequest);
    //         // $result->execute(array($_POST['sel_CSS'], $_POST['pro_CSS'], $_POST['val_CSS']));
            
    //         echo json_encode($result->fetchAll());
    //     }

// DOCS

?>