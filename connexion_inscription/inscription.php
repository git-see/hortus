<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="connexion.css" />
</head>

<body>
    <header>
        <div>
            <!-- HEADER - UP -->
            <div id="headerUp">
                <div>
                    <img
                        id="logoHortus"
                        src="/images/hortus-logo2.png"
                        alt="Logo, fleur et coccinelle" />
                </div>

                <div id="logoConnect">
                    <nav>
                        <ul>
                            <li><a href="/index.php">Accueil</a></li>
                            <li><a href="/index.php#qui">Qui sommes nous?</a></li>
                            <li><a href="#footerDiv">Contact</a></li>
                            <li>
                                <a href="/connexion_inscription/connexion.php"><img
                                        id="connectLogo"
                                        src="/images/connexion.png"
                                        alt="Connexion" /></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <!-- HEADER - CENTER -->
            <div id="headerCenter">
                <p>
                    "Amoureux de la Nature, amis conscients de l'impact de nos actes sur
                    notre quotidien,<br />
                    partagez vos astuces afin d'entretenir nos jardins, en symbiose avec
                    notre environnement"<br />Hortus
                </p>
            </div>
        </div>
    </header>

    <?php
    require_once('../templates/inscription.php');
    require_once('../templates/footer.php');
    ?>
