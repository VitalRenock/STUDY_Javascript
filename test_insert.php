<?php include("includes/connect_db.php"); ?>

<?php

$myDatabase = ConnectPDOtoDB();                 // Connexion à la DB avec PDO

// Insertion du message à l'aide d'une requête préparée
$req = $myDatabase->prepare('INSERT INTO style_css (css_selector, css_property, css_value) VALUES(?, ?, ?)');
$req->execute(array($_POST['sel_CSS'], $_POST['pro_CSS'], $_POST['val_CSS']));

// Redirection du visiteur vers la page du minichat
header('Location: index.php');

?>