<section class="trombinoscope">
    <h2>Notre Équipe</h2>
    <div class="team-grid">
        <?php foreach ($personnes as $personne): ?>
            <a href="?route=fiche&id=<?= urlencode($personne['id_trombi']) ?>" style="text-decoration:none;color:inherit;">
                <div class="member">
                    <div class="photo">
                        <?php if (!empty($personne['picture'])): ?>
                            <img src="<?= htmlspecialchars($personne['picture']) ?>" alt="Photo de <?= htmlspecialchars($personne['name']) ?>">
                        <?php else: ?>
                            <img src="public/images/defaut.png" alt="Photo par défaut">
                        <?php endif; ?>
                    </div>
                    <p>
                        <?= htmlspecialchars($personne['name']) ?><br>
                        <span><?= htmlspecialchars($personne['role']) ?></span>
                    </p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>