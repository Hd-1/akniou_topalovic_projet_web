<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../javascript/ScriptAuthentification.js">

    </script>
    <?php
        include('../php/ScriptAuthentification.php');
        testSession();
        if(isset($_POST['valider'])){
            $email = $_POST['email'];
            $motDePasse = $_POST['motDePasse'];
            authentification($email, $motDePasse);
        }
    ?>
</head>
<header class="noMargin">
    <h1 id="titre">HK News</h1>
	<nav>
		<ul id="menu">
			<li><a href="accueil.php" class="souligne elmtMenu" >Accueil</a></li>
			<li><a href="###" class="souligne elmtMenu">News</a></li>
			<li><a href="redaction.php" class="souligne elmtMenu">Rédiger une news</a></li>
            <li><a href="###" class="souligne elmtMenu">Contacts</a></li>
            <li id="boutonDeco"><a href="authentification.php" class="souligne elmtMenu" id="pageActuelle">Connexion</a></li>
		</ul>
	</nav>
</header>
<body class="centre noMargin">
    <div class="blackBorder marginBotAuto marginLeftAuto marginRightAuto marginTopAuth bgWhite" id="divAuth">
        <p>
            Authentification<br>
        </p>
        <form method="post">
        <div class="divFlexCol">
            <div class="divColElt">
                <input type="text" name="email" placeholder="Identifiant">
            </div>
            <div class="divColElt"v>
                <input type="password" name="motDePasse" placeholder="Mot de passe">
            </div>
            <div class="divColElt">
                <input type="submit" name="valider" value="Se connecter" onsubmit="return valider()">
            </div>
        </div>
        </form>
        <p>
            Nouveau sur HKNews? <br>
            <a href="creationCompte.php">Creer un compte</a>
        </p>
    </div>
</body>
</html>