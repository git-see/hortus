<?php
session_start();
if (isset($_POST) && !empty($_POST)) {
    if (
        isset($_POST["pseudo"], $_POST["mdp"])
        && !empty($_POST["pseudo"] && !empty($_POST["mdp"]))
    ) {

        require_once "../base/connexion.php";

        $connexionCompte = $db->prepare("SELECT * FROM membres WHERE pseudo= :pseudo");
        $connexionCompte->bindValue(':pseudo', $_POST["pseudo"]);
        $connexionCompte->execute();
        $membre = $connexionCompte->fetch();

        if ($_POST["pseudo"] !== $membre['pseudo']) {
            header("Location: /../../connexion_inscription/connexion.php");
            $_SESSION['erreur'] = "Saisie incorrecte";
            sleep(1);
        }

        $mdprecu = $_POST["mdp"];
        $mdprecup = $membre['mdp'];
        if (!password_verify($mdprecu, $mdprecup)) {
            header("Location: /../../connexion_inscription/connexion.php");
            $_SESSION['erreur'] = "Saisie incorrecte";
            sleep(1);
        }

        $_SESSION["membre"] = [
            "id" => $membre["id"],
            "pseudo" => $membre["pseudo"],
            "mail" => $membre["mail"],
            "dateInscrit" => $membre["dateInscrit"]
        ];

    }
    if (($_POST["pseudo"] !== $_SESSION['membre']['pseudo']) || (!password_verify($mdprecu, $mdprecup))) {
        unset($_SESSION["membre"]);
    } elseif (($_POST["pseudo"] == $_SESSION['membre']['pseudo']) && (password_verify($mdprecu, $mdprecup))) {
        header("Location: /index.php");
    }
} else {
    header("Location: /../../connexion_inscription/connexion.php");
    die('Vous devez remplir tous les champs');
}
