<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Redaction</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
  <!--  <?php
        include('../php/redaction.php');
        if(isset($_POST['valider'])){
            authentification($_POST['email'], $_POST['motDePasse']);
        }
    ?>-->
    <script type="text/javascript" src="../javascript/ScriptRedaction.js"></script>
</head>
<header>
    <h1 id="titre">HK News</h1>
    <nav>
        <ul id="menu">
            <li><a href="accueil.php" class="souligne elmtMenu" >Accueil</a></li>
            <li><a href="news.php" class="souligne elmtMenu" id="pageActuelle">News</a></li>
            <li><a href="redaction.php" class="souligne elmtMenu">Rédiger une news</a></li>
            <li><a href="contact.php" class="souligne elmtMenu">Contacts</a></li>
            <li><a href="authentification.php" class="souligne elmtMenu">Connexion</a></li>
        </ul>
    </nav>
</header>
<body>
    <
    <section id="sectionArticle">
        <article class="articleNews">
            <h1>Ceci est le titre de l'article</h1>
            <h2>Ceci est la date et l'auteur de l'article</h2>
            <p>Ceci est le contenu de l'article</p>
            <a class="souligne" href="###">en savoir plus...</a>
        </article>
    
        <article class="articleNews">
            <h1>Ceci est le titre de l'article</h1>
            <h2>Ceci est la date et l'auteur de l'article</h2>
            <p>Ceci est le contenu de l'article</p>
            <a class="souligne" href="###">en savoir plus...</a>
        </article>
    </section>
    