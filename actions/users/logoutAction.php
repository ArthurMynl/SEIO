<?php
session_start();
require('../database.php');
// Enregistrer les scores dans la database
$updateScore = $bdd->prepare("UPDATE `users` SET score=? WHERE id=?");
$updateScore->execute(array($_SESSION['score'], $_SESSION['id']));
// Déconnecter toutes les sessions
$_SESSION = [];
session_destroy();
header('Location: ../../index.php');
?>