<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HK News</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script></script>
    <?php
    if(isset($_POST["envoi"]))
        include_once('../php/ScriptContact.php');
        if(isset($_POST['valider'])){
            authentification($_POST['email'], $_POST['motDePasse']);
        }?>
</head>
<header>
    <h1 id="titre"><a href='accueil.php'>HK News</a></h1>
    <nav>
        <ul id="menu">
            <li><a href="accueil.php" class="souligne elmtMenu" >Accueil</a></li>
            <li><a href="news.php" class="souligne elmtMenu">News</a></li>
            <li><a href="redaction.php" class="souligne elmtMenu">Rédiger une news</a></li>
            <li><a href="contact.php" class="souligne elmtMenu" id="pageActuelle">Contact</a></li>
            <li id="boutonDeco"><a href="authentification.php" class="souligne elmtMenu">Connexion</a></li>
        </ul>
    </nav>
</header>
<body>
<form id="contact" method="post">
	<fieldset><legend>Vos coordonnées</legend>
		<p>Nom :<input type="text" id="nom" name="nom"></p>
		<p>Email :<input type="text" id="email" name="email"></p>
	</fieldset>
 
	<fieldset><legend>Votre message :</legend>
		<p>Objet :<input type="text" id="objet" name="objet"></p>
		<p>Message :<br/><textarea id="message" name="message" cols="30" rows="8"></textarea></p>
	</fieldset>
 
	<div style="text-align:center;"><input type="submit" name="envoi" value="Envoyer le formulaire !" /></div>
</form>

</body>