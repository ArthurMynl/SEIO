<?php
// connexion a la database
try{
    $bdd = new PDO('mysql:host=localhost;dbname=seio;charset=utf8;', 'root', 'root');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}
?>