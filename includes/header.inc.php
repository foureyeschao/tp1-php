<!-- Le fichier header.inc.php est le début d'une page HTML, définissant dynamiquement le titre et créant un lien vers le blog. -->

<html>

<head>
    <meta charset='utf-8'>
    <title><?= (isset($pageTitle)) ? $pageTitle : 'Top Tec Blog' ?></title>
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/blogStyle.css">
</head>



<body>
    <div class="container-fluid">
        <div class="blog__header mb-2">
            <div class="blog__logo-wrapper text-center mt-3">
                <img class="blog__logo-img" src="images/logo-blue.svg" alt="" />
            </div>

            <ul class="blog__nav mt-4">
                <li><a href="index.php">Accueil</a></li>
                <li>
                    <?php 
                        if ($user) { echo '<a href="logout.php">Logout</a>'; 
                        } else { echo '<a href="create-post.php">Créer blog</a>';}
                    ?>                 
                </li>
            </ul>
        </div>