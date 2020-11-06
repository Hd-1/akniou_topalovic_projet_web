<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Redaction</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../javascript/ScriptAuthentification.js"> </script>
    <?php
        session_start();
        include_once('../php/ScriptDeconnexion.php');
        if(isset($_POST['deconnexion'])){
            deconnexion();
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
    <div class="blackBorder bgWhite" id="divDeco">
        <p>
            Etes-vous sur de vouloir vous déconnecter ?<br>
        </p>
        <form method="post">
        <div class="divFlexCol">
            <div class="divColElt">
                <input type="submit" name="deconnexion" value="Se déconnecter">
            </div>
        </div>
        </form>
    </div>
</body>
</html>