<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dean $dean
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dean'), ['action' => 'edit', $dean->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dean'), ['action' => 'delete', $dean->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dean->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Deans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dean'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deans view large-9 medium-8 columns content">
    <h3><?= h($dean->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $dean->has('user') ? $this->Html->link($dean->user->id, ['controller' => 'Users', 'action' => 'view', $dean->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Degree') ?></th>
            <td><?= $dean->has('degree') ? $this->Html->link($dean->degree->name, ['controller' => 'Degrees', 'action' => 'view', $dean->degree->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Faculty') ?></th>
            <td><?= $dean->has('faculty') ? $this->Html->link($dean->faculty->name, ['controller' => 'Faculties', 'action' => 'view', $dean->faculty->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dean->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dean->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dean->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $dean->status ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
