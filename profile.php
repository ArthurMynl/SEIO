<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
// Importer le head, la barre de navigation et connecter la base de données
include 'includes/head.php'; 
include 'includes/navbar.php';
require 'actions/database.php';
?>
<body>
    <br><br>
    <div class="container">
        <h2>Bonjour <?php echo $_SESSION['pseudo'] ?> 
        ton score est de : <?php echo $_SESSION['score'] ?> </h2>
        <form method='post'>
            <input type="submit" class="btn btn-primary" name="jouer" value="Marquer des points"></button>
        </form>
    </div>
    
<?php 
    if(isset($_POST['jouer'])){
        $_SESSION['score'] += 1;
    }
?>

</body>
</html>