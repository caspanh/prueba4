<?= $this->hook->render('template:app:filters-helper:before', isset($project) ? array('project' => $project) : array()) ?>
<div class="dropdown">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon" title="<?= t('Default filters') ?>"><i class="fa fa-filter fa-fw"></i><i class="fa fa-caret-down"></i></a>
    <ul>
        <li><a href="#" class="filter-helper filter-reset" data-filter="<?= isset($reset) ? $reset : '' ?>" title="<?= t('Keyboard shortcut: "%s"', 'r') ?>"><?= t('Reset filters') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter="estado:abierto asignado:yo"><?= t('My tasks') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter="estado:abierto asignado:yo dia:mañana"><?= t('My tasks due tomorrow') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter="estado:abierto entregar:hoy"><?= t('Tasks due today') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter="estado:abierto entregar:mañana"><?= t('Tasks due tomorrow') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter="estado:abierto entregar:ayer"><?= t('Tasks due yesterday') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter="estado:cerrado"><?= t('Closed tasks') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter="estado:abierto"><?= t('Open tasks') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter="estado:abierto asignado:nadie"><?= t('Not assigned') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter="estado:abierto categoria:ninguna"><?= t('No category') ?></a></li>
      
    </ul>
</div>
<?= $this->hook->render('template:app:filters-helper:after', isset($project) ? array('project' => $project) : array()) ?>