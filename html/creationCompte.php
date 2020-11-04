<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Creation de compte</title>
    <link rel="stylesheet" href="../css/style.css">
    <?php
        include('../php/creationCompte.php');
        if(isset($_POST['valider'])){
            authentification($_POST['email'], $_POST['motDePasse']);
        }
    ?>
</head>

<body class="centre paddingTopAuth bgLightPurple">
    <div class="blackBorder bgWhite" id="divAuth">
    <p>
        Creation d'un compte
    </p>
    <form method="post" action="../php/nouveauCompte.php">
        <div class="divFlexCol">
            <div class="divFlexRow divColElt" id="divNomPrenom">
                <div class="divRowElt"><input type="text" name="nom" placeholder="Nom" size=10px></div>
                <div><input type="text" name="prenom" placeholder="Prénom" size=10px></div>
            </div>
            <div class="divColElt">
                <td colspan="2"><input type="text" name="email" placeholder="Adresse e-mail" size=26px></td>
            </div>
            <div class="divColElt">
                <td colspan="2"><input type="text" name="confirmationEmail" placeholder="Confirmer l'adresse e-mail" size=26px></td>
            </div>
            <div class="divColElt">
                <td colspan="2"><input type="password" name="motDePasse" placeholder="Mot de passe" size=26px></td>
            </div>
            <div class="divColElt">
                <td colspan="2"><input type="password" name="confirmationMotDePasse" placeholder="Confirmer le mot de passe" size=26px></td>
            </div>
            <div class="divColElt">
                <td><input type="submit" name="valider" value="S'incrire" ></td>
            <div>
        </div>
    </form>
    <p>
        Déjà inscrit? <a href="authentification.php">S'identifier</a>.
    </p>
</div>
</body>

</html>