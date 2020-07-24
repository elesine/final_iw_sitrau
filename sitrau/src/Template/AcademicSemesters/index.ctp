<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AcademicSemester[]|\Cake\Collection\CollectionInterface $academicSemesters
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Academic Semester'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Schools'), ['controller' => 'Schools', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New School'), ['controller' => 'Schools', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assignment'), ['controller' => 'Assignment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assignment'), ['controller' => 'Assignment', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="academicSemesters index large-9 medium-8 columns content">
    <h3><?= __('Academic Semesters') ?></h3>
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
            <?php foreach ($academicSemesters as $academicSemester): ?>
            <tr>
                <td><?= $this->Number->format($academicSemester->id) ?></td>
                <td><?= h($academicSemester->name) ?></td>
                <td><?= $academicSemester->has('school') ? $this->Html->link($academicSemester->school->name, ['controller' => 'Schools', 'action' => 'view', $academicSemester->school->id]) : '' ?></td>
                <td><?= h($academicSemester->status) ?></td>
                <td><?= h($academicSemester->created) ?></td>
                <td><?= h($academicSemester->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $academicSemester->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $academicSemester->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $academicSemester->id], ['confirm' => __('Are you sure you want to delete # {0}?', $academicSemester->id)]) ?>
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
