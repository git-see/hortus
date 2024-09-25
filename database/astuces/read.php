<?php
// Session inexistante
if (!($_SESSION["membre"])) {
    header("Location: ../../../index.php");
}

require_once('../database/base/connexion.php');

$sql = 'SELECT * FROM astuces
ORDER BY created_at DESC ;';
$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);

require_once('../database/base/deconnexion.php');
