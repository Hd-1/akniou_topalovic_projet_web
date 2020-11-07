<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HK News</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php
        session_start();
        include_once('../php/ScriptAccueil.php');
        include_once('../php/ScriptNews.php');
    ?>
</head>
<header>
<?php boutonAdmin(); ?> 
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
<div id="articleIntro">
        <div class=imageIntroSlide>
            <ol>
                <li>
                    <div class="imageIntroSlide-image">
                        <img id="image0" src="./images/musique.jpg" />
                    </div>
                </li>
                <li>
                    <div class="imageIntroSlide-image">
                        <img id="image2" src="./images/sante.jpg" />
                    </div>
                </li>
                <li>
                    <div class="imageIntroSlide-image">
                    <img id="image3" src="./images/sport.jpg" />
                    </div>
                </li>
                <li>
                    <div class="imageIntroSlide-image">
                    <img id="image3" src="./images/technologie.jpg" />
                    </div>
                </li>
            </ol>
        </div>
        <div id="messageIntro" class="marginCotesAuto">Bienvenue chez HKNews, le premier site de news ouvert à tout le monde. Pour ajouter votre news à notre site vous devrez d'abord créer un compte.
            Ainsi vous pourrez accéder à la section rédiger une news. Attention à ce que vous mettez les autres utilisateurs pourront report votre news si elle est jugé inapproprié
            via la section contact. Il suffit de mettre le numéro de la news qui se trouve en bas de l'article en objet et de nous dire en quoi elle est inapproprié. Suite à ça,
            notre admin pourra la modifer ou la supprimer.
        </div>
</div>
<div>
        <?php afficheNewsAccueil(); ?>
</div>