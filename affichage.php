<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <title>Partie8_Exo4</title>
</head>
<body>
  <?php
  if (isset($_COOKIE['login']) && isset($_COOKIE['password'])){
 ?>
    <p>Affichage des Cookies</p>
  <p>Le cookie login à pour valeur<?= $_COOKIE['login']; ?></p>
  <p>Le cookie password à pour valeur<?= $_COOKIE['password']; ?></p>
  <?php
}
   ?>
  </body>
</html>
