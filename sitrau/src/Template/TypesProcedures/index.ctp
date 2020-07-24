<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TypesProcedure[]|\Cake\Collection\CollectionInterface $typesProcedures
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Types Procedure'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List University Procedures'), ['controller' => 'UniversityProcedures', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New University Procedure'), ['controller' => 'UniversityProcedures', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="typesProcedures index large-9 medium-8 columns content">
    <h3><?= __('Types Procedures') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($typesProcedures as $typesProcedure): ?>
            <tr>
                <td><?= $this->Number->format($typesProcedure->id) ?></td>
                <td><?= h($typesProcedure->name) ?></td>
                <td><?= h($typesProcedure->status) ?></td>
                <td><?= h($typesProcedure->created) ?></td>
                <td><?= h($typesProcedure->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $typesProcedure->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $typesProcedure->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $typesProcedure->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typesProcedure->id)]) ?>
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
