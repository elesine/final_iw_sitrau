<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StatusProcedure $statusProcedure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Status Procedures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List University Procedures'), ['controller' => 'UniversityProcedures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New University Procedure'), ['controller' => 'UniversityProcedures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="statusProcedures form large-9 medium-8 columns content">
    <?= $this->Form->create($statusProcedure) ?>
    <fieldset>
        <legend><?= __('Add Status Procedure') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
