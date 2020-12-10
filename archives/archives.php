<?php

// ÉCRIR DES REQUÊTES SQL
    // MOT-CLÉS:
        // Ces mots-clés s'éxecutent dans cet ordre précis!
        // 1) SELECT: Pour choisir les colonnes
        // 2) FROM: Pour choisir la table
        // 3) WHERE: Pour filtrer les résultats (ex: WHERE nomColonne = "valeurSouhaite")
        // 4) AND, OR: Pour filtrer encore plus (ex: WHERE nomColonneA = "valeurSouhaiteA" OR nomColonneB = "valeurSouhaiteB")
        // 5) ORDER BY: Trie les données (on peut également trié selon une colonne qui n'a pas été SELECT)
        // 6) DESC: Pour un tri décroissant
        // 7) LIMIT: Pour limiter à un certain nombre les résultats collectés (ex: 'LIMIT 5, 10' affiche de la 6ème à la 15ème entrée)

    // EXEMPLES DE REQUÊTE

        // RÉCUPÉRER DES DONNÉES
            // // Sélectionne une database???
            //     $sqlRequest = "SELECT DATABASE()";

            // // Collecte toutes les données d'une table
            //     $sqlRequest = "SELECT * FROM jeux_video";

            // // Collecte uniquement les données des colonnes sélectionnées d'une table          
            //     $sqlRequest = "SELECT nom, commentaires FROM jeux_video";
            
            // // Collecte et filtre les données des colonnes sélectionnées d'une table          
            //     $sqlRequest = "SELECT nom, console FROM jeux_video WHERE console = 'NES'";

            // // Collecte et multiple filtres sur les données des colonnes sélectionnées d'une table          
            //     $sqlRequest = "SELECT nom, console FROM jeux_video WHERE console = 'NES' OR console = 'PC'";

            // // Collecte et trie les données des colonnes sélectionnées d'une table selon une colonne non sélectionnée         
            //     $sqlRequest = "SELECT nom, console FROM jeux_video ORDER BY prix";
            
            // // Collecte et les données des colonnes sélectionnées d'une table et limite le nombre de résultats reçus     
            //     $sqlRequest = "SELECT nom, console FROM jeux_video LIMIT 10";
            
            // // Préparation d'une requête dont on ne connait pas encore toutes les valeurs (représenté par le '?')
            // $sqlRequest = "SELECT nom, console FROM jeux_video WHERE console = ?";
    
        // INSÉRER DES DONNÉES
            // // ENVOI DIRECT
            //     $sqlRequest = 'INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(\'Battlefield 1942\', \'Patrick\', \'PC\', 45, 50, \'2nde guerre mondiale\')';

            // // PRÉPARATION ET ENVOI
            //     $sqlRequest = 'INSERT INTO jeux_video(nom, possesseur, console, prix, nbre_joueurs_max, commentaires) VALUES(:nom, :possesseur, :console, :prix, :nbre_joueurs_max, :commentaires)';

        // MODIFIER DES DONNÉES
            // // ENVOI DIRECT
            // $sqlRequest = 'UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE nom = \'Battlefield 1942\'';

            // // PRÉPARATION ET ENVOI
            // $sqlRequest = 'UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu';

        // SUPPRIMER DES DONNÉES
            // // ENVOI DIRECT
            // $sqlRequest = 'DELETE FROM jeux_video WHERE nom = \'Battlefield 1942\'';

            // // PRÉPARATION ET ENVOI
            // $sqlRequest = 'DELETE FROM jeux_video WHERE nom = :nom_jeu';

