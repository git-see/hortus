<?php
session_start();

//Déconnxeion de la base de données
$db = null;

//Supprimer la session si elle existe
if (($_SESSION["membre"]) || ($_SESSION["membre"]['pseudo'])) {
    unset($_SESSION["membre"]);
    header("Location: ../../index.php");
    die();
}
header("Location: ../../index.php");
die();
