  <!-- AJOUTER UNE ASTUCE -->
  <div>
    <div id="butBtn">
      <button id="ajouterAstuce"><a href="/formulaires/formulaire.php">Ajouter une astuce</a></button>
    </div>

    <h2 id="domaine"><?= $titre ?></h2>

    <?php
    foreach ($result as $domaine) {
      if ($domaine['domaines'] == $titre) {;
    ?>
        <div id="fiche">
          <div class="fiche">
            <h3><?php echo strip_tags(stripslashes(htmlentities(trim($domaine['sujet'])))) ?></h3>
          </div>
          <div class="fiche">
            <p><?php echo strip_tags(stripslashes(htmlentities(trim($domaine['astuce'])))) ?></p>
          </div>
          <div class="fiche">
            <p>Par <?php echo strip_tags(stripslashes(htmlentities(trim($domaine['pseudo'])))) ?>, le <?php echo strip_tags(stripslashes(htmlentities(trim($domaine['created_at'])))) ?></p>
          </div>
        </div>
    <?php
      }
    }
    ?>