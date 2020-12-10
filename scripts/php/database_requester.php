<?php

$myDatabase = ConnectPDOtoDB();
RequestByPOST($myDatabase);


function ConnectSQLItoDB() {

    $host = '127.0.0.1';
    $user = 'root';
    $password = '';
    $database = 'vitalrenock_web';
    $port = 3306;

    $DBtoSQLI = mysqli_connect($host, $user, $password, $database, $port);
    if (mysqli_connect_errno()) {
        echo "Echec lors de la connexion à MySQL : " . mysqli_connect_error();
    }

    return $DBtoSQLI;

}

function ConnectPDOtoDB() {
    // Détails: 
    // Débugger une erreur de requête SQL: "array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)"
    // Try, Catch pour ne pas afficher une erreur avec les logs de connexions tentés

    try {
        $DBtoPDO = new PDO('mysql:host=localhost;dbname=vitalrenock_web;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        return $DBtoPDO;
    }
    catch (Exception $e) {
        echo "Impossible de se connecter à la base de données: Logs de connexion incorrects.";
    }

}

function RequestByPOST($myDatabase) {

    $sql = "SELECT ".$_POST['columns']." FROM ".$_POST['table'];
    $response = $myDatabase->query($sql);

    echo json_encode($response->fetchAll(PDO::FETCH_ASSOC));
    $response->closeCursor();
    
}

function ReturnPOSTValues() {

    echo $_POST['message'] . ' - ' . $_POST['pseudo'];

}

// DEPRECATED!!!

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
    
?>