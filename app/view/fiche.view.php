<h1>Trombinoscope</h1>
<div class="student">
    <figure class="photo">
        <?php if (!empty($personne['picture'])): ?>
            <img src="<?= htmlspecialchars($personne['picture']) ?>" alt="Photo de <?= htmlspecialchars($personne['name']) ?>" />
        <?php endif; ?>
    </figure>
    <div class="student-infos">
        <p class="name"><?= htmlspecialchars($personne['name']) ?></p>
        <?php if (!empty($personne['role'])): ?>
            <p class="role"><?= htmlspecialchars($personne['role']) ?></p>
        <?php endif; ?>
        <?php if (!empty($personne['description'])): ?>
            <p class="description"><?= htmlspecialchars($personne['description']) ?></p>
        <?php endif; ?>
    </div>
</div>