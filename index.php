<!DOCTYPE html>
<html lang="en">
<?php
// Importer le head, la barre de navigation et connecter la base de données
include 'includes/head.php'; 
include 'includes/navbar.php';
require 'actions/database.php';

// Récuperation des pseudos et des scores associés
$getAllInfos = $bdd->prepare('SELECT pseudo, score FROM users');
$getAllInfos->execute();
$allInfos = $getAllInfos->fetchAll();

// Trier les scores dans l'ordre décroissant pour l'affichage
$score  = array_column($allInfos, 'score');
$pseudo  = array_column($allInfos, 'pseudo');
array_multisort($score, SORT_DESC, $allInfos)
?>

<body>
    <br><br>
    <div class="mx-auto" style="width: 230px;">
        <h1> scores : </h1>
    </div>
    <div class="mx-auto" style="width: 200px;">
        <br>
        <p class='fs-5'>
            <?php 
            // Itérer à travers la liste $allInfos afin d'afficher les scores
            foreach($allInfos as $item) {
                echo $item['pseudo'];
                ?>
                :
                <?php
                echo $item['score'];
                ?>
                <br>
                <?php
            }
            ?>
        </p>
    </div>
</body>
</html>
