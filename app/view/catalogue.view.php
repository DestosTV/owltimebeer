<h1 class="title">Catalogue</h1>
<div class="grid">
    <?php foreach ($bieres as $biere): ?>
        <a href="?route=beer&id=<?= urlencode($biere['id_beer']) ?>" style="text-decoration:none;color:inherit;">
            <div class="item">
                <img src="<?= htmlspecialchars($biere['photo']) ?>" alt="<?= htmlspecialchars($biere['name']) ?>" />
                <div class="hover-info">
                    <?= htmlspecialchars($biere['name']) ?> - <?= htmlspecialchars($biere['categorie']) ?>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>