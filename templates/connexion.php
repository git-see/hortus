    <!-- CONNEXION -->
    <div>
        <h2 id="connexion">Connexion</h2>
        <?php
        if (!empty($_SESSION['erreur'])) {
            echo '<div style="font-style:italic;text-align:center;color:red;">' . $_SESSION['erreur'] . '</div>';
            $_SESSION['erreur'] = "";
        }
        ?>
        <form action="/database/connexion_inscription/connexion.php" method="post" id="form">
            <div id="connexionDiv">
                <div>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" required>
                </div>

                <div>
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" required>
                </div>

                <div>
                    <button id="connexionButton" type="submit">Me connecter</button>
                </div>
                <p><a href="inscription.php">M'inscrire</a></p>
            </div>
        </form>
    </div>