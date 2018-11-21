<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP</title>
</head>
<body>
  <?php
  $name = 'mickael'; // variable de type string
  $age = 32; // variable de type interger
  function affName($name, $age) // déclaration de la function affName
  {
  echo 'bonjour' . ' ' . $name . ' ' . 'tu as' . ' ' . $age . ' ' . 'ans';
  }
  echo affName($name, $age)//  affichage de mes paramètres
  ?>
</body>
</html>
