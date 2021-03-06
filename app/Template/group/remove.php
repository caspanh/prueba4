<section id="main">
    <div class="page-header">
        <ul>
            <span class="color">
            <li><i class="fa fa-users fa-fw"></i><?= $this->url->link(t('View all groups'), 'group', 'index') ?></li>
            <li><i class="fa fa-user fa-fw"></i><?= $this->url->link(t('View group members'), 'group', 'users', array('group_id' => $group['id'])) ?></li>
            </span>
        </ul>
    </div>
    <div class="confirm">
        <p class="alert alert-info"><?= t('Do you really want to remove this group: "%s"?', $group['name']) ?></p>

        <div class="form-actions">
            <?= $this->url->link(t('Yes'), 'group', 'remove', array('group_id' => $group['id']), true, 'btn btn-red') ?>
        <div class="botoncancel">
            <?= $this->url->link(t('cancel'), 'group', 'index') ?>
        </div>
        </div>
    </div>
</section>
