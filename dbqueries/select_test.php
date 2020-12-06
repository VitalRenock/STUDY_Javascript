<?php

    include("../includes/php/connect_db.php");

    DBSelect();

    function DBSelect() {
        $myDatabase = ConnectPDOtoDB();

        
        // $sqlRequest = 'SELECT titre, article, code FROM articles';
        $sqlRequest = 'SELECT * FROM jeux_video';
        $result = $myDatabase->query($sqlRequest);
        
        echo json_encode($result->fetchAll());
        // echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));       // Valable
        // echo json_encode($result->fetchAll(PDO::FETCH_CLASS));       // Valable
    }

?>