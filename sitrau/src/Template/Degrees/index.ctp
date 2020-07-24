<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Degree[]|\Cake\Collection\CollectionInterface $degrees
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Degree'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coordinators'), ['controller' => 'Coordinators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coordinator'), ['controller' => 'Coordinators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Deans'), ['controller' => 'Deans', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dean'), ['controller' => 'Deans', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Directors'), ['controller' => 'Directors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Director'), ['controller' => 'Directors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Rectors'), ['controller' => 'Rectors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rector'), ['controller' => 'Rectors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="degrees index large-9 medium-8 columns content">
    <h3><?= __('Degrees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acronym') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($degrees as $degree): ?>
            <tr>
                <td><?= $this->Number->format($degree->id) ?></td>
                <td><?= h($degree->name) ?></td>
                <td><?= h($degree->acronym) ?></td>
                <td><?= h($degree->status) ?></td>
                <td><?= h($degree->created) ?></td>
                <td><?= h($degree->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $degree->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $degree->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $degree->id], ['confirm' => __('Are you sure you want to delete # {0}?', $degree->id)]) ?>
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
