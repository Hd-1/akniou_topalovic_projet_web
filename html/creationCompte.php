<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Creation de compte</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script language="javascript" type="text/javascript" src="../javascript/ScriptCreationCompte.js"></script>
    <?php
        include('../php/ScriptCreationCompte.php');
        if(isset($_POST['valider'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $confirmationEmail = $_POST['confirmationEmail'];
            $motDePasse = $_POST['motDePasse'];
            $confirmationMotDePasse = $_POST['confirmationMotDePasse'];
            creationCompte($nom, $prenom, $email, $confirmationEmail, $motDePasse, $confirmationMotDePasse);
        }
    ?>
</head>
<header>
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
                <a href="redaction.php" class="souligne elmtMenu">rédiger une news</a>
            </li>

            <li>
                <a href="###" class="souligne elmtMenu">contacts</a>
            </li>

            <li>
                <a href="authentification.php" class="souligne elmtMenu" id="pageActuelle">connexion</a>
            </li>
        </ul>
    </nav>
</header>
<body class="centre bgLightPurple">
    <div class="blackBorder bgWhite" id="divAuth">
    <p>
        Creation d'un compte
    </p>
    <form method="post" onsubmit="return Valider()" autocomplete="off">
        <div class="divFlexCol">
            <div class="divFlexRow divColElt" id="divNomPrenom">
                <div class="divRowElt"><input id="nom" type="text" name="nom" placeholder="Nom" size=10px></div>
                <div><input type="text" id="prenom"  name="prenom" placeholder="Prénom" size=10px></div>
            </div>
            <div class="divColElt">
                <td colspan="2"><input id="email"  type="text" name="email" placeholder="Adresse e-mail" size=26px></td>
            </div>
            <div class="divColElt">
                <td colspan="2"><input type="text" name="confirmationEmail" placeholder="Confirmer l'adresse e-mail" size=26px></td>
            </div>
            <div class="divColElt">
                <td colspan="2"><input id="motDePasse" type="password" name="motDePasse" placeholder="Mot de passe" size=26px></td>
            </div>
            <div class="divColElt">
                <td colspan="2"><input type="password" name="confirmationMotDePasse" placeholder="Confirmer le mot de passe" size=26px></td>
            </div>
            <div class="divColElt">
                <td><input type="submit" name="valider" value="S'incrire"></td>
            <div>
        </div>
    </form>
    <p>
        Déjà inscrit? <a href="authentification.php">S'identifier</a>.
    </p>
</div>
</body>

</html>