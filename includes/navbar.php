<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Jeu SEIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php 
          // Si l'utilisateur n'est pas connecté
          if(!isset($_SESSION['auth'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Se connecter</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">S'inscrire</a>
            </li>
            <?php
          }
        ?>
        <?php 
          // Si l'utilisateur est connecté
          if(isset($_SESSION['auth'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="actions/users/logoutAction.php">Se déconnecter</a>
            </li>
            <?php
          }
        ?>
      </ul>
    </div>
  </div>
</nav>