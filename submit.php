<?php
var_dump($_POST) ;

    // Nettoyage du message
    $message = $_POST['message'];


    echo $message ;
    
    // Écriture du message dans le fichier
    file_put_contents('messages.txt', $message . PHP_EOL, FILE_APPEND);
    
    // Redirection vers la page d'accueil
    header('Location: index.php');
    exit;
?>
