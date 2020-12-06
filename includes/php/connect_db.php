<?php
    // TO DO: Placer des Try, Catch
    $myDatabase = ConnectPDOtoDB();

     function ConnectSQLItoDB(){
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
?>