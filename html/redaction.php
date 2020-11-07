<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Redaction</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php
        session_start();
        include_once('../php/ScriptRedaction.php');
        testSession();
        if(isset($_POST['valider'])){
            $idtheme = $_POST['theme'];
            $titrenews = $_POST['titre'];
            $datenews = date('Y-m-d');
            $textenews = $_POST['textenews'];
            creeNews($idtheme, $titrenews, $datenews, $textenews);
        }
    ?>
    <script type="text/javascript" src="../javascript/ScriptRedaction.js"></script>
</head>
<header>
    <h1 id="titre"><a href='accueil.php'>HK News</a></h1>
    <nav>
        <ul id="menu">
            <?php boutonAdmin(); ?> 
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
        <p class="marginCotesAuto" id="titreRedac">Redaction</h1>
    <form method="post">
            <div class="divFlexRow divColElt" id="divNomPrenom">
                <div class="divRowElt">
                    <select name='theme'>
                        <option value="">--Choisir un thème--</option>
                        <?php affichageTheme(); ?>
                    </select>
                    <input type='text' name='titre' placeholder="Titre" size=50px maxlength="300" onkeyup="resteTitre(this.value);"><br/>
                    <p class="nbrCaractereTitre"><span id="caracteresTitre" >300</span> caractères restants</p>
                    <br/><br/>
                    <textarea name="textenews"rows="40" cols="100" placeholder="Ecrire l'article..." maxlength="5000" onkeyup="resteRedaction(this.value);"></textarea><br/>
                    <span id="caracteresRedaction">5000</span> caractères restants
                    <br/><br/>
                </div>
            </div>
                <button type="submit" class="bouton" name="valider"><span>Terminer</span></button>
    </form>
    </div>
    <div id="sectionArticle">
        <h1 id="titreVosArticlesRedac">Vos Articles</h1>
        <?php afficheNews(); ?>
    </div>
</body>
</html>