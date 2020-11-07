<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php
        session_start();
        include_once('../php/requetesSQL.php');
        include_once('../php/ScriptAdmin.php');
        testAdmin();
        if(isset($_POST['supprimer'])){
            if(isset($_POST['idnews'])){
                $idnews = $_POST['idnews'];
                $_SESSION['idnews'] = $idnews;
                header("Location:http://localhost/projet/akniou_topalovic_projet_web/php/suppressionNews.php");
            }
        }
        if(isset($_POST['modifier'])){
            if(isset($_POST['idnews'])){
                $idnews = $_POST['idnews'];
                $news = getNewsById($idnews);
                if($news != null){
                    $_SESSION['idnews'] = $idnews;
                    header("Location:http://localhost/projet/akniou_topalovic_projet_web/html/modificationNews.php");
                }
            }
        }
    ?>
</head>
<header class="noMargin">
    <h1 id="titre"><a href='accueil.php'>HK News</a></h1>
	<nav>
        <ul id="menu">
			<li><a href="accueil.php" class="souligne elmtMenu" >Accueil</a></li>
			<li><a href="news.php" class="souligne elmtMenu">News</a></li>
			<li><a href="redaction.php" class="souligne elmtMenu">Rédiger une news</a></li>
            <li><a href="contact.php" class="souligne elmtMenu">Contact</a></li>
            <li id="boutonDeco"><a href="authentification.php" class="souligne elmtMenu" id="pageActuelle">Deconnexion</a></li>
        </ul>
	</nav>
</header>
<body class="centre noMargin">
    <p>
        Panneau administration<br>
    </p>
    <div class="blackBorder bgWhite" id="divDeco">
        <form method="post">
        <div class="divFlexCol">
            <div>
                <input type="text" name="idnews" placeholder="ID News">
            </div>
            <div class="divColElt">
                <input type="submit" name="supprimer" value="Supprimer">
                <input type="submit" name="modifier" value="Modifier">
            </div>
        </div>
        </form>
    </div>
</body>
</html>