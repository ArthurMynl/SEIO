<?php
session_start();
// Vérification de la connexion avant de pouvoir acceder aux autres pages
if(!isset($_SESSION['auth'])){
    header('Location: index.php');
}
?>