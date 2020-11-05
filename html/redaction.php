<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Redaction</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php
        include('../php/ScriptRedaction.php');
        testSession();
    ?>
    <script type="text/javascript" src="../javascript/ScriptRedaction.js"></script>
</head>
<header>
    <h1 id="titre">HK News</h1>
    <nav>
        <ul id="menu">
            <li><a href="accueil.php" class="souligne elmtMenu">Accueil</a></li>
            <li><a href="###" class="souligne elmtMenu">News</a></li>
            <li><a href="redaction.php" class="souligne elmtMenu" id="pageActuelle">Rédiger une news</a></li>
            <li><a href="###" class="souligne elmtMenu">Contacts</a></li>
            <?php testBoutonDeco(); ?> 
        </ul>
    </nav>
</header>
<body>
    <div id="divAuth">
    <p>
        Redaction
    </p>
    <form method="post" action="../php/redaction.php">
        <div class="divFlexCol">
            <div class="divFlexRow divColElt" id="divNomPrenom">
                <div class="divRowElt">
                    <input type="text" name="titre" placeholder="Titre" size=50px maxlength="300" onkeyup="resteTitre(this.value);"><br/>
                    <span id="caracteresTitre">300</span> caractères restants
                    <textarea rows="10" cols="70" placeholder="Ecrire l'article..." maxlength="5000" onkeyup="resteRedaction(this.value);"></textarea><br/>
                    <span id="caracteresRedaction">5000</span> caractères restants
                </div>
            </div>
                <td><input type="submit" name="valider" value="Terminer" ></td>
            <div>
        </div>
    </form>
</div>
</body>

</html>