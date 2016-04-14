<section id="main">
    <div class="page-header">
    <ul>
        <div class="color">
             <li>
                <i class="fa falock fa-fw"></i>
                <?= $this->url->link(t('New private project'), 'ProjectCreation', 'createPrivate', array(), false, 'popover') ?>
            </li>
             <li>
                <i class="fa fasearch fa-fw"></i>
                <?= $this->url->link(t('Search'), 'search', 'index') ?>
            </li>
              <li>
                <i class="fa fafolder fa-fw"></i>
                <?= $this->url->link(t('Project management'), 'project', 'index') ?>
            </li>
            <li><i class="fa fauser fa-fw"></i><?= $this->url->link(t('All users'), 'user', 'index') ?></li>

            <li><i class="fa fafaplus fa-fw"></i><?= $this->url->link(t('New local user'), 'user', 'create') ?></li>

            <li><i class="fa fafaplus fa-fw"></i><?= $this->url->link(t('New remote user'), 'user', 'create', array('remote' => 1)) ?></li>
            </div>
        </ul>
        
    </div>
    <section class="sidebar-container" id="user-section">

        <?= $this->render('user/sidebar', array('user' => $user)) ?>

        <div class="sidebar-content">
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>