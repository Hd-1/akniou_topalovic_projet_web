<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HK News</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php
        session_start();
        include_once('../php/ScriptNews.php');
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

</body>