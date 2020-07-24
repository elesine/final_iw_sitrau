<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Receptionist[]|\Cake\Collection\CollectionInterface $receptionist
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Receptionist'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="receptionist index large-9 medium-8 columns content">
    <h3><?= __('Receptionist') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($receptionist as $receptionist): ?>
            <tr>
                <td><?= $this->Number->format($receptionist->id) ?></td>
                <td><?= $receptionist->has('user') ? $this->Html->link($receptionist->user->id, ['controller' => 'Users', 'action' => 'view', $receptionist->user->id]) : '' ?></td>
                <td><?= h($receptionist->status) ?></td>
                <td><?= h($receptionist->created) ?></td>
                <td><?= h($receptionist->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $receptionist->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $receptionist->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $receptionist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $receptionist->id)]) ?>
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
