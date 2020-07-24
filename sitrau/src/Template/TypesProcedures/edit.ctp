<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesProcedure $typesProcedure
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $typesProcedure->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $typesProcedure->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Types Procedures'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List University Procedures'), ['controller' => 'UniversityProcedures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New University Procedure'), ['controller' => 'UniversityProcedures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typesProcedures form large-9 medium-8 columns content">
    <?= $this->Form->create($typesProcedure) ?>
    <fieldset>
        <legend><?= __('Edit Types Procedure') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
