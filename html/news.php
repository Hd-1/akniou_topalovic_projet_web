<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>News</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../javascript/ScriptCalendrier.js"></script>
    <?php 
        session_start();
        include_once('../php/ScriptNews.php');
    ?>
</head>
<header>
    <?php boutonAdmin(); ?> 
    <div><h1 id="titre"><a class='marginCotesAuto' href='accueil.php'>HK News</a></h1></div>
    <nav>
        <ul id="menu">
            <li><a href="accueil.php" class="souligne elmtMenu" >Accueil</a></li>
            <li><a href="news.php" class="souligne elmtMenu" id="pageActuelle">News</a></li>
            <li><a href="redaction.php" class="souligne elmtMenu">Rédiger une news</a></li>
            <li><a href="contact.php" class="souligne elmtMenu">Contacts</a></li>
            <?php testBoutonDeco();?>
        </ul>
    </nav>
</header>
<body aria-autocomplete="off">
    <div class="divFlexCol recherche">
        <div class="divFlexRow divColElt" id="divNomPrenom">
            <form method="post" action="news.php">
                <input type="text" name="rechTitre" placeholder="Recherche dans le titre..." id="recherche" size="45" >
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
               <select name="rechTheme" id="themeChoisi">
                    <option value="">--Choisir un thème--</option>
                    <?php affichageTheme(); ?>
                </select>
                <br/>
                <button type='submit' class="bouton" type="submit" name="rechercher"><span>Rechercher</span></button>
            </form>
        </div>
    </div>
    <?php 
        if(!isset($_POST['rechercher'])){
        afficheNews();}
        else if(isset($_POST['rechercher'])){
            if((isset($_POST['rechTitre']))||(isset($_POST['date1']))||(isset($_POST['date2']) || (isset($_POST['rechTheme'])))){
                $table = null;
                if(trim($_POST['rechTitre'])!= ""){
                    $titrenews = $_POST['rechTitre'];
                    $table = filtreTitre($titrenews);
                } else if((trim($_POST['date1']) != "") && (trim($_POST['date2'])) != ""){
                    $dateDeb = $_POST['date1'];
                    $dateFin = $_POST['date2'];
                    $table = filtreDuree($dateDeb, $dateFin);
                } else if(trim($_POST['date1'])!= "") {
                    $dateDeb = $_POST['date1'];
                    $table = filtreDateDeb($dateDeb);
                } else if(trim($_POST['date2'])!= "") {
                    $dateFin = $_POST['date2'];
                    $table = filtreDateFin($dateFin);
                } else if(trim($_POST['rechTheme'])!= ""){
                    $idtheme = $_POST['rechTheme'];
                    $table = filtreTheme($idtheme);
                }
                afficheNews($table);
            }
        }
        
    ?>
</body>
<footer>
    <a href="accueil.php" class="souligne">Accueil</a><br/>
    <a href="news.php" class="souligne">News</a><br/>
    <a href="redaction.php" class="souligne ">Rédiger une news</a><br/>
    <a href="contact.php" class="souligne">Contacts</a><br/>
    <p>HK Corp. ®</p>
</footer>
</html>