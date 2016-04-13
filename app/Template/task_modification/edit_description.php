<div class="page-header">
    <h2 class="modificar"><?= t('Edit the description') ?></h2>
    <hr class="r" />
</div>

<form class="popover-form" method="post" action="<?= $this->url->href('taskmodification', 'updateDescription', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>" autocomplete="off">

    <?= $this->form->csrf() ?>
    <?= $this->form->hidden('id', $values) ?>

    <?= $this->form->textarea(
        'description',
        $values,
        $errors,
        array(
            'autofocus',
            'placeholder="'.t('Leave a description').'"',
            'data-mention-search-url="'.$this->url->href('UserHelper', 'mention', array('project_id' => $task['project_id'])).'"'
        ),
        'markdown-editor'
    ) ?>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue"><?= t('Save') ?></button>
        <div class="botoncancel">
        <?= $this->url->link(t('cancel'), 'task', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'close-popover') ?>
    </div>
    </div>
</form>
