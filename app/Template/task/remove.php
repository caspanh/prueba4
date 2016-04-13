<div class="page-header">
    <h2 class="modificar"><?= t('Remove a task') ?></h2>
    <hr class="r" />
</div>

<div class="confirm">
    <p class="alert alert-info">
        <?= t('Do you really want to remove this task: "%s"?', $this->text->e($task['title'])) ?>
    </p>

    <div class="form-actions">
        <?= $this->url->link(t('Yes'), 'task', 'remove', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'confirmation' => 'yes'), true, 'btn btn-red') ?>
    <div class="botoncancel">
        <?= $this->url->link(t('cancel'), 'task', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'close-popover') ?>
    </div>
    </div>
</div>