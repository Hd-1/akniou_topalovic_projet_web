<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Redaction</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php
        include('../php/ScriptDeconnexion.php');
        if(isset($_POST['deconnexion'])){
            deconnexion();
        }
    ?>
</head>
<header class="noMargin">
    <h1 id="titre">HK News</h1>
	<nav>
		<ul id="menu">
			<li>
                <a href="accueil.php" class="souligne elmtMenu" >Accueil</a>
            </li>

			<li>
                <a href="###" class="souligne elmtMenu">News</a>
            </li>

			<li>
                <a href="redaction.php" class="souligne elmtMenu">Rédiger une news</a>
            </li>

            <li>
                <a href="###" class="souligne elmtMenu">Contacts</a>
            </li>

            <li>
                <a href="authentification.php" class="souligne elmtMenu" id="pageActuelle">Connexion</a>
            </li>
		</ul>
	</nav>
</header>
<body class="centre noMargin">
    <div class="blackBorder bgWhite" id="divDeco">
        <p>
            Vous êtes déjà connecté !<br>
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