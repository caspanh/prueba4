<div class="project-header1">
    <div class="page-header1">
    <ul>
    <?= $this->hook->render('template:project:header:before', array('project' => $project)) ?>

    <?= $this->render('project_header/dropdown', array('project' => $project, 'board_view' => $board_view)) ?>
    <?= $this->render('project_header/views', array('project' => $project, 'filters' => $filters)) ?>
   

    <?= $this->hook->render('template:project:header:after', array('project' => $project)) ?>
    </ul>
</div>
<div class="posicion">

 <?= $this->render('project_header/search', array(
        'project' => $project,
        'filters' => $filters,
        'custom_filters_list' => isset($custom_filters_list) ? $custom_filters_list : array(),
        'users_list' => isset($users_list) ? $users_list : array(),
        'categories_list' => isset($categories_list) ? $categories_list : array(),
    )) ?>
</div>