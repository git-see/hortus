 <!-- INSCRIPTION -->
 <div>
        <h2 id="inscription">Inscription</h2>
        <form action="/database/connexion_inscription/inscription.php" method="post" id="form">
            <div id="inscriptionDiv">
                <div>
                    <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" pattern="[A-Za-z]{2,10}" required>
                    <p style="font-size:11px; text-align:left;margin-top:-10px; padding-left:15px;">De 2 à 10 caractères majuscules/minuscules</p>
                </div>

                <div>
                    <input type="email" name="mail" id="mail" placeholder="Mail" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required>
                </div>

                <div>
                    <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{12,}" required>
                    <p style="font-size:11px; text-align:left;margin-top:-10px; padding-left:15px;">Minimum 12 caractères: majuscules/minuscules, chiffres,spéciaux </p>
                </div>

                <div>
                    <button id="inscriptionButton" type="submit">M'inscrire</button>
                </div>
            </div>
        </form>
    </div>