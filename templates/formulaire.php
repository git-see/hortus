<div>
        <h2 id="domaine">Astuce</h2>
        <form action="/database/astuces/add.php" method="post" id="form">
            <?php if ($_SESSION["membre"]['pseudo']) : ?>
                <div id="formDiv">
                    <div>
                        <label for="domaines">Domaine</label>
                        <select type="text" id="domaines" name="domaines" required>
                            <option value="Culture" selected="selected">Culture</option>
                            <option value="Nuisibles">Nuisibles</option>
                            <option value="Rescousse">Rescousse</option>
                            <option value="Arrosage">Arrosage</option>
                            <option value="Recettes">Recettes</option>
                        </select>
                    </div>
                    <div>
                        <label for="sujet">Sujet: </label>
                        <input type="text" name="sujet" id="sujet" placeholder="Sujet" value="" required>
                    </div>

                    <div>
                        <label for="astuce">Astuce: </label>
                        <textarea name="astuce" id="astuce" placeholder="Écrivez ici votre astuce..." value="" required></textarea>
                    </div>
                    <p>
                        <label for="pseudo"></label>
                        <input type="hidden" name="pseudo" id="pseudo" value="<?php echo strip_tags(stripslashes(htmlentities(trim($_SESSION["membre"]["pseudo"])))) ?>" required>
                    </p>
                    <div>
                        <button type="submit" name="domaineButton" id="domaineButton">Ajouter</button>
                    </div>

                </div>
            <?php endif; ?>
        </form>
    </div>