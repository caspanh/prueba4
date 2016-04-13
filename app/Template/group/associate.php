<section id="main">
    <div class="page-header">
        <ul>
            <span class="color">
            <li><i class="fa fausers fa-fw"></i><?= $this->url->link(t('View all groups'), 'group', 'index') ?></li>
            </span>
            <span class="color">
            
            <li><i class="fa fauser fa-fw"></i><?= $this->url->link(t('View group members'), 'group', 'users', array('group_id' => $group['id'])) ?></li>
            </span>
        </ul>
    </div>
    <?php if (empty($users)): ?>
        <p class="alert"><?= t('There is no user available.') ?></p>
    <?php else: ?>
        <form method="post" action="<?= $this->url->href('group', 'addUser', array('group_id' => $group['id'])) ?>" autocomplete="off">
            <?= $this->form->csrf() ?>
            <?= $this->form->hidden('group_id', $values) ?>

            <?= $this->form->label(t('User'), 'user_id') ?>
            <?= $this->form->select('user_id', $users, $values, $errors, array('required'), 'chosen-select') ?>

            <div class="form-actions">
                <button type="submit" class="btn btn-blue"><?= t('Save') ?></button>
            <div class="botoncancel">
                <?= $this->url->link(t('cancel'), 'group', 'index') ?>
            </div>
            </div>
        </form>
    <?php endif ?>
</section>
