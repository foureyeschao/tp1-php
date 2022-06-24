<!--Mettre à jour un article de blog spécifié  -->

<?php

require("includes/utilities.inc.php");

$pageTitle = 'Mise à jour le blog';
$errorMessage = '';
$categoriesData = $pdo->select("categories", 'id', 'ASC');
$categoriesData->setFetchMode(PDO::FETCH_CLASS, 'Category');
$data = array();
$postId = $_REQUEST['id'];
$postUpdate = $pdo->selectId('posts', 'id', $postId);
$postUpdate->setFetchMode(PDO::FETCH_CLASS, 'Post');
$postData = $postUpdate->fetch();

include("includes/header.inc.php");

if (isset($_POST['titre']) && isset($_POST['texte']) && isset($_POST['categories']) && isset($_REQUEST['id'])) {

   $creatorId = 1;
   $postTitle = $_POST['titre'];
   $postContent = $_POST['texte'];
   $cid = $_POST['categories'];

   if (trim($postTitle) !== "" && trim($postContent) !== "") {
      $data = ['id' => $postId, 'creatorId' => $creatorId, 'title' => $postTitle, 'content' => $postContent, 'cid' => $cid];
      $update = $pdo->update('posts', $data, 'id', $postId);
      header("Location: index.php");
      die();
   } else {
      $errorMessage = "Il faut entrer des valeurs dans tous les champs.";
   }
}
include("pages/update-post.html");
