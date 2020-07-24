<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curricula $curricula
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $curricula->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $curricula->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Curriculas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="curriculas form large-9 medium-8 columns content">
    <?= $this->Form->create($curricula) ?>
    <fieldset>
        <legend><?= __('Edit Curricula') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('school_id', ['options' => $schools, 'empty' => true]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
