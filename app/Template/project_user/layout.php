<section id="main">
    <div class="page-header">
        <ul>
        <div class="color">
         <?php if ($this->user->hasAccess('ProjectCreation', 'create')): ?>
                <li>
                    <i class="fa fafaplus fa-fw"></i>
                    <?= $this->url->link(t('New project'), 'ProjectCreation', 'create', array(), false, 'popover') ?> </li>

            <?php endif ?>
            
            <li>
                <i class="fa falock fa-fw"></i>
                <?= $this->url->link(t('New private project'), 'ProjectCreation', 'createPrivate', array(), false, 'popover') ?>
            </li>
            <li>
                <i class="fa fafolder fa-fw"></i>
                <?= $this->url->link(t('Projects list'), 'project', 'index') ?>
            </li>
            <?php if ($this->user->hasAccess('gantt', 'projects')): ?>
                <li>
                    <i class="fa fasliders fa-fw"></i>
                    <?= $this->url->link(t('Projects Gantt chart'), 'gantt', 'projects') ?>
                </li>
                <li>
                <i class="fa fa-life-ring fa-fw"></i>

                <?= $this->url->link('Inicio', 'app', 'index', array(), false, '', t('Dashboard')) ?>

            </li>
            <?php endif ?>
            </div>
        </ul>
    </div>
    <section class="sidebar-container">

        <?= $this->render($sidebar_template, array('users' => $users, 'filter' => $filter)) ?>

        <div class="sidebar-content">
            <div class="page-header">
                <h2><?= $this->text->e($title) ?></h2>
            </div>
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>