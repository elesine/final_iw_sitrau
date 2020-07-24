<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AcademicSemester $academicSemester
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $academicSemester->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $academicSemester->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Academic Semesters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assignment'), ['controller' => 'Assignment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignment', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="academicSemesters form large-9 medium-8 columns content">
    <?= $this->Form->create($academicSemester) ?>
    <fieldset>
        <legend><?= __('Edit Academic Semester') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('school_id', ['options' => $schools, 'empty' => true]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