// TRAITER DES REQUÊTES SQL
    
    // Méthode SQLI

        // $myDatabase = ConnectSQLItoDB();                // Connexion à la DB avec SQLI

        // $result = $myDatabase->query($sqlRequest);      // Envoi d'une requête et stockage du résultat
        
        // while($row = $result->fetch_assoc())            // On parcours chaque ligne ($row) de la table
        //     echo '<p>'.$row['nom'].'</p>';              // On affiche la valeur de la colonne voulue ('nom')

        // // if ($result->num_rows > 0) 
        // // while($row = $result->fetch_assoc())         // On parcours chaque ligne ($row) de la table
        // //     echo '<p>'.$row['commentaires'].'</p>';  // On affiche la valeur de la colonne voulue ('nom')
        // // else 
        // // echo "0 results";
    
    
    // Méthode PDO

        // $myDatabase = ConnectPDOtoDB();                 // Connexion à la DB avec PDO

        // // RÉCUPÉRER DES DONNÉES
        //     // ENVOI DIRECT
        //         $result = $myDatabase->query($sqlRequest);

        //     // PRÉPARATION ET ENVOI
        //         $inputUser = $_GET["console"];                      // On récupère une valeur de l'utilisateur
        //         if (isset($inputUser)) {                            // On vérifie l'existence dans la table avec 'isset()'
        //             $result = $myDatabase->prepare($sqlRequest);    // On prépare la requête
        //             $result->execute(array($inputUser));            // Envoi
        //             DisplayResult($result);
        //         }
        //         else
        //             echo "Cette valeur n'existe pas dans la table";

        // // AJOUTER DES DONNÉES
        //     // ENVOI DIRECT
        //         $myDatabase->exec($sqlRequest);

        //     // PRÉPARATION ET ENVOI
        //         $result = $myDatabase->prepare($sqlRequest);
        //         $result->execute(array(
        //             'nom' => "Scrap Méchanic",
        //             'possesseur' => "Renock",
        //             'console' => "PC",
        //             'prix' => 45,
        //             'nbre_joueurs_max' => "1",
        //             'commentaires' => "Meilleur jeu de construction"
        //             ));

        // // MODIFIER DES DONNÉES
        //     // ENVOI DIRECT
        //         $myDatabase->exec($sqlRequest);

        //     // PRÉPARATION ET ENVOI
        //         $result = $myDatabase->prepare($sqlRequest);
        //         $result->execute(array(
        //             'nvprix' => 30,
        //             'nv_nb_joueurs' => 16,
        //             'nom_jeu' => 'Scrap Méchanic'
        //             ));

        // // SUPPRIMER DES DONNÉES
        //     // ENVOI DIRECT
        //         $myDatabase->exec($sqlRequest);

        //     // PRÉPARATION ET ENVOI
        //         $result = $myDatabase->prepare($sqlRequest);
        //         $result->execute(array(
        //             'nom_jeu' => 'Scrap Méchanic'
        //             ));
        
        // // AFFICHAGE
        //     function DisplayResult($result) {
        //         // On affiche la valeur de la colonne voulue ('nom')
        //         while ($row = $result->fetch()) {
        //             // On parcours chaque ligne ($row) de la table
        //             echo "<p>" . $row["nom"] . " - " . $row["console"] . "</p>";    
        //         }
        //     }

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

    // // Requete SHOW et SELECT
    //     // 1) On utilise ->query pour une requete SHOW et SELECT
    //             $response = $myDatabase->query($_GET['request']);
    //     // 2) On retourne le tableau associatif au format JSON
    //             echo json_encode($response->fetchAll(PDO::FETCH_ASSOC));

    // // Requete INSERT INTO et DELETE
    //     // 1) // On utilise ->exec pour une requete INSERT INTO et DELETE
    //             $response = $myDatabase->exec($_GET['request']);
    //     // 2) On retourne rien ou ce que l'on veut.

