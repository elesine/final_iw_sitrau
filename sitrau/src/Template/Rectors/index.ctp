<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rector[]|\Cake\Collection\CollectionInterface $rectors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rector'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Degrees'), ['controller' => 'Degrees', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Degree'), ['controller' => 'Degrees', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rectors index large-9 medium-8 columns content">
    <h3><?= __('Rectors') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('degree_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rectors as $rector): ?>
            <tr>
                <td><?= $this->Number->format($rector->id) ?></td>
                <td><?= $rector->has('user') ? $this->Html->link($rector->user->id, ['controller' => 'Users', 'action' => 'view', $rector->user->id]) : '' ?></td>
                <td><?= $rector->has('degree') ? $this->Html->link($rector->degree->name, ['controller' => 'Degrees', 'action' => 'view', $rector->degree->id]) : '' ?></td>
                <td><?= h($rector->status) ?></td>
                <td><?= h($rector->created) ?></td>
                <td><?= h($rector->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rector->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rector->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rector->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rector->id)]) ?>
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
