<section id="main">
<div class="page-header">
        <ul>
        	<span class="color">
           <li>
                <i class="fa fafolder fa-fw"></i>

                <?= $this->url->link(t('Project management'), 'project', 'index') ?>
            </li>
        	 <li>
              <i class="fa fauser fa-fw"></i>
                <?= $this->url->link(t('Gestion de Usuarios'), 'user', 'index') ?>
                            </li>
            <li>
                <i class="fa fauser fa-fw"></i>
                <?= $this->url->link(t('Users overview'), 'projectuser', 'managers') ?>

            </li>
            
            <li>
                <i class="fa faeye fa-fw"></i>
                <?= $this->url->link('Inicio', 'app', 'index', array(), false, '', t('Dashboard')) ?>

            </li>

             <li>
                <i class="fa fasliders fa-fw"></i>

                <?= $this->url->link(t('Gantt chart'), 'gantt', 'projects') ?>

            </li>
        </div>
        </span>
        </ul>
    <section class="sidebar-container" id="config-section">

        <?= $this->render($sidebar_template) ?>

        <div class="sidebar-content">
            <?= $content_for_sublayout ?>
        </div>
    </section>
</section>