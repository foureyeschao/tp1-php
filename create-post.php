<!-- Créer un article de blog -->

<?php

require("includes/utilities.inc.php");

$pageTitle = 'Création du blog';
$errorMessage = '';
$data = array();
$categoriesData = $pdo->select("categories",'id','ASC');
$categoriesData->setFetchMode(PDO::FETCH_CLASS,'Category');

include("includes/header.inc.php");

if(isset($_POST['titre']) && isset($_POST['texte']) && isset($_POST['categories'])) {
   $creatorId = 1;
   $postTitle = $_POST['titre'];
   $postContent = $_POST['texte'];
   $cid = $_POST['categories'];

   if(trim($postTitle)!=="" && trim($postContent)!=="") {
      $data = ['creatorId'=>$creatorId,'title'=>$postTitle,'content'=>$postContent,'cid'=>$cid];
      $insert = $pdo->insert('posts',$data);
      header("Location: index.php");
      die();

   }
   else {
    $errorMessage = "Il faut entrer des valeurs dans tous les champs.";
  }
} 
include("pages/create-post.html");