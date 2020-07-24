<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rector $rector
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Rector'), ['action' => 'edit', $rector->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Rector'), ['action' => 'delete', $rector->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rector->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Rectors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rector'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rectors view large-9 medium-8 columns content">
    <h3><?= h($rector->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $rector->has('user') ? $this->Html->link($rector->user->id, ['controller' => 'Users', 'action' => 'view', $rector->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Degree') ?></th>
            <td><?= $rector->has('degree') ? $this->Html->link($rector->degree->name, ['controller' => 'Degrees', 'action' => 'view', $rector->degree->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($rector->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($rector->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($rector->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $rector->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
