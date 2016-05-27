<section id="main">
    <div class="page-header">
        <ul>
        <span class="color">
             <?php if ($this->user->hasAccess('ProjectCreation', 'create')): ?>
                <li>
                
                    <i class="fa fafaplus fa-fw"></i>
                    <?= $this->url->link(t('New project'), 'ProjectCreation', 'create', array(), false, 'popover') ?>
                   
                </li>

            <?php endif ?>
            
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
            <li>
                    <i class="fa fauser fa-fw"></i>
                    <?= $this->url->link(t('Administración de usuarios'), 'user', 'index') ?>
                </li>

                <li>
                    <i class="fa facog fa-fw"></i>
                    <?= $this->url->link (t('Settings'), 'config', 'index') ?>
                </li>

            <?php if ($this->user->hasAccess('user', 'index')): ?>
            

            <?php endif ?>
            </span>
        </ul>
    </div>
    <section class="sidebar-container" id="dashboard">
        <?= $this->render($sidebar_template, array('user' => $user)) ?>
        <div class="sidebar-content">
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>