<div class="page-header">
    <h2 class="modificar"><?= t('Edit date') ?></h2>
    <hr class="r" />
</div>
<form class="popover-form" method="post" action="<?= $this->url->href('taskmodification', 'updateDate', array('task_id' => $task['id'], 'project_id' => $task['project_id'])) ?>" autocomplete="off">

    <?= $this->form->csrf() ?>
    <?= $this->form->hidden('id', $values) ?>
    <?= $this->form->hidden('project_id', $values) ?>

    <div class="form-column" style="display: none;">
        <?= $this->form->label(t('Title'), 'title') ?>
        <?= $this->form->text('title', $values, $errors, array('autofocus', 'required', 'maxlength="200"', 'tabindex="1"')) ?>
        <?= $this->task->selectAssignee($users_list, $values, $errors) ?>
        <?= $this->task->selectCategory($categories_list, $values, $errors) ?>
        <?= $this->task->selectPriority($project, $values) ?>
        <?= $this->task->selectScore($values, $errors) ?>
    </div>
    <div class="form-column" style="display: none;">
        <?= $this->task->selectTimeEstimated($values, $errors) ?>
        <?= $this->task->selectTimeSpent($values, $errors) ?>
        <?= $this->task->selectStartDate($values, $errors) ?>
    </div>

    <div class="form-column">
        <?= $this->task->selectDueDate($values, $errors) ?>
    </div>

    <div class="form-clear"style="display: none;">
        <?= $this->render('task/color_picker', array('colors_list' => $colors_list, 'values' => $values)) ?>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue" tabindex="15"><?= t('Save') ?></button>
    <div class="botoncancel">
        <?= $this->url->link(t('cancel'), 'task', 'show', array('task_id' => $task['id'], 'project_id' => $task['project_id']), false, 'close-popover') ?>
    </div>
    </div>
</form>