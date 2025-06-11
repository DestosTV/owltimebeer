<div class="connexion">
    <div class="contour">
        <h3>Accédez à votre compte</h3>
        <form action="?route=vallogin" method="post" class="formulaire">
            <div>
            <div class="entry">
                <label for="login">Nom d'utilisateur :</label>
                <input class="txt" type="text" id="login" name="login" required>
            </div>
            <div class="entry">
                <label for="password">Mot de passe :</label>
                <input class="txt" type="password" id="password" name="password" required>
            </div>
            </div>
        <input class="validation" type="submit" value="Se connecter">
        </form>

        <div class="liens">
            <a class="lienmdp" href="#">Mot de passe oublié</a>
            <a class="lienpascompte" href="?route=register"> Je n'ai pas de compte</a>
        </div>
    </div>
</div>
