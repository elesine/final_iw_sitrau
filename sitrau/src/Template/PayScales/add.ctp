<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PayScale $payScale
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pay Scales'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="payScales form large-9 medium-8 columns content">
    <?= $this->Form->create($payScale) ?>
    <fieldset>
        <legend><?= __('Add Pay Scale') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('amount');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
