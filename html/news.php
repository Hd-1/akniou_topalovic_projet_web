<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Redaction</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../javascript/ScriptRecherche.js"></script>
    <script type="text/javascript" src="../javascript/ScriptCalendrier.js"></script>
    <?php 
        include_once('../php/ScriptNews.php');
    ?>
</head>
<header>
    <h1 id="titre"><a href='accueil.php'>HK News</a></h1>
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
                <input type="text" name="recherche" placeholder="Recherche dans le titre..." id="recherche" size="45" >
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
                    <?php affichageTheme(); ?>
                </select>
                <br/>
                <button class="boutonRecherche" type="submit" name="Rechercher" onsubmit=""><span>Rechercher</span></button>
            </form>
            </div>
        </div>
    </div>
    <section id="sectionArticle">
        <?php afficheNews(); ?>
    </section>