<!--  -->

<?php

session_start();

//Charger automatiquement les classes à partir de "classe"
function class_loader($class) {
  
  require ("classes/" . $class . '.php');
}

spl_autoload_register('class_loader');

//verifier un usager dans la session de user

$user = (isset($_SESSION['user'])) ? $_SESSION['user'] : null;

try {
  //Créer un objet PDO
  $pdo = new Crud;

} catch (PDOException $e) {
  echo $e;
}


