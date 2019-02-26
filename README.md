# PHP-Login

Simple, sans base de données.

## Comment ca marche ?

1. Ouvrez `config.php` et remplacez les variables `$Identifiant` et `$Password`.
2. Customisez et c'est tout ! 

## Framework

* [Material Design for Bootstrap 4.1.1](https://fezvrasta.github.io/bootstrap-material-design/).
* [Particles.js 2.0.0](https://vincentgarreau.com/particles.js/).  

###### EXTRA:

* Si vous souhaitez protéger une page par mot de passe, ajoutez simplement cet extrait de code au début de celui-ci :

```php
<?php
  session_start();
  if($_SESSION['Active'] == false){ # Redirige l'utilisateur vers login.php s'il n'est pas identifié
    header("location:login.php");
    exit;
  }
?>
```

## Démo

[Juste ici !](https://vps.raspgot.fr/_loginDbFree)

```
Username: admin
Password: admin
```