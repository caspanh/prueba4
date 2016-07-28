<div class="page-header">
    <h2 class="modificar"><?= $this->text->e($file['name']) ?></h2>
    <hr class="r">
</div>
<div class="file-viewer">
    <?php if ($file['is_image']): ?>
        <img src="<?= $this->url->href('FileViewer', 'image', $params) ?>" alt="<?= $this->text->e($file['name']) ?>">
    <?php elseif ($type === 'markdown'): ?>
        <article class="markdown">
            <?= $this->text->markdown($content) ?>
        </article>
    <?php elseif ($type === 'text'): ?>
        <pre><?= $content ?></pre>
    <?php endif ?>

    

</div>