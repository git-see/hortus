<?php
session_start();

require_once('../database/astuces/read.php');

$titre = "Recettes";

require_once('../templates/header.php');
require_once('../templates/fiches.php');
require_once('../templates/footer.php');
?>