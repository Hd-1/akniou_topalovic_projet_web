<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script></script>
    <?php
    session_start();
    include_once('../php/ScriptContact.php');
    if(isset($_POST["envoi"])){
        envoiMail();
    }
        if(isset($_POST['valider'])){
            authentification($_POST['email'], $_POST['motDePasse']);
        }
        
        ?>
</head>
<header>
    <h1 id="titre"><a href='accueil.php'>HK News</a></h1>
    <nav>
        <ul id="menu">
            <li><a href="accueil.php" class="souligne elmtMenu" >Accueil</a></li>
            <li><a href="news.php" class="souligne elmtMenu">News</a></li>
            <li><a href="redaction.php" class="souligne elmtMenu">Rédiger une news</a></li>
            <li><a href="contact.php" class="souligne elmtMenu" id="pageActuelle">Contact</a></li>
            <?php testBoutonDeco();?>
        </ul>
    </nav>
</header>
<body>
    <div class="contactStyle">
        <form id="contact" method="post">
	        <fieldset>
                <legend>Vos coordonnées</legend>
		            <p>Nom :<input type="text" id="nom" name="nom"></p>
		            <p>Email :<input type="text" id="email" name="email"></p>
	            </fieldset>
        	    <fieldset><legend>Votre message </legend>
	        	    <p>Objet :<input type="text" id="objet" name="objet"></p>
	        	    <p>Message :<br/><textarea id="message" name="message" cols="60" rows="10"></textarea></p>
	            </fieldset>
            <button type="submit" class="bouton" name="valider"><span>Envoyer</span></button>
    </form>
</div>

</body>