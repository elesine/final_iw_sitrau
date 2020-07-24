<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Semester $semester
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $semester->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $semester->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Semesters'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Curriculas'), ['controller' => 'Curriculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curricula'), ['controller' => 'Curriculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Courses'), ['controller' => 'Courses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Course'), ['controller' => 'Courses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="semesters form large-9 medium-8 columns content">
    <?= $this->Form->create($semester) ?>
    <fieldset>
        <legend><?= __('Edit Semester') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('curricula_id', ['options' => $curriculas, 'empty' => true]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
