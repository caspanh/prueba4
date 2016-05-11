<section id="main">
    <div class="page-header">
        <ul>
            <div class="color">
            <li>
                <i class="fa fafolder fa-fw"></i>
                <?= $this->url->link(t('All projects'), 'project', 'index') ?>
            </li>
            </div>
        </ul>
    </div>

    <div class="filter-box">
        <form method="get" action="<?= $this->url->dir() ?>" class="search">
            <?= $this->form->hidden('controller', $values) ?>
            <?= $this->form->hidden('action', $values) ?>
            <?= $this->form->text('search', $values, array(), array(empty($values['search']) ? 'autofocus' : '', 'placeholder="'.t('Search').'"'), 'form-input-large') ?>
            <?= $this->render('app/filters_helper') ?>
        </form>
    </div>

    <?php if (empty($values['search'])): ?>
        <div class="listing">
            <h3><?= t('Advanced search') ?></h3>
            <p><?= t('Example of search:') ?><strong>project:"Nombre del proyecto" assignee:me due:tomorrow</strong></p>
            <ul>
                <li><?= t('Search by project: ') ?><strong>project:"Nombre del proyecto"</strong></li>
                <li><?= t('Search by column: ') ?><strong>column:"en_espera"</strong></li>
                <li><?= t('Search by assignee: ') ?><strong>assignee:"nombre del Concesionario (administrador)"</strong></li>
                <li><?= t('Search by color: ') ?><strong>color:"Blue"</strong></li>
                <li><?= t('Search by category: ') ?><strong>category:"Feature Request"</strong></li>
                <li><?= t('Search by description: ') ?><strong>description:"una descripcion breve"</strong></li>
                <li><?= t('Search by due date: ') ?><strong>due:"2016-05-12"</strong></li>
            </ul>
            
        </div>
    <?php elseif (! empty($values['search']) && $paginator->isEmpty()): ?>
        <p class="alert"><?= t('Nothing found.') ?></p>
    <?php elseif (! $paginator->isEmpty()): ?>
        <?= $this->render('search/results', array(
            'paginator' => $paginator,
        )) ?>
    <?php endif ?>

</section>