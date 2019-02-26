<?php

    require_once ('config.php'); # Storing username and password.
    session_start();

?>

<!DOCTYPE html>

<html lang="fr">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Connexion</title>
        <link rel="icon" type="image/png" href="favicon.png" />

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
        <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css">

        <style>
            html,
            body {
                height: 100%;
            }
            body {
                display: -ms-flexbox;
                display: -webkit-box;
                display: flex;
                -ms-flex-align: center;
                -ms-flex-pack: center;
                -webkit-box-align: center;
                align-items: center;
                -webkit-box-pack: center;
                justify-content: center;
                background-color: #fff;
            }
            .form-signin {
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
            }
            .form-signin .form-control {
                position: relative;
                box-sizing: border-box;
                height: auto;
                padding: 10px;
                font-size: 16px;
                z-index: 999;
            }
            #particles-js {
                width: 100%;
                height: 100%;
                overflow: hidden;
                position: absolute;
                z-index: -2;
            }
            @media only screen and (max-device-width:480px) {
                .card {
                    margin: 1em
                }
            }
        </style>

    </head>

    <body class="text-center">

        <div class="card">
            <div class="card-body">
                <form action="" method="post" name="Login_Form" class="form-signin">

                    <img src="https://via.placeholder.com/400x100?text=.img-fluid" class="img-fluid mb-5" alt="logo">
                    <?php

                        # Check if login form has been submitted
                        if(isset($_POST['Submit'])){

                            # Check if form's username and password matches
                            if( ($_POST['Identifiant'] == $Identifiant) && ($_POST['Password'] == $Password) ) {

                                # Success: Set session variables and redirect to protected page
                                $_SESSION['Identifiant'] = $Identifiant;

                                $_SESSION['Active'] = true;
                                header("location:index.php");
                                exit;

                            } else {
                                ?>
                                <!-- Show an error alert -->
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <strong>Identifiant</strong> ou <strong>Mot de passe</strong> incorrect, veuillez r&eacute;essayer.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php
                            }
                        }
                        
                    ?>

                    <label for="inputIdentifiant" class="sr-only">Identifiant</label>
                    <input name="Identifiant" type="Identifiant" id="inputIdentifiant" class="form-control" placeholder="Identifiant" required autofocus>

                    <label for="inputPassword" class="sr-only">Password</label>
                    <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>

                    <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block mt-4" type="submit">Se connecter</button>

                </form>
            </div>
        </div>

        <div id="particles-js"></div>

        <!-- Jquery slim version -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.btn').on('click', function () {
                    var $this = $(this);
                    var loadingText = 'Connexion ...';
                    if ($(this).html() !== loadingText) {
                        $this.data('original-text', $(this).html());
                        $this.html(loadingText);
                    }
                    setTimeout(function () {
                        $this.html($this.data('original-text'));
                    }, 2000);
                });
            })

            particlesJS('particles-js',

                {
                    "particles": {
                        "number": {
                            "value": 60
                        },
                        "move": {
                            "enable": true,
                            "speed": 10
                        },
                        "shape": {
                            "type": "image",
                            "image": {
                                "src": "code.png"
                            }
                        }
                    }
                }

            );
        </script>

    </body>

</html>
