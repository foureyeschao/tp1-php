<!-- Affichez le contenu spécifique de l'article de blog. -->

<?php

require("includes/utilities.inc.php");
if (isset($_GET["id"])) {

      $articleId = $_GET["id"];
      $query = $pdo->selectId('posts', 'id', $articleId);

      $query->setFetchMode(PDO::FETCH_CLASS, 'Post');
      $articleData = $query->fetch();
      $pageTitle = htmlentities($articleData->getTitle(), ENT_COMPAT, 'Windows-1252');
      include('includes/header.inc.php');

      echo "<div class='blog__list'><div class='card mb-4' style='width: 60vw;'>
                      <div class='card-body'>
                      <h5 class='card-title'>";
      echo htmlentities($articleData->getTitle(), ENT_COMPAT, 'Windows-1252');
      echo "</h5>
                      <h6 class='card-subtitle mb-4 text-muted'>
                      Auteur: ";
      echo  htmlspecialchars($articleData->getCreatorId()) . "<span class='span--modify'> " . htmlentities($articleData->getDatePublished(), ENT_COMPAT, 'ISO-8859-15') . "</span>";
      echo "</h6>
                      <p class='ard-text'>";
      echo  htmlentities($articleData->getContent(), ENT_COMPAT, 'Windows-1252') . "</p>";

      echo "
                      </div>
                  </div>
                </div>";
}
