<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Receptionist $receptionist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Receptionist'), ['action' => 'edit', $receptionist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Receptionist'), ['action' => 'delete', $receptionist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receptionist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Receptionist'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Receptionist'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="receptionist view large-9 medium-8 columns content">
    <h3><?= h($receptionist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $receptionist->has('user') ? $this->Html->link($receptionist->user->id, ['controller' => 'Users', 'action' => 'view', $receptionist->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($receptionist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($receptionist->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($receptionist->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $receptionist->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
