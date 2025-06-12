<h1><?= htmlspecialchars($biere['name']) ?></h1>
<div class="beer">
    <img src="<?= htmlspecialchars($biere['photo']) ?>" alt="<?= htmlspecialchars($biere['name']) ?>" />
    <p class="categorie">Catégorie : <?= htmlspecialchars($biere['categorie']) ?></p>
    <?php if (!empty($biere['description'])): ?>
        <p class="description"><?= htmlspecialchars($biere['description']) ?></p>
    <?php endif; ?>
</div>