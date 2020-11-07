<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Modification News</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php
        session_start();
        include_once('../php/ScriptModificationNews.php');
        include_once('../php/ScriptAdmin.php');
        testAdmin();
        $idnews = $_SESSION['idnews'];
        $news = getNewsById($idnews);
        $idtheme = $news->getIdtheme();
        $titrenews = $news->getTitrenews();
        $datenews = $news->getDatenews();
        $textenews = $news->getTextenews();
        $idredacteur = $news->getIdredacteur();
        if(isset($_POST['valider'])){
            $idtheme = $_POST['theme'];
            $titrenews = $_POST['titre'];
            $datenews = date('Y-m-d');
            $textenews = $_POST['textenews'];
            modifierNews($idnews, $idtheme, $titrenews, $datenews, $textenews, $idredacteur);
        }
    ?>
    <script type="text/javascript" src="../javascript/ScriptRedaction.js"></script>
</head>
<header>
    <h1 id="titre"><a href='accueil.php'>HK News</a></h1>
    <nav>
        <ul id="menu">
            <li><a href="accueil.php" class="souligne elmtMenu">Accueil</a></li>
            <li><a href="news.php" class="souligne elmtMenu">News</a></li>
            <li><a href="redaction.php" class="souligne elmtMenu" id="pageActuelle">Rédiger une news</a></li>
            <li><a href="contact.php" class="souligne elmtMenu">Contacts</a></li>
            <?php testBoutonDeco();?> 
        </ul>
    </nav>
</header>
<body>
    <div id="divRedaction">
        <h1>Redaction</h1>
    <form method="post">
        <div class="divFlexCol">
            <div class="divFlexRow divColElt" id="divNomPrenom">
                <div class="divRowElt">
                    <input type='text' name='titre' placeholder="Titre" size=50px maxlength="300" onkeyup="resteTitre(this.value);"><br/>
                    <span id="caracteresTitre">300</span> caractères restants
                    <select name='theme'>
                        <option value="">--Choisir un thème--</option>
                        <?php affichageTheme(); ?>
                    </select>
                    <br/>
                    <textarea name="textenews"rows="10" cols="70" placeholder="Ecrire l'article..." maxlength="5000" onkeyup="resteRedaction(this.value);"></textarea><br/>
                    <span id="caracteresRedaction">5000</span> caractères restants
                </div>
            </div>
                <td><button type="submit" class="bouton" name="valider"><span>Terminer</span></button></td>
            <div>
        </div>
    </form>
</div>
</body>

</html>