// Documentation Sur PDO

    function DocumentationSurPDO($myDatabase) {

        // REQUETE DE LA BASE DE DONNEES:
        
            // $response:
            // Type = PDOStatement: CLASSE qui représente une requête préparée et, une fois exécutée, le jeu de résultats associé sous forme d'OBJET.

            $response = $myDatabase->query('SELECT * FROM jeux_video');


        // SANS FETCH

            // $row est un TABLEAU qui contient champ par champ les valeurs de la première entrée. Il faut faire une boucle pour parcourir les entrées une à une. Chaque fois que vous appelez $reponse->fetch()  , vous passez à l'entrée suivante. La boucle est donc répétée autant de fois qu'il y a d'entrées dans votre table.

            // foreach ($response as $row) {
            //         foreach ($row as $cell)
            //             echo $cell . "\t";
            //         echo "\n";
            //     }

            // Retourne une longue string
            
        // FETCH(): Renvoie la PROCHAINE ENTRÉE de la $reponse sous forme d'un tableau. ex: [Jean, 33ans, Végétarien]
                
            // $row est un TABLEAU qui contient champ par champ les valeurs de la première entrée. Il faut faire une boucle pour parcourir les entrées une à une. Chaque fois que vous appelez $reponse->fetch()  , vous passez à l'entrée suivante. La boucle est donc répétée autant de fois qu'il y a d'entrées dans votre table.

            // '$row = $response->fetch()': récupère une nouvelle entrée et place son contenu dans $donnees et vérifie si $donnees vaut vrai ou faux.

            // while ($row = $response->fetch()) {
            //     foreach ($row as $cell)
            //         echo $cell . "\t";
            //     echo "\n";
            // }

            // Retourne une longue string
        
        // FETCHALL(): convertit le résultat de la requête en tableau, classe ou objet

            // // PDO::FETCH_BOTH (défaut): retourne un tableau indexé par les noms de colonnes et aussi par les numéros de colonnes, commençant à l'index 0, comme retournés dans le jeu de résultats.
            // echo $response->fetchAll(PDO::FETCH_BOTH);

            // // PDO::FETCH_ASSOC: retourne un tableau indexé par le nom de la colonne comme retourné dans le jeu de résultats. 
            // echo $response->fetchAll(PDO::FETCH_ASSOC);
            
            // // PDO::FETCH_CLASS: retourne une nouvelle instance de la classe demandée, liant les colonnes du jeu de résultats aux noms des propriétés de la classe et en appelant le constructeur par la suite, sauf si PDO::FETCH_PROPS_LATE est également donné.
            // echo $response->fetchAll(PDO::FETCH_CLASS);
            
            // // PDO::FETCH_OBJ : retourne un objet anonyme avec les noms de propriétés qui correspondent aux noms des colonnes retournés dans le jeu de résultats.
            // echo $response->fetchAll(PDO::FETCH_OBJ);

            // // Encodage au format JSON
            // echo json_encode($response->fetchAll(PDO::FETCH_ASSOC));

        // FERMETURE du curseur d'analyse des résultats:

            // TOUJOURS CLOTURER LA REQUETE quand on a finit de la traiter afin d'éviter des soucis à la prochaine requête!
            $response->closeCursor();
    }


?>

<!-- Exemples pour les formulaires -->

