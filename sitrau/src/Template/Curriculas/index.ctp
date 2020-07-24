<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curricula[]|\Cake\Collection\CollectionInterface $curriculas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Curricula'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Semesters'), ['controller' => 'Semesters', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Semester'), ['controller' => 'Semesters', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="curriculas index large-9 medium-8 columns content">
    <h3><?= __('Curriculas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('school_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($curriculas as $curricula): ?>
            <tr>
                <td><?= $this->Number->format($curricula->id) ?></td>
                <td><?= h($curricula->name) ?></td>
                <td><?= $curricula->has('school') ? $this->Html->link($curricula->school->name, ['controller' => 'Schools', 'action' => 'view', $curricula->school->id]) : '' ?></td>
                <td><?= h($curricula->status) ?></td>
                <td><?= h($curricula->created) ?></td>
                <td><?= h($curricula->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $curricula->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curricula->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curricula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curricula->id)]) ?>
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
