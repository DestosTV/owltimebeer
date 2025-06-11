<div class="connexion">
        <div class="contour">
        <h3>Créez votre compte !</h3>
        <form action="?route=valregister" method="post" class="register-form" autocomplete="off">
            <div>
            <div class="entry">
                <label for="username">Nom d'utilisateur :</label>
                <input class="txt" type="text" id="username" name="username" required value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
            </div>
            <div class="entry">
                <label for="lastname">Nom :</label>
                <input class="txt" type="text" id="lastname" name="lastname" required value="<?= htmlspecialchars($_POST['lastname'] ?? '') ?>">
            </div>
            <div class="entry">
                <label for="firstname">Prénom :</label>
                <input class="txt" type="text" id="firstname" name="firstname" required value="<?= htmlspecialchars($_POST['firstname'] ?? '') ?>">
            </div>
            <div class="entry">
                <label for="email">Adresse e-mail :</label>
                <input class="txt" type="email" id="email" name="email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
            </div>
            <div class="entry">
                <label for="password">Mot de passe :</label>
                <input class="txt" type="password" id="password" name="password" required>
            </div>
            <div class="entry">
                <label for="password_confirm">Confirmer le mot de passe :</label>
                <input class="txt" type="password" id="password_confirm" name="password_confirm" required>
            </div>
            </div>
            <input class="btnConnexion btn-submit" type="submit" value="Créer le compte">
        </form>
        </div>
    </div>