<form action="post" method="index.php">
    <p>
        <label for="text_field">Champ de texte:</label><br>
        <input type="text" name="text_field" id="text_field"><br>
        <hr><br>
        <label for="size_attribute">L'attribut "size":</label><br>
        <input type="text" name="size_attribute" id="size_attribute" size="30"><br>
        <hr><br>
        <label for="maxlenght_attribute">L'attribut "maxlenght":</label><br>
        <input type="text" name="maxlenght_attribute" id="maxlenght_attribute" maxlength="6"><br>
        <hr><br>
        <label for="value_attribute">L'attribut "value":</label><br>
        <input type="text" name="value_attribute" id="value_attribute" value="Renock"><br>
        <hr><br>
        <label for="placeholder_attribute">L'attribut "placeholder":</label><br>
        <input type="text" name="placeholder_attribute" id="placeholder_attribute" placeholder="Entrez votre pseudo"><br>
        <hr><br>
        <label for="password_field">Champ pour mot de passe:</label><br>
        <input type="password" name="password_field" id="password_field"><br>
        <hr><br>
        <label for="text_area">Zone de texte</label><br>
        <textarea name="text_area" id="text_area"></textarea><br>
        <hr><br>
        <label for="rows_attribute">L'attribut "rows" pour les zones de texte</label><br>
        <textarea name="rows_attribute" id="rows_attribute" rows="10"></textarea><br>
        <hr><br>
        <label for="cols_attribute">L'attribut "cols" pour les zones de texte</label><br>
        <textarea name="cols_attribute" id="cols_attribute" cols="30"></textarea><br>
        <hr><br>
        <label for="default_value_textarea">Valeur par défaut pour les zones de texte</label><br>
        <textarea name="default_value_textarea" id="default_value_textarea" rows="10" cols="30">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde itaque quibusdam quod impedit nihil eum praesentium consequuntur, non sunt aut officia quidem ipsum nobis nisi iste excepturi natus ipsa repudiandae.</textarea><br>
        <hr><br>
        <label for="email_field">Champ pour un email:</label><br>
        <input type="email" name="email_field" id="email_field"><br>
        <hr><br>
        <label for="url_field">Champ pour une url:</label><br>
        <input type="url" name="url_field" id="url_field"><br>
        <hr><br>
        <label for="tel_field">Champ pour un numéro de téléphone:</label><br>
        <input type="tel" name="tel_field" id="tel_field"><br>
        <hr><br>
        <label for="number_field">Champ pour un chiffre:</label><br>
        <input type="number" name="number_field" id="number_field"><br>
        <hr><br>
        <label for="min_number_attribute">L'attribut "min" pour un chiffre:</label><br>
        <input type="number" name="min_number_attribute" id="min_number_attribute" min="10"><br>
        <hr><br>
        <label for="max_number_attribute">L'attribut "max" pour un chiffre:</label><br>
        <input type="number" name="max_number_attribute" id="max_number_attribute" max="10"><br>
        <hr><br>
        <label for="step_number_attribute">L'attribut "step" pour un chiffre:</label><br>
        <input type="number" name="step_number_attribute" id="step_number_attribute" step="10"><br>
        <hr><br>
        <label for="range_field">Un curseur:</label><br>
        <input type="range" name="range_field" id="range_field"><br>
        <hr><br>
        <label for="min_range_attribute">L'attribut "min" pour un curseur:</label><br>
        <input type="range" name="min_range_attribute" id="min_range_attribute" min="10"><br>
        <hr><br>
        <label for="max_range_attribute">L'attribut "max" pour un curseur:</label><br>
        <input type="range" name="max_range_attribute" id="max_range_attribute" max="10"><br>
        <hr><br>
        <label for="step_range_attribute">L'attribut "step" pour un curseur:</label><br>
        <input type="range" name="step_range_attribute" id="step_range_attribute" step="10"><br>
        <hr><br>
        <label for="color_field">Un sélecteur de couleur:</label><br>
        <input type="color" name="color_field" id="color_field"><br>
        <hr><br>
        <label for="date_field">Un sélecteur de date:</label><br>
        <input type="date" name="date_field" id="date_field"><br>
        <hr><br>
        <label for="time_field">Un sélecteur d'heure:</label><br>
        <input type="time" name="time_field" id="time_field"><br>
        <hr><br>
        <label for="week_field">Un sélecteur de semaine:</label><br>
        <input type="week" name="week_field" id="week_field"><br>
        <hr><br>
        <label for="month_field">Un sélecteur de mois:</label><br>
        <input type="month" name="month_field" id="month_field"><br>
        <hr><br>
        <label for="datetime_field">Un sélecteur de date et heure (avec décalage horaire):</label><br>
        <input type="datetime" name="datetime_field" id="datetime_field"><br>
        <hr><br>
        <label for="datetime-local_field">Un sélecteur de date et heure (sans décalage horaire):</label><br>
        <input type="datetime-local" name="datetime-local_field" id="datetime-local_field"><br>
        <hr><br>
        <label for="search_field">Une zone de recherche:</label><br>
        <input type="search" name="search_field" id="search_field"><br>
        <hr><br>
        <label for="checkbox_field">Une case à cocher:</label><br>
        <input type="checkbox" name="checkbox_field" id="checkbox_field"><br>
        <hr><br>
        <label for="checked_attribute">Une case déjà cochée:</label><br>
        <input type="checkbox" name="checked_attribute" id="checked_attribute" checked><br>
        <hr><br>
        <p>Une zone de sélection unique:</p>
        <label for="radio_field_A">Choix A:</label><br>
        <input type="radio" name="radio_field" value="radio_field_A" id="radio_field_A"><br>
        <label for="radio_field_B">Choix B:</label><br>
        <input type="radio" name="radio_field" value="radio_field_B" id="radio_field_B"><br>
        <label for="radio_field_C">Choix C:</label><br>
        <input type="radio" name="radio_field" value="radio_field_C" id="radio_field_C"><br>
        <label for="radio_checked">Choix pré-coché:</label><br>
        <input type="radio" name="radio_field" value="radio_checked" id="radio_checked" checked><br>
        <hr><br>
        <label for="button_type">Un bouton:</label><br>
        <input type="button" name="button_type" id="button_type" value="Clique ici"><br>
        <hr><br>
        <label for="file_type">Un sélecteur de fichier:</label><br>
        <input type="file" name="file_type" id="file_type" accept=".doc, .jpg, .png"><br>
        <hr><br>
        <!-- Continuer avec les autres attributs du type "file" puis avec les autres types et attributs... -->
    </p>
</form>