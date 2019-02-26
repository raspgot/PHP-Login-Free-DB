<?php

  session_start();

  if($_SESSION['Active'] == false){ # Redirects user to Login.php if not logged in
    header("location:login.php");
	  exit;
  }

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>HELLO !</title>
  <link rel="icon" type="image/png" href="favicon.png" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">

</head>

<body>

  <div class="container">
  
    <div class="header clearfix">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08"
          aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="https//raspgot.fr">Raspgot <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://example.com/">Action</a>
                <a class="dropdown-item" href="https://example.com/">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://example.com/">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="jumbotron">
      <h1>Status: Logged in</h1>
      <p class="lead">Et juste comme ça, vous avez créé votre première zone protégée par mot de passe avec PHP et un
        peu de connaissances en HTML. Changez votre nom d'utilisateur et votre mot de passe dans login.php et
        essayez-le !</p>
      <p><a class="btn btn-raised btn-lg btn-danger" href="logout.php" role="button">Déconnexion</a></p>
    </div>

    <footer class="footer">
      <p>&copy; Raspgot 2019</p>
    </footer>

  </div>

  <!-- Jquery slim version -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"></script>

</body>

</html>