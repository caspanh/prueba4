<div class="page-header">
    <h2 class="modificar"><?= t('Add an action') ?></h2>
    <hr class="r" />
</div>
<form class="popover-form" method="post" action="<?= $this->url->href('ActionCreation', 'event', array('project_id' => $project['id'])) ?>">
    <?= $this->form->csrf() ?>
    <?= $this->form->hidden('project_id', $values) ?>

    <?= $this->form->label(t('Action'), 'action_name') ?>
    <?= $this->form->select('action_name', $available_actions, $values) ?>

    <div class="form-actions">
        <button type="submit" class="btn btn-blue"><?= t('Next step') ?></button>
    <div class="botoncancel">
        <?= $this->url->link(t('cancel'), 'Action', 'index', array(), false, 'close-popover') ?>
    </div>
    </div>
</form>