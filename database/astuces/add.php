<?php
// Session inexistante
if (!($_SESSION["membre"]["pseudo"])) {
    header("Location: ../../../index.php");
}

if (isset($_POST) && !empty($_POST)) {
    if (
        isset($_POST['domaines']) && !empty($_POST['domaines'])
        && isset($_POST['sujet']) && !empty($_POST['sujet'])
        && isset($_POST['astuce']) && !empty($_POST['astuce'])
        && isset($_POST['pseudo']) && !empty($_POST['pseudo'])
    ) {

        require_once('../base/connexion.php');

        $domaines = strip_tags(stripslashes(trim($_POST['domaines'])));
        $sujet = strip_tags(stripslashes(trim($_POST['sujet'])));
        $astuce = strip_tags(stripslashes(trim($_POST['astuce'])));
        $pseudo = strip_tags(stripslashes(trim($_POST['pseudo'])));

        $sql = 'INSERT INTO astuces (`domaines`, `sujet`, `astuce`, `pseudo`) VALUES (:domaines, :sujet, :astuce, :pseudo)';

        $query = $db->prepare($sql);
        $query->bindValue(':domaines', $domaines, PDO::PARAM_STR);
        $query->bindValue(':sujet', $sujet, PDO::PARAM_STR);
        $query->bindValue(':astuce', $astuce, PDO::PARAM_STR);
        $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);

        $query->execute();

        require_once('../base/deconnexion.php');
        header('Location: ../../fiches/culture.php');
    }
}
