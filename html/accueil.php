<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HK News</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php
        include_once('../php/ScriptAccueil.php');
    ?>
</head>
<header>
    <h1 id="titre"><a href='accueil.php'>HK News</a></h1>
    <nav>
        <ul id="menu">
            <li><a href="accueil.php" class="souligne elmtMenu" id="pageActuelle">Accueil</a></li>
            <li><a href="news.php" class="souligne elmtMenu">News</a></li>
            <li><a href="redaction.php" class="souligne elmtMenu">Rédiger une news</a></li>
            <li><a href="contact.php" class="souligne elmtMenu">Contacts</a></li>
            <?php testBoutonDeco(); ?> 
        </ul>
    </nav>
</header>
<body>
<section id="sectionArticle">
    <article id="articleIntro">
        <p>Ceci est l'intro</p>
        <img id="image0" src="./images/0.png" />
        <img id="image1" src="./images/1.png" />
        <img id="image2" src="./images/2.png" />
        <img id="image3" src="./images/3.png" />
    </article>
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
