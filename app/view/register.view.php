<div class="register-container">
        <h2>Créer un compte</h2>
        <?php if (!empty($error_message)) : ?>
            <p class="error-message"><?= htmlspecialchars($error_message) ?></p>
        <?php endif; ?>
        <?php if (!empty($success_message)) : ?>
            <p class="success-message"><?= htmlspecialchars($success_message) ?></p>
        <?php endif; ?>
        <form action="index.php?route=valregister" method="post" class="register-form" autocomplete="off">
            <div>
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required value="<?= htmlspecialchars($_POST['username'] ?? '') ?>">
            </div>
            <div>
                <label for="lastname">Nom :</label>
                <input type="text" id="lastname" name="lastname" required value="<?= htmlspecialchars($_POST['lastname'] ?? '') ?>">
            </div>
            <div>
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="firstname" required value="<?= htmlspecialchars($_POST['firstname'] ?? '') ?>">
            </div>
            <div>
                <label for="email">Adresse e-mail :</label>
                <input type="email" id="email" name="email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
            </div>
            <div>
                <label for="age">Âge :</label>
                <input type="number" id="age" name="age" min="1" max="120" required value="<?= htmlspecialchars($_POST['age'] ?? '') ?>">
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirm">Confirmer le mot de passe :</label>
                <input type="password" id="password_confirm" name="password_confirm" required>
            </div>
            <input class="btn-submit" type="submit" value="Créer le compte">
        </form>
    </div>