<div class="page-header">
    <h2 class="modificar"><?= t('Add a new swimlane') ?></h2>
    <hr class="r" /> 
</div>
<form class="popover-form" method="post" action="<?= $this->url->href('swimlane', 'save', array('project_id' => $project['id'])) ?>" autocomplete="off">

    <?= $this->form->csrf() ?>
    <?= $this->form->hidden('project_id', $values) ?>

    <?= $this->form->label(t('Name'), 'name') ?>
    <?= $this->form->text('name', $values, $errors, array('autofocus', 'required', 'maxlength="50"')) ?>

    <?= $this->form->label(t('Description'), 'description') ?>
    <?= $this->form->textarea('description', $values, $errors, array(), 'markdown-editor') ?>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue"><?= t('Save') ?></button>
    <div class="botoncancel">
        <?= $this->url->link(t('cancel'), 'Swimlane', 'index', array('project_id' => $project['id']), false, 'close-popover') ?>
    </div>
    </div>
</form>
