<div style="color: green;">
    Green Controller Index Action
</div>

<?php if (isset($data['contacts'])) : ?>
    <ul>
        <?php foreach ($data['contacts'] as $contact => $value) : ?>
            <li><?= $contact ?>: <?= $value ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>