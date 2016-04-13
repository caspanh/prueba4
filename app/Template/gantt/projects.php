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
                <i class="fa fafolder fa-fw"></i><?= $this->url->link(t('Projects list'), 'project', 'index') ?>
            </li>
            <?php if ($this->user->hasAccess('projectuser', 'managers')): ?>
                <li><i class="fa fauser fa-fw"></i><?= $this->url->link(t('Users overview'), 'projectuser', 'managers') ?></li>
            <?php endif ?>
            </span>
        </ul>
    </div>
    <section>
        <?php if (empty($projects)): ?>
            <p class="alert"><?= t('No project') ?></p>
        <?php else: ?>
            <div
                id="gantt-chart"
                data-records='<?= json_encode($projects, JSON_HEX_APOS) ?>'
                data-save-url="<?= $this->url->href('gantt', 'saveProjectDate') ?>"
                data-label-managers="<?= t('Project managers') ?>"
                data-label-members="<?= t('Project members') ?>"
                data-label-gantt-link="<?= t('Gantt chart for this project') ?>"
                data-label-board-link="<?= t('Project board') ?>"
                data-label-start-date="<?= t('Start date:') ?>"
                data-label-end-date="<?= t('End date:') ?>"
                data-label-not-defined="<?= t('There is no start date or end date for this project.') ?>"
            ></div>
        <?php endif ?>
    </section>
</section>
