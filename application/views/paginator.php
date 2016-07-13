<?php if (!is_null($data['paginator'])): ?>
<div class="paginator">
    <?php foreach ($data['paginator'] as $pg_item): ?>
    <?php if ($pg_item['url'] == 'none'): ?>
        <span class="btn-disabled"><?php echo $pg_item['text'] ?></span>
    <?php else: ?>
        <a href="<?php echo $pg_item['url'] ?>"><span class="btn-enabled"><?php echo $pg_item['text'] ?></span></a>
    <?php endif; ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>