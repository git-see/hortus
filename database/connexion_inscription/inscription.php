<?php

if (isset($_POST) && !empty($_POST)) {

    if (
        isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
        && isset($_POST["mail"]) && !empty($_POST["mail"])
        && isset($_POST["mdp"]) && !empty($_POST["mdp"])
    ) {
        $pseudo = trim($_POST["pseudo"]);
        $pseudo = strip_tags($_POST["pseudo"]);
        $pseudo = stripslashes($_POST["pseudo"]);
        $pseudo = htmlentities($_POST["pseudo"]);

        if (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {
            echo "L'adresse mail est invalide";
        }

        $mdp = password_hash($_POST["mdp"], PASSWORD_ARGON2ID);

        require_once "../base/connexion.php";

        // Pseudo déjà existant
        $sql = "SELECT pseudo FROM membres WHERE pseudo= '$pseudo'";
        $req = $db->prepare($sql);
        $req->execute();
        $count = $req->rowCount();
        if (
            $count >= 1
        ) {
            header("Location: /connexion_inscription/inscription.php");
        }

        $recupNouvelEntree = $db->prepare("INSERT INTO membres (pseudo, mail, mdp) VALUES (:pseudo, :mail, '$mdp')");

        $recupNouvelEntree->bindValue(':pseudo', $pseudo);
        $recupNouvelEntree->bindValue(':mail', $_POST['mail']);
        $recupNouvelEntree->execute();

        $id = $db->lastInsertId();
    }

    header("Location: /connexion_inscription/connexion.php");
} else {
    echo "Vous devez remplir tous les champs";
    header("Location: ../connexion_inscription/inscription.php");
}
