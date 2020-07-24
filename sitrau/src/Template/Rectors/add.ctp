<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rector $rector
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rectors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rectors form large-9 medium-8 columns content">
    <?= $this->Form->create($rector) ?>
    <fieldset>
        <legend><?= __('Add Rector') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->control('degree_id', ['options' => $degrees, 'empty' => true]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
