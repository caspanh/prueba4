<div class="page-header">
    <h2><?= t('Notifications') ?></h2>
</div>
<?php if (empty($types)): ?>
    <p class="alert"><?= t('No plugin has registered a project notification method. You can still configure individual notifications in your user profile.') ?></p>
<?php else: ?>
    <form method="post" action="<?= $this->url->href('project', 'notifications', array('project_id' => $project['id'])) ?>" autocomplete="off">

        <?= $this->form->csrf() ?>

        <h4><?= t('Notification methods:') ?></h4>
        <?= $this->form->checkboxes('notification_types', $types, $notifications) ?>

        <div class="form-actions">
            <button type="submit" class="btn btn-blue"><?= t('Save') ?></button>
        <div class="botoncancel">
            <?= $this->url->link(t('cancel'), 'project', 'show', array('project_id' => $project['id'])) ?>
        </div>
        </div>
    </form>
<?php endif ?>