<div class="page-header">
    <h2 class="modificar"><?= t('Close a task') ?></h2>
    <hr class="r" />
</div>

<div class="confirm">
    <p class="alert alert-info">
        <?= t('Do you really want to close the task "%s" as well as all subtasks?', $task['title']) ?>
    </p>

    <div class="form-actions">
        <?= $this->url->link(t('Yes'), 'taskstatus', 'close', array('task_id' => $task['id'], 'project_id' => $task['project_id'], 'confirmation' => 'yes'), true, 'btn btn-red popover-link') ?>
    <div class="botoncancel">
        <?= $this->url->link(t('cancel'), 'task', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'close-popover') ?>
    </div>
    </div>
</div>