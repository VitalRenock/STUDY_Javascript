<?php

    // Je demande un jeton de connexion à la DB
    include("connect_db.php");

    // echo $_POST['message'] . ' sur le site ' . $_POST['pseudo'];
    // DBRequester2($myDatabase);
    
    DBRequester3($myDatabase);

    function DBRequester3($myDatabase) {

        // REQUETE DE LA BASE DE DONNEES:
        
        // A CONTINBUER
        // Recuperer les donnees recues ds $_POST (table, columns) et soite faire une requete prepare, soite un switch avec requete, soite un hybride des deux et retourner le resultat en JSON au client pour qu'on le convertisse en tanleau HMTL avec ParseJSONtoHTMLTable(), si OK, parser le JSON en Article à la place (<article></article>).

            $response = $myDatabase->prepare("SELECT colums=':colums' FROM selectedTable=':table' WHERE nom=':nom'");
            $response->execute(array(
                'table' => $_POST['table'],
                'columns' => $_POST['columns']
            ));

            // OU

            switch ($_POST['table']) {
                case 'articles':
                    # code...
                    break;
                
                case 'style_css':
                    # code...
                    break;
                
                case 'jeux_video':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }

        // PUIS

        // // Encodage au format JSON
        // echo json_encode($response->fetchAll(PDO::FETCH_ASSOC));

        // ENFIN
        
        $response->closeCursor();
    }



    // function DBRequester2($myDatabase) {

    //     // REQUETE DE LA BASE DE DONNEES:
        
    //         // $response:
    //         // Type = PDOStatement: CLASSE qui représente une requête préparée et, une fois exécutée, le jeu de résultats associé sous forme d'OBJET.

    //         $response = $myDatabase->query('SELECT * FROM jeux_video');


    //     // SANS FETCH

    //         // $row est un TABLEAU qui contient champ par champ les valeurs de la première entrée. Il faut faire une boucle pour parcourir les entrées une à une. Chaque fois que vous appelez $reponse->fetch()  , vous passez à l'entrée suivante. La boucle est donc répétée autant de fois qu'il y a d'entrées dans votre table.

    //         // foreach ($response as $row) {
    //         //         foreach ($row as $cell)
    //         //             echo $cell . "\t";
    //         //         echo "\n";
    //         //     }

    //         // Retourne une longue string
            
    //     // FETCH(): Renvoie la PROCHAINE ENTRÉE de la $reponse sous forme d'un tableau. ex: [Jean, 33ans, Végétarien]
                
    //         // $row est un TABLEAU qui contient champ par champ les valeurs de la première entrée. Il faut faire une boucle pour parcourir les entrées une à une. Chaque fois que vous appelez $reponse->fetch()  , vous passez à l'entrée suivante. La boucle est donc répétée autant de fois qu'il y a d'entrées dans votre table.

    //         // '$row = $response->fetch()': récupère une nouvelle entrée et place son contenu dans $donnees et vérifie si $donnees vaut vrai ou faux.

    //         // while ($row = $response->fetch()) {
    //         //     foreach ($row as $cell)
    //         //         echo $cell . "\t";
    //         //     echo "\n";
    //         // }

    //         // Retourne une longue string
        
    //     // FETCHALL(): convertit le résultat de la requête en tableau, classe ou objet

    //         // // PDO::FETCH_BOTH (défaut): retourne un tableau indexé par les noms de colonnes et aussi par les numéros de colonnes, commençant à l'index 0, comme retournés dans le jeu de résultats.
    //         // echo $response->fetchAll(PDO::FETCH_BOTH);

    //         // // PDO::FETCH_ASSOC: retourne un tableau indexé par le nom de la colonne comme retourné dans le jeu de résultats. 
    //         // echo $response->fetchAll(PDO::FETCH_ASSOC);
            
    //         // // PDO::FETCH_CLASS: retourne une nouvelle instance de la classe demandée, liant les colonnes du jeu de résultats aux noms des propriétés de la classe et en appelant le constructeur par la suite, sauf si PDO::FETCH_PROPS_LATE est également donné.
    //         // echo $response->fetchAll(PDO::FETCH_CLASS);
            
    //         // // PDO::FETCH_OBJ : retourne un objet anonyme avec les noms de propriétés qui correspondent aux noms des colonnes retournés dans le jeu de résultats.
    //         // echo $response->fetchAll(PDO::FETCH_OBJ);

    //         // // Encodage au format JSON
    //         // echo json_encode($response->fetchAll(PDO::FETCH_ASSOC));

    //     // FERMETURE du curseur d'analyse des résultats:

    //         // TOUJOURS CLOTURER LA REQUETE quand on a finit de la traiter afin d'éviter des soucis à la prochaine requête!
    //         $response->closeCursor();
    // }



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
                $response = $myDatabase->query($_GET['request']); // On utilise ->query pour une requete SELECT
                echo json_encode($response->fetchAll(PDO::FETCH_ASSOC));
                break;
            case 'select':
                // Je fais la requete
                $response = $myDatabase->query($_GET['request']); // On utilise ->query pour une requete SELECT
                echo json_encode($response->fetchAll(PDO::FETCH_ASSOC));
                break;
            case 'insert':
                $response = $myDatabase->exec($_GET['request']); // On utilise ->exec pour une requete INSERT INTO
                // Je ne retourne rien
            break;
            case 'delete':
                $response = $myDatabase->exec($_GET['request']); // On utilise ->exec pour une requete DELETE
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
        $response = $myDatabase->query($sqlRequest);
        
        echo json_encode($response->fetchAll());                          // json_encode retourne un json au client.
        // echo json_encode($response->fetchAll(PDO::FETCH_ASSOC));       // Valable
        // echo json_encode($response->fetchAll(PDO::FETCH_CLASS));       // Valable

    }
    
    function DBInsertInto($myDatabase) {

        // Connexion à la DB
        $myDatabase = ConnectPDOtoDB();

        // Préparation et envoi de la requête
        $sqlRequest = 'INSERT INTO style_css (css_selector, css_property, css_value) VALUES(?, ?, ?)';
        $response = $myDatabase->prepare($sqlRequest);
        $response->execute(array($_POST['sel_CSS'], $_POST['pro_CSS'], $_POST['val_CSS']));
        
        // Redirection du visiteur vers la page management.php
        header('Location: ../management_db.php');

    }

    function DBDelete($myDatabase) {

        // Connexion à la DB
        $myDatabase = ConnectPDOtoDB();
        
        // Préparation et envoi de la requête
        $sqlRequest = 'DELETE FROM style_css WHERE css_selector = :css_selector AND css_property = :css_property AND css_value = :css_value';
        $response = $myDatabase->prepare($sqlRequest);
        $response->execute(array(
                'css_selector' => $_POST['sel_CSS'],
                'css_property' => $_POST['pro_CSS'],
                'css_value' => $_POST['val_CSS']
                ));
        
        // Redirection du visiteur vers la page management.php
        header('Location: ../management_db.php');

    }

