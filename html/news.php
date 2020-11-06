<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Redaction</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../javascript/ScriptRecherche.js"></script>
    <script type="text/javascript" src="../javascript/ScriptCalendrier.js"></script>
</head>
<header>
    <h1 id="titre">HK News</h1>
    <nav>
        <ul id="menu">
            <li><a href="accueil.php" class="souligne elmtMenu" >Accueil</a></li>
            <li><a href="news.php" class="souligne elmtMenu" id="pageActuelle">News</a></li>
            <li><a href="redaction.php" class="souligne elmtMenu">Rédiger une news</a></li>
            <li><a href="contact.php" class="souligne elmtMenu">Contacts</a></li>
            <li><a href="authentification.php" class="souligne elmtMenu">Connexion</a></li>
        </ul>
    </nav>
</header>
<body>
    <div class="divFlexCol recherche">
        <div class="divFlexRow divColElt" id="divNomPrenom">
            <div class="divRowElt">
            <form method="post">
                <input type="text" name="recherche" placeholder="Recherche..." id="recherche" size="45" >
                <br/><br/>
               <input type="text" placeholder="Date début" value="" name="date1" id="champ_date1" size="12" maxlength="10">
                <div id="calendarMain1"></div>
                    <script type="text/javascript">
                        calInit("calendarMain1", "", "champ_date1", "jsCalendar", "day", "selectedDay");
                    </script>
                <input type="text" placeholder="Date fin" value="" name="date2" id="champ_date2" size="12" maxlength="10">
                <div id="calendarMain2"></div>
                    <script type="text/javascript">
                        calInit("calendarMain2", "", "champ_date2", "jsCalendar", "day", "selectedDay");
                    </script>
                <br/>
               <select name="theme" id="themeChoisi">
                    <option value="">--Choisir un thème--</option>
                </select>
                <br/>
                <input type="submit" name="Rechercher" value="Rechercher" onsubmit="">
            </form>
            </div>
        </div>
    </div>
    <section id="sectionArticle">
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