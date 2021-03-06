<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Director[]|\Cake\Collection\CollectionInterface $directors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Director'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="directors index large-9 medium-8 columns content">
    <h3><?= __('Directors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('degree_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($directors as $director): ?>
            <tr>
                <td><?= $this->Number->format($director->id) ?></td>
                <td><?= $director->has('user') ? $this->Html->link($director->user->id, ['controller' => 'Users', 'action' => 'view', $director->user->id]) : '' ?></td>
                <td><?= $director->has('degree') ? $this->Html->link($director->degree->name, ['controller' => 'Degrees', 'action' => 'view', $director->degree->id]) : '' ?></td>
                <td><?= $director->has('department') ? $this->Html->link($director->department->name, ['controller' => 'Departments', 'action' => 'view', $director->department->id]) : '' ?></td>
                <td><?= h($director->status) ?></td>
                <td><?= h($director->created) ?></td>
                <td><?= h($director->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $director->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $director->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $director->id], ['confirm' => __('Are you sure you want to delete # {0}?', $director->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