// ARCHIVES

    // // Renvoie un tableau d'objet: [ {} {} ]
    //     echo json_encode($response->fetchAll());

    //     echo json_encode($response->fetchAll(PDO::FETCH_ASSOC));

    //     function DBSelect() {
    //         $myDatabase = ConnectPDOtoDB();
            
    //         // $sqlRequest = 'SELECT titre, article, code FROM articles';
    //         // $sqlRequest = 'SELECT nom FROM jeux_video';
    //         $sqlRequest = 'SELECT * FROM jeux_video WHERE id = :id';

    //         // $response = $myDatabase->query($sqlRequest);
    //         $response = $myDatabase->prepare($sqlRequest);
    //         // $requete = $bdd->prepare("SELECT * FROM Client WHERE email = :email");

    //         // On lie la variable $email définie au-dessus au paramètre :email de la requête préparée
    //         $response->bindValue(':id', $_GET['id'], PDO::PARAM_STR);
    //         // $requete->bindValue(':email', $email, PDO::PARAM_STR);

    //         // Retourne un objet PDOStatement.
    //         // $response->execute(array($_POST['table']));
    //         $response->execute();

    //         // Préparation et envoi de la requête
    //         // $sqlRequest = 'INSERT INTO style_css (css_selector, css_property, css_value) VALUES(?, ?, ?)';
    //         // $response = $myDatabase->prepare($sqlRequest);
    //         // $response->execute(array($_POST['sel_CSS'], $_POST['pro_CSS'], $_POST['val_CSS']));
            
    //         echo json_encode($response->fetchAll());
    //     }

// DOCS

    // Pour afficher le contenu d'une superglobale et voir ce qu'elle contient, le plus simple est d'utiliser la fonction print_r  , puisqu'il s'agit d'un array.

    // Il est nécessaire d'entourer les apostrophes par des antislashs:
    // ex: 'SELECT nom FROM jeux_video WHERE possesseur=\'Patrick\''

    // la méthode GET est  seulement faite pour récupérer des données, alors que des méthodes comme POST et PUT sont faites pour en envoyer et en recevoir.

?>