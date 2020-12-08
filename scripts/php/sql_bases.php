<?php

// $sqlRequest = "UPDATE style_css SET css_value = 'orange' WHERE css_value = 'green'";
// $sqlRequest = "SELECT DATABASE()";

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

        // RÉCUPÉRER DES DONNÉES
            // ENVOI DIRECT
                // $result = $myDatabase->query($sqlRequest);

            // PRÉPARATION ET ENVOI
                // $inputUser = $_GET["console"];                      // On récupère une valeur de l'utilisateur
                // if (isset($inputUser)) {                            // On vérifie l'existence dans la table avec 'isset()'
                //     $result = $myDatabase->prepare($sqlRequest);    // On prépare la requête
                //     $result->execute(array($inputUser));            // Envoi
                //     DisplayResult($result);
                // }
                // else
                //     echo "Cette valeur n'existe pas dans la table";

        // AJOUTER DES DONNÉES
            // ENVOI DIRECT
                // $myDatabase->exec($sqlRequest);

            // PRÉPARATION ET ENVOI
                // $result = $myDatabase->prepare($sqlRequest);
                // $result->execute(array(
                //     'nom' => "Scrap Méchanic",
                //     'possesseur' => "Renock",
                //     'console' => "PC",
                //     'prix' => 45,
                //     'nbre_joueurs_max' => "1",
                //     'commentaires' => "Meilleur jeu de construction"
                //     ));

        // MODIFIER DES DONNÉES
            // ENVOI DIRECT
                // $myDatabase->exec($sqlRequest);

            // PRÉPARATION ET ENVOI
                // $result = $myDatabase->prepare($sqlRequest);
                // $result->execute(array(
                //     'nvprix' => 30,
                //     'nv_nb_joueurs' => 16,
                //     'nom_jeu' => 'Scrap Méchanic'
                //     ));

        // SUPPRIMER DES DONNÉES
            // ENVOI DIRECT
                // $myDatabase->exec($sqlRequest);

            // PRÉPARATION ET ENVOI
                // $result = $myDatabase->prepare($sqlRequest);
                // $result->execute(array(
                //     'nom_jeu' => 'Scrap Méchanic'
                //     ));
        
        // AFFICHAGE
            function DisplayResult($result) {
                // On affiche la valeur de la colonne voulue ('nom')
                while ($row = $result->fetch()) {
                    // On parcours chaque ligne ($row) de la table
                    echo "<p>" . $row["nom"] . " - " . $row["console"] . "</p>";    
                }
            }
            
?>