<!-- Supprimer un article de blog spécifié -->
<?php
require("includes/utilities.inc.php");

if(isset($_GET['id'])) {
  
  $postId = $_GET['id'];
  $pdo->delete('posts',$postId,'index.php');

}