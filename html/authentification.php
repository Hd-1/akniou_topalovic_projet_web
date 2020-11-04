<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Authentification</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <?php
        include('../php/ScriptAuthentification.php');
        if(isset($_POST['valider'])){
            $email = $_POST['email'];
            $motDePasse = $_POST['motDePasse'];
            authentification($email, $motDePasse);
        }
    ?>
</head>

<body class="centre paddingTopAuth bgLightPurple">
    <div class="blackBorder bgWhite" id="divAuth">
        <p>
            Authentification<br>
        </p>
        <form method="post">
        <div class="divFlexCol">
            <div class="divColElt">
                <input type="text" name="email" placeholder="Identifiant">
            </div>
            <div class="divColElt"v>
                <input type="password" name="motDePasse" placeholder="Mot de passe">
            </div>
            <div class="divColElt">
                <input type="submit" name="valider" value="Se connecter">
            </div>
        </div>
        </form>
        <p>
            Nouveau sur HKNews? <br>
            <a href="creationCompte.php">Creer un compte</a>
        </p>
    </div>
</body>

</html>