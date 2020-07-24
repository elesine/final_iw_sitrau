<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\School $school
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $school->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $school->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Academic Semesters'), ['controller' => 'AcademicSemesters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Academic Semester'), ['controller' => 'AcademicSemesters', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coordinators'), ['controller' => 'Coordinators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordinator'), ['controller' => 'Coordinators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curriculas'), ['controller' => 'Curriculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curricula'), ['controller' => 'Curriculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="schools form large-9 medium-8 columns content">
    <?= $this->Form->create($school) ?>
    <fieldset>
        <legend><?= __('Edit School') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('department_id', ['options' => $departments, 'empty' => true]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
