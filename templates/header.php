<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo strip_tags(stripslashes(htmlentities(trim($titre)))) ?></title>
  <link rel="stylesheet" href="/index.css" /> 
  <link rel="stylesheet" href="index.css" /> 
  
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
                <?php if ((!isset($_SESSION["membre"])) || (!isset($_SESSION["membre"]['id']))) : ?>
                  <a href="database/connexion_inscription/connexion.php"><img
                      id="connectLogo"
                      src="/images/connexion.png"
                      alt="Connexion" /></a>
                <?php elseif ($_SESSION["membre"]['id']) : ?>
                  <a href="/database/connexion_inscription/deconnexion.php" class="tooltip"><img
                      id="connectLogo"
                      src="/images/connexion.png"
                      alt="Déconnexion" />
                    <span class="tooltiptext">Me déconnecter</span></a>
                  <h4 style="text-align:center">Bienvenue<br><?php echo strip_tags(stripslashes(htmlentities(trim($_SESSION["membre"]["pseudo"])))) ?></h4>
                <?php endif; ?>
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

      <!-- HEADER - DOWN -->
      <div id="headerDown">
        <nav>
          <ul>
            <?php if (!isset($_SESSION["membre"])) : ?>
              <li>
                <a href="index.php" class="tooltip">
                  <span class="tooltiptext">Vous devez vous connecter</span>
                  Culture</a>
              </li>
              <li>
                <a href="index.php" class="tooltip">
                  <span class="tooltiptext">Vous devez vous connecter</span>
                  Nuisibles</a>
              </li>
              <li>
                <a href="index.php" class="tooltip">
                  <span class="tooltiptext">Vous devez vous connecter</span>
                  Rescousse</a>
              </li>
              <li>
                <a href="index.php" class="tooltip">
                  <span class="tooltiptext">Vous devez vous connecter</span>
                  Arrosage</a>
              </li>
              <li>
                <a href="index.php" class="tooltip">
                  <span class="tooltiptext">Vous devez vous connecter</span>
                  Recettes</a>
              </li>
            <?php elseif ($_SESSION["membre"]['pseudo']) : ?>
              <li><a href="/fiches/culture.php">Culture</a></li>
              <li><a href="/fiches/nuisibles.php">Nuisibles</a></li>
              <li><a href="/fiches/rescousse.php">Rescousse</a></li>
              <li><a href="/fiches/arrosage.php">Arrosage</a></li>
              <li><a href="/fiches/recettes.php">Recettes</a></li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
  </header>