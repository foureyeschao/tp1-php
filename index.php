<!-- Entrée de projet PHP -->

<?php
require __DIR__ . '/includes/utilities.inc.php';
$pageTitle = "Accueil";
include_once __DIR__ . '/includes/header.inc.php';


$articleData = $pdo->select("posts");
$articleData->setFetchMode(PDO::FETCH_CLASS,'Post');
include_once __DIR__ . '/pages/accueil.html';



include_once __DIR__ . '/includes/footer.inc.php';






